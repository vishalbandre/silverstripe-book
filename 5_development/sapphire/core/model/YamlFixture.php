<?php

require_once 'thirdparty/spyc/Spyc.php';

/**
 * Uses the Spyc library to parse a YAML document (see http://yaml.org).
 * YAML is a simple markup languages that uses tabs and colons instead of the more verbose XML tags, 
 * and because of this much better for developers creating files by hand.
 * 
 * The contents of the YAML file are broken into three levels:
 * - Top level: class names - Page and ErrorPage. This is the name of the dataobject class that should be created. 
 *   The fact that ErrorPage is actually a subclass is irrelevant to the system populating the database. 
 *   Each identifier you specify delimits a new database record. 
 *   This means that every record needs to have an identifier, whether you use it or not.
 * - Third level: fields - each field for the record is listed as a 3rd level entry. 
 *   In most cases, the field�s raw content is provided. 
 *   However, if you want to define a relationship, you can do so using "=>"
 * 
 * There are a couple of lines like this:
 * @example Parent: =>Page.about
 * This will tell the system to set the ParentID database field to the ID of the Page object with the identifier �about�. 
 * This can be used on any has-one or many-many relationship. 
 * Note that we use the name of the relationship (Parent), and not the name of the database field (ParentID)
 *
 * On many-many relationships, you should specify a comma separated list of values.
 * @example MyRelation: =>Class.inst1,=>Class.inst2,=>Class.inst3
 * An crucial thing to note is that the YAML file specifies DataObjects, not database records. 
 * The database is populated by instantiating DataObject objects, setting the fields listed, and calling write(). 
 * This means that any onBeforeWrite() or default value logic will be executed as part of the test. 
 * This forms the basis of our testURLGeneration() test above.
 * 
 * For example, the URLSegment value of Page.staffduplicate is the same as the URLSegment value of Page.staff. 
 * When the fixture is set up, the URLSegment value of Page.staffduplicate will actually be my-staff-2.
 * 
 * Finally, be aware that requireDefaultRecords() is not called by the database populator - 
 * so you will need to specify standard pages such as 404 and home in your YAML file.
 * 
 * <code>
 * Page:
 *    home:
 *       Title: Home
 *    about:
 *       Title: About Us
 *    staff:
 *       Title: Staff
 *       URLSegment: my-staff
 *       Parent: =>Page.about
 *    staffduplicate:
 *       Title: Staff
 *       URLSegment: my-staff
 *       Parent: =>Page.about
 *    products:
 *       Title: Products
 * ErrorPage:
 *    404:
 *      Title: Page not Found
 *      ErrorCode: 404
 * </code>
 * 
 * @package sapphire
 * @subpackage core
 * 
 * @see http://spyc.sourceforge.net/
 * 
 * @todo Write unit test for YamlFixture
 *  
 * @param $fixtureFile The location of the .yml fixture file, relative to the site base dir
 */
class YamlFixture extends Object {
	
	/**
	 * The location of the .yml fixture file, relative to the site base dir
	 *
	 * @var string
	 */
	protected $fixtureFile;

	/**
	 * Array of fixture items
	 * 
	 * @var array
	 */
	protected $fixtureDictionary;
	
	function __construct($fixtureFile) {
		if(!file_exists(Director::baseFolder().'/'. $fixtureFile)) {
			user_error('YamlFixture::__construct(): Fixture path "' . $fixtureFile . '" not found', E_USER_ERROR);
		}
		
		$this->fixtureFile = $fixtureFile;
	}
	
	/**
	 * Get the ID of an object from the fixture.
	 * @param $className The data class, as specified in your fixture file.  Parent classes won't work
	 * @param $identifier The identifier string, as provided in your fixture file
	 */
	public function idFromFixture($className, $identifier) {
		return $this->fixtureDictionary[$className][$identifier];
	}
	
	/**
	 * Return all of the IDs in the fixture of a particular class name.
	 * 
	 * @return A map of fixture-identifier => object-id
	 */
	public function allFixtureIDs($className) {
		return $this->fixtureDictionary[$className];
	}

