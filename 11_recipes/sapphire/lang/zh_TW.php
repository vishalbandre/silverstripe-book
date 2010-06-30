<?php

/**
 * Chinese (Taiwan) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('zh_TW', $lang) && is_array($lang['zh_TW'])) {
	$lang['zh_TW'] = array_merge($lang['en_US'], $lang['zh_TW']);
} else {
	$lang['zh_TW'] = $lang['en_US'];
}

$lang['zh_TW']['BasicAuth']['ENTERINFO'] = '請輸入帳號密碼。';
$lang['zh_TW']['BasicAuth']['ERRORNOTADMIN'] = '那個使用者不是管理員。';
$lang['zh_TW']['BasicAuth']['ERRORNOTREC'] = '那組帳號密碼不對。';
$lang['zh_TW']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = '您為這個帳戶改密碼：';
$lang['zh_TW']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = '您可以用下列的帳號密碼登入：';
$lang['zh_TW']['ChangePasswordEmail.ss']['HELLO'] = '您好';
$lang['zh_TW']['ComplexTableField.ss']['ADDITEM'] = '新增';
$lang['zh_TW']['ComplexTableField.ss']['DELETE'] = '刪除';
$lang['zh_TW']['ComplexTableField.ss']['DELETEROW'] = '刪除此列';
$lang['zh_TW']['ComplexTableField.ss']['EDIT'] = '編輯';
$lang['zh_TW']['ComplexTableField.ss']['NOITEMSFOUND'] = '沒有資料';
$lang['zh_TW']['ComplexTableField.ss']['SHOW'] = '顯示';
$lang['zh_TW']['ComplexTableField.ss']['SORTASC'] = '向上排序';
$lang['zh_TW']['ComplexTableField.ss']['SORTDESC'] = '向下排序';
$lang['zh_TW']['ComplexTableField_popup.ss']['NEXT'] = '下一個';
$lang['zh_TW']['ComplexTableField_popup.ss']['PREVIOUS'] = '上一個';
$lang['zh_TW']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = '你必須先登入才能瀏覽草稿或歸檔內容。<a href="%s">回到正式發布站</a>';
$lang['zh_TW']['Controller']['FILE'] = '檔案';
$lang['zh_TW']['Controller']['IMAGE'] = '圖片';
$lang['zh_TW']['Date']['AGO'] = '以前';
$lang['zh_TW']['Date']['AWAY'] = '剩下';
$lang['zh_TW']['Date']['DAY'] = '日';
$lang['zh_TW']['Date']['DAYS'] = '日';
$lang['zh_TW']['Date']['HOUR'] = '小時';
$lang['zh_TW']['Date']['HOURS'] = '小時';
$lang['zh_TW']['Date']['MIN'] = '分鐘';
$lang['zh_TW']['Date']['MINS'] = '分鐘';
$lang['zh_TW']['Date']['MONTH'] = '月';
$lang['zh_TW']['Date']['MONTHS'] = '月';
$lang['zh_TW']['Date']['SEC'] = '秒';
$lang['zh_TW']['Date']['SECS'] = '秒';
$lang['zh_TW']['Date']['YEAR'] = '年';
$lang['zh_TW']['Date']['YEARS'] = '年';
$lang['zh_TW']['DateField']['VALIDDATEFORMAT'] = '請輸入有效的日期格式(DD/MM/YYYY).。';
$lang['zh_TW']['DropdownField']['CHOOSE'] = '(選擇)';
$lang['zh_TW']['EmailField']['VALIDATION'] = '請輸入一個電子郵件地址。';
$lang['zh_TW']['ErrorPage']['CODE'] = '錯誤代碼';
$lang['zh_TW']['FileIFrameField']['NOTEADDFILES'] = '一但您先儲存，您舊可以上載檔案。';
$lang['zh_TW']['ForgotPasswordEmail.ss']['HELLO'] = '您好';
$lang['zh_TW']['Form']['DATENOTSET'] = '(尚未設定日期數值)';
$lang['zh_TW']['Form']['FIELDISREQUIRED'] = '必須要填 %s';
$lang['zh_TW']['Form']['LANGAOTHER'] = '其他語言';
$lang['zh_TW']['Form']['LANGAVAIL'] = '可用的語言';
$lang['zh_TW']['Form']['NOTSET'] = '(尚未設定)';
$lang['zh_TW']['Form']['SAVECHANGES'] = '儲存更變';
$lang['zh_TW']['Form']['VALIDATIONALLDATEVALUES'] = '請確認您有設定所有的日期數值';
$lang['zh_TW']['Form']['VALIDATIONBANKACC'] = '請輸入一個有效的銀行帳戶號碼';
$lang['zh_TW']['Form']['VALIDATIONCREDITNUMBER'] = '請確認您輸入的 %s 信用卡號是有效的。';
$lang['zh_TW']['Form']['VALIDATIONFAILED'] = '認證失敗';
$lang['zh_TW']['Form']['VALIDATIONNOTUNIQUE'] = '您輸入的數值並不是獨特的。';
$lang['zh_TW']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = '密碼不相配';
$lang['zh_TW']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = '密碼不能是空的';
$lang['zh_TW']['Form']['VALIDATIONSTRONGPASSWORD'] = '密碼必須至少有一個數字和字母。';
$lang['zh_TW']['Form']['VALIDCURRENCY'] = '請輸入有效的貨幣。';
$lang['zh_TW']['GhostPage']['NOLINKED'] = '這個虛擬頁沒有被連結。';
$lang['zh_TW']['GSTNumberField']['VALIDATION'] = '請輸入有效的格林尼治標準時間。';
$lang['zh_TW']['HtmlEditorField']['ALTTEXT'] = '敘述';
$lang['zh_TW']['HtmlEditorField']['ANCHOR'] = '插入或編輯連結';
$lang['zh_TW']['HtmlEditorField']['BULLETLIST'] = '項目條列';
$lang['zh_TW']['HtmlEditorField']['BUTTONALIGNCENTER'] = '置中';
$lang['zh_TW']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = '整齊';
$lang['zh_TW']['HtmlEditorField']['BUTTONALIGNLEFT'] = '靠左對齊';
$lang['zh_TW']['HtmlEditorField']['BUTTONALIGNRIGHT'] = '靠右對齊';
$lang['zh_TW']['HtmlEditorField']['BUTTONBOLD'] = '粗體 (Ctrl+B)';
$lang['zh_TW']['HtmlEditorField']['BUTTONEDITIMAGE'] = '編輯圖片';
$lang['zh_TW']['HtmlEditorField']['BUTTONINSERTFLASH'] = '插入Flash';
$lang['zh_TW']['HtmlEditorField']['BUTTONINSERTIMAGE'] = '插入圖片';
$lang['zh_TW']['HtmlEditorField']['BUTTONINSERTLINK'] = '插入連結';
$lang['zh_TW']['HtmlEditorField']['BUTTONITALIC'] = '斜體 (Ctrl+I)';
$lang['zh_TW']['HtmlEditorField']['BUTTONREMOVELINK'] = '移除連結';
$lang['zh_TW']['HtmlEditorField']['BUTTONSTRIKE'] = '刪除線';
$lang['zh_TW']['HtmlEditorField']['BUTTONUNDERLINE'] = '底線 (Ctrl+U)';
$lang['zh_TW']['HtmlEditorField']['CHARMAP'] = '插入符號';
$lang['zh_TW']['HtmlEditorField']['COPY'] = '複製 (Ctrl+C)';
$lang['zh_TW']['HtmlEditorField']['CREATEFOLDER'] = '建立資料夾';
$lang['zh_TW']['HtmlEditorField']['CSSCLASS'] = '對齊/樣式';
$lang['zh_TW']['HtmlEditorField']['CSSCLASSCENTER'] = '獨立置中';
$lang['zh_TW']['HtmlEditorField']['CSSCLASSLEFT'] = '靠左被字包圍。';
$lang['zh_TW']['HtmlEditorField']['CSSCLASSRIGHT'] = '靠右被字包圍。';
$lang['zh_TW']['HtmlEditorField']['CUT'] = '剪下 (Ctrl+X)';
$lang['zh_TW']['HtmlEditorField']['DELETECOL'] = '刪除欄';
$lang['zh_TW']['HtmlEditorField']['DELETEROW'] = '刪除列';
$lang['zh_TW']['HtmlEditorField']['EDITCODE'] = '編輯HTML編碼';
$lang['zh_TW']['HtmlEditorField']['EMAIL'] = '電子郵件地址';
$lang['zh_TW']['HtmlEditorField']['FILE'] = '檔案';
$lang['zh_TW']['HtmlEditorField']['FLASH'] = '插入Flash';
$lang['zh_TW']['HtmlEditorField']['FOLDER'] = '資料夾';
$lang['zh_TW']['HtmlEditorField']['FOLDERCANCEL'] = '取消';
$lang['zh_TW']['HtmlEditorField']['FORMATADDR'] = '地址';
$lang['zh_TW']['HtmlEditorField']['FORMATH1'] = '標題 1';
$lang['zh_TW']['HtmlEditorField']['FORMATH2'] = '標題 2';
$lang['zh_TW']['HtmlEditorField']['FORMATH3'] = '標題 3';
$lang['zh_TW']['HtmlEditorField']['FORMATH4'] = '標題 4';
$lang['zh_TW']['HtmlEditorField']['FORMATH5'] = '標題 5';
$lang['zh_TW']['HtmlEditorField']['FORMATH6'] = '標題 6';
$lang['zh_TW']['HtmlEditorField']['FORMATP'] = '段落';
$lang['zh_TW']['HtmlEditorField']['HR'] = '插入水平線';
$lang['zh_TW']['HtmlEditorField']['IMAGE'] = '插入圖片';
$lang['zh_TW']['HtmlEditorField']['IMAGEDIMENSIONS'] = '大小';
$lang['zh_TW']['HtmlEditorField']['IMAGEHEIGHTPX'] = '高';
$lang['zh_TW']['HtmlEditorField']['IMAGEWIDTHPX'] = '寬';
$lang['zh_TW']['HtmlEditorField']['INDENT'] = '向右增排';
$lang['zh_TW']['HtmlEditorField']['INSERTCOLAFTER'] = '從後插入欄';
$lang['zh_TW']['HtmlEditorField']['INSERTCOLBEF'] = '從前插入欄';
$lang['zh_TW']['HtmlEditorField']['INSERTROWAFTER'] = '從後插入列';
$lang['zh_TW']['HtmlEditorField']['INSERTROWBEF'] = '從前插入列';
$lang['zh_TW']['HtmlEditorField']['INSERTTABLE'] = '插入表格';
$lang['zh_TW']['HtmlEditorField']['LINK'] = '插入或編輯選取的連結';
$lang['zh_TW']['HtmlEditorField']['LINKDESCR'] = '連結敘述';
$lang['zh_TW']['HtmlEditorField']['LINKEMAIL'] = '電子郵件地址';
$lang['zh_TW']['HtmlEditorField']['LINKEXTERNAL'] = '別的網站';
$lang['zh_TW']['HtmlEditorField']['LINKFILE'] = '下載檔案';
$lang['zh_TW']['HtmlEditorField']['LINKINTERNAL'] = '此網站';
$lang['zh_TW']['HtmlEditorField']['LINKOPENNEWWIN'] = '在新視窗打開連結';
$lang['zh_TW']['HtmlEditorField']['LINKTO'] = '連結至';
$lang['zh_TW']['HtmlEditorField']['OK'] = '是';
$lang['zh_TW']['HtmlEditorField']['OL'] = '編號條列';
$lang['zh_TW']['HtmlEditorField']['OUTDENT'] = '向左縮排';
$lang['zh_TW']['HtmlEditorField']['PAGE'] = '網頁';
$lang['zh_TW']['HtmlEditorField']['PASTE'] = '貼上 (Ctrl+V)';
$lang['zh_TW']['HtmlEditorField']['REDO'] = '還原 (Ctrl+y)';
$lang['zh_TW']['HtmlEditorField']['UNDO'] = '復原 (Ctrl+Z)';
$lang['zh_TW']['HtmlEditorField']['UNLINK'] = '移除連結';
$lang['zh_TW']['HtmlEditorField']['UPLOAD'] = '上傳';
$lang['zh_TW']['HtmlEditorField']['URL'] = '網址';
$lang['zh_TW']['HtmlEditorField']['VISUALAID'] = '顯示/隱藏 導引線';
$lang['zh_TW']['ImageField']['NOTEADDIMAGES'] = '一但您先儲存，您舊可以上載檔案。';
$lang['zh_TW']['ImageUplaoder']['ONEFROMFILESTORE'] = '由檔案存庫';
$lang['zh_TW']['ImageUploader']['ATTACH'] = '附上 %s';
$lang['zh_TW']['ImageUploader']['DELETE'] = '刪除 %s';
$lang['zh_TW']['ImageUploader']['FROMCOMPUTER'] = '由您電腦裡';
$lang['zh_TW']['ImageUploader']['FROMFILESTORE'] = '由檔案存庫';
$lang['zh_TW']['ImageUploader']['ONEFROMCOMPUTER'] = '由您電腦裡';
$lang['zh_TW']['ImageUploader']['REALLYDELETE'] = '您真的要移除 %s ？';
$lang['zh_TW']['ImageUploader']['REPLACE'] = '取代 %s';
$lang['zh_TW']['Image_iframe.ss']['TITLE'] = '圖片上載iFrame';
$lang['zh_TW']['Member']['ADDRESS'] = '住址';
$lang['zh_TW']['Member']['BUTTONCHANGEPASSWORD'] = '更改密碼';
$lang['zh_TW']['Member']['BUTTONLOGIN'] = '登入';
$lang['zh_TW']['Member']['BUTTONLOGINOTHER'] = '用別的帳戶登入';
$lang['zh_TW']['Member']['BUTTONLOSTPASSWORD'] = '忘記密碼';
$lang['zh_TW']['Member']['CONFIRMNEWPASSWORD'] = '確認新密碼';
$lang['zh_TW']['Member']['CONFIRMPASSWORD'] = '確認密碼';
$lang['zh_TW']['Member']['CONTACTINFO'] = '聯絡資料';
$lang['zh_TW']['Member']['EMAIL'] = '電子郵件';
$lang['zh_TW']['Member']['EMAILPASSWORDAPPENDIX'] = '密碼更改成功。請保留此信以備參考。';
$lang['zh_TW']['Member']['EMAILPASSWORDINTRO'] = '這是您的新密碼';
$lang['zh_TW']['Member']['EMAILSIGNUPINTRO1'] = '感謝註冊。下列是您的帳戶細節：';
$lang['zh_TW']['Member']['EMAILSIGNUPINTRO2'] = '您可以用下列的帳號密碼登入';
$lang['zh_TW']['Member']['EMAILSIGNUPSUBJECT'] = '感謝註冊';
$lang['zh_TW']['Member']['ERRORNEWPASSWORD'] = '新密碼不相配，請再試一次。';
$lang['zh_TW']['Member']['ERRORPASSWORDNOTMATCH'] = '舊密碼不對，請再試一次。';
$lang['zh_TW']['Member']['ERRORWRONGCRED'] = '密碼或電子郵件地址錯誤。請再是一次。';
$lang['zh_TW']['Member']['FIRSTNAME'] = '名';
$lang['zh_TW']['Member']['GREETING'] = '歡迎';
$lang['zh_TW']['Member']['INTERFACELANG'] = '介面語言';
$lang['zh_TW']['Member']['LOGGEDINAS'] = '你以的 %s 登入';
$lang['zh_TW']['Member']['MOBILE'] = '手機';
$lang['zh_TW']['Member']['NAME'] = '姓名';
$lang['zh_TW']['Member']['NEWPASSWORD'] = '新密碼';
$lang['zh_TW']['Member']['PASSWORD'] = '密碼';
$lang['zh_TW']['Member']['PASSWORDCHANGED'] = '密碼更改成功。含有新密碼的一封電子郵件已送出。';
$lang['zh_TW']['Member']['PERSONALDETAILS'] = '個人細節';
$lang['zh_TW']['Member']['PHONE'] = '電話';
$lang['zh_TW']['Member']['REMEMBERME'] = '下次記住我';
$lang['zh_TW']['Member']['SUBJECTPASSWORDCHANGED'] = '密碼更改成功。';
$lang['zh_TW']['Member']['SUBJECTPASSWORDRESET'] = '密碼重設';
$lang['zh_TW']['Member']['SURNAME'] = '姓';
$lang['zh_TW']['Member']['USERDETAILS'] = '使用者細節';
$lang['zh_TW']['Member']['VALIDATIONMEMBEREXISTS'] = '已經有人使用此電子郵件地址';
$lang['zh_TW']['Member']['WELCOMEBACK'] = '歡迎您，%s。';
$lang['zh_TW']['Member']['YOUROLDPASSWORD'] = '舊密碼';
$lang['zh_TW']['MemberAuthenticator']['TITLE'] = '電子郵件 &amp; 密碼';
$lang['zh_TW']['NumericField']['VALIDATION'] = '「%s」不是數字，這格只接受數字。';
$lang['zh_TW']['PhoneNumberField']['VALIDATION'] = '請輸入有效的電話號碼';
$lang['zh_TW']['RedirectorPage']['HASBEENSETUP'] = '一個引導頁已被建立，但並沒有說明引導目的地。';
$lang['zh_TW']['RedirectorPage']['HEADER'] = '這頁會引導訪客至另外一頁';
$lang['zh_TW']['RedirectorPage']['OTHERURL'] = '其他網站網址';
$lang['zh_TW']['RedirectorPage']['REDIRECTTO'] = '引導訪客至';
$lang['zh_TW']['RedirectorPage']['REDIRECTTOEXTERNAL'] = '其他網站';
$lang['zh_TW']['RedirectorPage']['REDIRECTTOPAGE'] = '自己網站上的網頁';
$lang['zh_TW']['RedirectorPage']['YOURPAGE'] = '自己網站上的網頁';
$lang['zh_TW']['Security']['ALREADYLOGGEDIN'] = '你不能瀏覽此頁。請用別的帳戶登入。';
$lang['zh_TW']['Security']['BUTTONSEND'] = '寄給我密碼重設網址。';
$lang['zh_TW']['Security']['CHANGEPASSWORDBELOW'] = '請在下面更改密碼。';
$lang['zh_TW']['Security']['CHANGEPASSWORDHEADER'] = '更改密碼';
$lang['zh_TW']['Security']['ENTERNEWPASSWORD'] = '請輸入新的密碼。';
$lang['zh_TW']['Security']['ERRORPASSWORDPERMISSION'] = '你必須先登入才能改密碼！';
$lang['zh_TW']['Security']['LOGGEDOUT'] = '你已登出。您在下面再登入一次。';
$lang['zh_TW']['Security']['LOSTPASSWORDHEADER'] = '忘記密碼';
$lang['zh_TW']['Security']['NOTEPAGESECURED'] = '那的網頁是被保護的。請先登入。';
$lang['zh_TW']['Security']['NOTERESETPASSWORD'] = '請輸入您的電子郵件。我們將寄給你重設密媽的網址。';
$lang['zh_TW']['Security']['PASSWORDSENTHEADER'] = '密碼重設網址已寄給「%s」';
$lang['zh_TW']['Security']['PASSWORDSENTTEXT'] = '謝謝！密碼重設網址已寄給「%s」';
$lang['zh_TW']['SimpleImageField']['NOUPLOAD'] = '沒有上傳圖片';
$lang['zh_TW']['SiteTree']['ACCESSANYONE'] = '所有人';
$lang['zh_TW']['SiteTree']['ACCESSHEADER'] = '誰可以瀏覽這頁？';
$lang['zh_TW']['SiteTree']['ACCESSLOGGEDIN'] = '已登入的使用者';
$lang['zh_TW']['SiteTree']['ACCESSONLYTHESE'] = '只有這些人(從清單選擇)';
$lang['zh_TW']['SiteTree']['ADDEDTODRAFT'] = '加入到預備發布站移除';
$lang['zh_TW']['SiteTree']['ALLOWCOMMENTS'] = '允許留言嗎？';
$lang['zh_TW']['SiteTree']['APPEARSVIRTUALPAGES'] = '這內容也存在下列階層的虛擬網頁： %s';
$lang['zh_TW']['SiteTree']['BUTTONCANCELDRAFT'] = '取消草稿更變';
$lang['zh_TW']['SiteTree']['BUTTONCANCELDRAFTDESC'] = '刪除草稿並回複到正式發布的版本';
$lang['zh_TW']['SiteTree']['BUTTONSAVEPUBLISH'] = '儲存並發布';
$lang['zh_TW']['SiteTree']['BUTTONUNPUBLISH'] = '取消發布';
$lang['zh_TW']['SiteTree']['BUTTONUNPUBLISHDESC'] = '從正式發布站移除';
$lang['zh_TW']['SiteTree']['EDITANYONE'] = '所有可以登入CMS的人';
$lang['zh_TW']['SiteTree']['EDITHEADER'] = '誰可以編輯這頁？';
$lang['zh_TW']['SiteTree']['EDITONLYTHESE'] = '只有這些人(從清單選擇)';
$lang['zh_TW']['SiteTree']['GROUP'] = '尋組';
$lang['zh_TW']['SiteTree']['HASBROKENLINKS'] = '網頁含有失效的連結。';
$lang['zh_TW']['SiteTree']['HOMEPAGEFORDOMAIN'] = '網站(domain)';
$lang['zh_TW']['SiteTree']['HTMLEDITORTITLE'] = '內容';
$lang['zh_TW']['SiteTree']['LINKSALREADYUNIQUE'] = '%s 已是獨特的';
$lang['zh_TW']['SiteTree']['LINKSCHANGEDTO'] = '更改 %s 成 %s';
$lang['zh_TW']['SiteTree']['MENUTITLE'] = '捷徑標籤';
$lang['zh_TW']['SiteTree']['METAADVANCEDHEADER'] = '進階選項...';
$lang['zh_TW']['SiteTree']['METADESC'] = '敘述';
$lang['zh_TW']['SiteTree']['METAEXTRA'] = '自訂元標籤(meta-tags)';
$lang['zh_TW']['SiteTree']['METAHEADER'] = '搜尋引擎元標籤(meta-tags)';
$lang['zh_TW']['SiteTree']['METAKEYWORDS'] = '關鍵詞';
$lang['zh_TW']['SiteTree']['METANOTEPRIORITY'] = '手動輸入網頁(%s)的 Google Sitemaps 優先權';
$lang['zh_TW']['SiteTree']['METAPAGEPRIO'] = '網頁優先權';
$lang['zh_TW']['SiteTree']['METATITLE'] = '標題';
$lang['zh_TW']['SiteTree']['MODIFIEDONDRAFT'] = '上一次從預備發布站更變';
$lang['zh_TW']['SiteTree']['NOBACKLINKS'] = '這頁沒有被其他網頁連結。';
$lang['zh_TW']['SiteTree']['NOTEUSEASHOMEPAGE'] = '將此頁給下列的網站設為首頁(用逗號分開)：';
$lang['zh_TW']['SiteTree']['PAGESLINKING'] = '下列的網頁連結到這頁：';
$lang['zh_TW']['SiteTree']['PAGETITLE'] = '網頁名稱';
$lang['zh_TW']['SiteTree']['PAGETYPE'] = '網頁類型';
$lang['zh_TW']['SiteTree']['PRIORITYLEASTIMPORTANT'] = '比較不重要';
$lang['zh_TW']['SiteTree']['PRIORITYMOSTIMPORTANT'] = '比較重要';
$lang['zh_TW']['SiteTree']['PRIORITYNOTINDEXED'] = '沒在索引';
$lang['zh_TW']['SiteTree']['REMOVEDFROMDRAFT'] = '從預備發布站移除';
$lang['zh_TW']['SiteTree']['SHOWINMENUS'] = '在選單裡顯示嗎？';
$lang['zh_TW']['SiteTree']['SHOWINSEARCH'] = '在搜尋結果裡顯示嗎？';
$lang['zh_TW']['SiteTree']['TABACCESS'] = '瀏覽存取';
$lang['zh_TW']['SiteTree']['TABBACKLINKS'] = '反向連結';
$lang['zh_TW']['SiteTree']['TABBEHAVIOUR'] = '作用';
$lang['zh_TW']['SiteTree']['TABCONTENT'] = '內容';
$lang['zh_TW']['SiteTree']['TABMAIN'] = '主要';
$lang['zh_TW']['SiteTree']['TABMETA'] = '元資訊';
$lang['zh_TW']['SiteTree']['TABREPORTS'] = '報告';
$lang['zh_TW']['SiteTree']['TOPLEVEL'] = '網站內容 (高層)';
$lang['zh_TW']['SiteTree']['URL'] = '網址';
$lang['zh_TW']['SiteTree']['VALIDATIONURLSEGMENT1'] = '另外一頁已使用這個網址。每頁的網址必須是獨特的。';
$lang['zh_TW']['SiteTree']['VALIDATIONURLSEGMENT2'] = '網址只能由字母、數字、和連字號組成。';
$lang['zh_TW']['TableField']['ISREQUIRED'] = '在 %s 的「%s」是必填的。';
$lang['zh_TW']['TableField.ss']['CSVEXPORT'] = '匯出至CSV';
$lang['zh_TW']['ToggleCompositeField.ss']['HIDE'] = '隱藏';
$lang['zh_TW']['ToggleCompositeField.ss']['SHOW'] = '顯示';
$lang['zh_TW']['ToggleField']['LESS'] = '少';
$lang['zh_TW']['ToggleField']['MORE'] = '多';
$lang['zh_TW']['TypeDropdown']['NONE'] = '空';
$lang['zh_TW']['VirtualPage']['CHOOSE'] = '請選擇一個網頁來連結至';
$lang['zh_TW']['VirtualPage']['EDITCONTENT'] = '點擊即可更改內容';
$lang['zh_TW']['VirtualPage']['HEADER'] = '這是一個虛擬網頁';

?>