	/**
	 * Get an object from the fixture.
	 * 
	 * @param $className The data class, as specified in your fixture file.  Parent classes won't work
	 * @param $identifier The identifier string, as provided in your fixture file
	 */
	public function objFromFixture($className, $identifier) {
		$id = $this->idFromFixture($className, $identifier);
		if($id) return DataObject::get_by_id($className, $id);
	}
	
	/**
	 * Load a YAML fixture file into the database.
	 * Once loaded, you can use idFromFixture() and objFromFixture() to get items from the fixture.
	 * 
	 * Caution: In order to support reflexive relations which need a valid object ID,
	 * the record is written twice: first after populating all non-relational fields,
	 * then again after populating all relations (has_one, has_many, many_many).
	 */
	public function saveIntoDatabase() {
		$parser = new Spyc();
		$fixtureContent = $parser->load(Director::baseFolder().'/'.$this->fixtureFile);
		$this->fixtureDictionary = array();
		foreach($fixtureContent as $dataClass => $items) {
			if(ClassInfo::exists($dataClass)) {
				$this->writeDataObject($dataClass, $items);
			} else {
				$this->writeSQL($dataClass, $items);
			}
		}
	}
	
	/**
	 * Writes the fixture into the database using DataObjects
	 *
	 * @param string $dataClass
	 * @param array $items
	 */
	protected function writeDataObject($dataClass, $items) {
		foreach($items as $identifier => $fields) {
			$obj = new $dataClass();
			
			// If an ID is explicitly passed, then we'll sort out the initial write straight away
			// This is just in case field setters triggered by the population code in the next block
			// Call $this->write().  (For example, in FileTest)
			if(isset($fields['ID'])) {
				$obj->ID = $fields['ID'];
				$obj->write(false, true);
			}
			
			// Populate the dictionary with the ID
			foreach($fields as $fieldName => $fieldVal) {
				if($obj->many_many($fieldName) || $obj->has_many($fieldName) || $obj->has_one($fieldName)) continue;
				$obj->$fieldName = $this->parseFixtureVal($fieldVal);
			}
			$obj->write();
			
			// has to happen before relations in case a class is referring to itself
			$this->fixtureDictionary[$dataClass][$identifier] = $obj->ID;
			
			// Populate all relations
			foreach($fields as $fieldName => $fieldVal) {
				if($obj->many_many($fieldName) || $obj->has_many($fieldName)) {
					$parsedItems = array();
					$items = split(' *, *',trim($fieldVal));
					foreach($items as $item) {
						$parsedItems[] = $this->parseFixtureVal($item);
					}
					$obj->write();
					if($obj->has_many($fieldName)) {
						$obj->getComponents($fieldName)->setByIDList($parsedItems);
					} elseif($obj->many_many($fieldName)) {
						$obj->getManyManyComponents($fieldName)->setByIDList($parsedItems);
					}
				} elseif($obj->has_one($fieldName)) {
					$obj->{$fieldName . 'ID'} = $this->parseFixtureVal($fieldVal);
				}
			}
			$obj->write();
		}
	}
	
	/**
	 * Writes the fixture into the database directly using a database manipulation
	 *
	 * @param string $table
	 * @param array $items
	 */
	protected function writeSQL($table, $items) {
		foreach($items as $identifier => $fields) {
			$manipulation = array($table => array("fields" => array(), "command" => "insert")); 
			foreach($fields as $fieldName=> $fieldVal) { 
				$manipulation[$table]["fields"][$fieldName] = "'".$this->parseFixtureVal($fieldVal)."'"; 
			}
			DB::manipulate($manipulation);
			$this->fixtureDictionary[$table][$identifier] = DB::getGeneratedID($table);
		}
	}
	
	/**
	 * Parse a value from a fixture file.  If it starts with => it will get an ID from the fixture dictionary
	 */
	protected function parseFixtureVal($fieldVal) {
		// Parse a dictionary reference - used to set foreign keys
		if(substr($fieldVal,0,2) == '=>') {
			list($a, $b) = explode('.', substr($fieldVal,2), 2);
			return $this->fixtureDictionary[$a][$b];

		// Regular field value setting
		} else {
			return $fieldVal;
		}
	}
}
