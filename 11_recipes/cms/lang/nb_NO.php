<?php

/**
 * Norwegian Bokmal (Norway) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('nb_NO', $lang) && is_array($lang['nb_NO'])) {
	$lang['nb_NO'] = array_merge($lang['en_US'], $lang['nb_NO']);
} else {
	$lang['nb_NO'] = $lang['en_US'];
}

$lang['nb_NO']['AssetAdmin']['CHOOSEFILE'] = 'Velg fil';
$lang['nb_NO']['AssetAdmin']['CONTENTMODBY'] = 'Innhold kan endres av';
$lang['nb_NO']['AssetAdmin']['CONTENTUSABLEBY'] = 'Innhold kan brukes av';
$lang['nb_NO']['AssetAdmin']['CREATED'] = 'Først lastet opp';
$lang['nb_NO']['AssetAdmin']['DELETEDX'] = 'Slettet %s filer. %s';
$lang['nb_NO']['AssetAdmin']['DELETEUNUSEDTHUMBNAILS'] = 'Slett ubrukte thumbnails';
$lang['nb_NO']['AssetAdmin']['DELSELECTED'] = 'Slett markerte filer';
$lang['nb_NO']['AssetAdmin']['DETAILSTAB'] = 'Detaljer';
$lang['nb_NO']['AssetAdmin']['FILENAME'] = 'Filnavn';
$lang['nb_NO']['AssetAdmin']['FILESREADY'] = 'Filer klare for opplasting:';
$lang['nb_NO']['AssetAdmin']['FILESTAB'] = 'Filer';
$lang['nb_NO']['AssetAdmin']['LASTEDITED'] = 'Sist Oppdatert';
$lang['nb_NO']['AssetAdmin']['MOVEDX'] = 'Flyttet %s filer';
$lang['nb_NO']['AssetAdmin']['NEWFOLDER'] = 'Ny Mappe';
$lang['nb_NO']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Det fantes ingenting å laste opp';
$lang['nb_NO']['AssetAdmin']['NOWBROKEN'] = 'Disse sidene har nå ødelagte linker:';
$lang['nb_NO']['AssetAdmin']['ONLYADMINS'] = 'Bare administratorer kan laste opp %s filer.';
$lang['nb_NO']['AssetAdmin']['OWNER'] = 'Eier';
$lang['nb_NO']['AssetAdmin']['SAVEDFILE'] = 'Lagret filen %s';
$lang['nb_NO']['AssetAdmin']['SAVEFOLDERNAME'] = 'Lagre mappenavn';
$lang['nb_NO']['AssetAdmin']['TITLE'] = 'Tittel';
$lang['nb_NO']['AssetAdmin']['TOOLARGE'] = '%s er for stort (%s). Filer av denne typen kan ikke være større enn %s';
$lang['nb_NO']['AssetAdmin']['TYPE'] = 'Type';
$lang['nb_NO']['AssetAdmin']['UNUSEDFILESTAB'] = 'Ubrukte filer';
$lang['nb_NO']['AssetAdmin']['UNUSEDFILESTITLE'] = 'Ubrukte filer';
$lang['nb_NO']['AssetAdmin']['UNUSEDTHUMBNAILSTITLE'] = 'Ubrukte thumbnails';
$lang['nb_NO']['AssetAdmin']['UPLOAD'] = 'Last opp filene som er listet opp nedenunder';
$lang['nb_NO']['AssetAdmin']['UPLOADEDX'] = 'Lastet opp %s filer';
$lang['nb_NO']['AssetAdmin']['UPLOADTAB'] = 'Last opp';
$lang['nb_NO']['AssetAdmin']['VIEWASSET'] = 'Vis Ressurser';
$lang['nb_NO']['AssetAdmin']['VIEWEDITASSET'] = 'Vis/Endre Ressurs';
$lang['nb_NO']['AssetAdmin_left.ss']['CREATE'] = 'Opprett';
$lang['nb_NO']['AssetAdmin_left.ss']['DELETE'] = 'Slett';
$lang['nb_NO']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Slett merkede mapper';
$lang['nb_NO']['AssetAdmin_left.ss']['FOLDERS'] = 'Mapper';
$lang['nb_NO']['AssetAdmin_left.ss']['GO'] = 'Utfør';
$lang['nb_NO']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Merk de mappene du vil slette og deretter trykk på "slett" knappen under';
$lang['nb_NO']['AssetAdmin_left.ss']['TOREORG'] = 'For å reorganisere mappene, drar du mappene og slipper dem på ønsket sted.';
$lang['nb_NO']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Vennligst velg en side fra meny til venstre.';
$lang['nb_NO']['AssetAdmin_right.ss']['WELCOME'] = 'Velkommen til';
$lang['nb_NO']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Du har ikke rettigheter til å laste opp filer til denne mappen.';
$lang['nb_NO']['AssetTableField']['CREATED'] = 'Først lastet opp';
$lang['nb_NO']['AssetTableField']['DIM'] = 'Dimensjoner';
$lang['nb_NO']['AssetTableField']['FILENAME'] = 'Filnavn';
$lang['nb_NO']['AssetTableField']['LASTEDIT'] = 'Sist endret';
$lang['nb_NO']['AssetTableField']['NOLINKS'] = 'Siden blir ikke linket fra noen sider.';
$lang['nb_NO']['AssetTableField']['OWNER'] = 'Eier';
$lang['nb_NO']['AssetTableField']['PAGESLINKING'] = 'Følgende sider linker til denne filen:';
$lang['nb_NO']['AssetTableField']['SIZE'] = 'Størrelse';
$lang['nb_NO']['AssetTableField.ss']['DELFILE'] = 'Slett denne filen';
$lang['nb_NO']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Dra til mappen på venstre side for å flytte filen';
$lang['nb_NO']['AssetTableField']['TITLE'] = 'Tittel';
$lang['nb_NO']['AssetTableField']['TYPE'] = 'Type';
$lang['nb_NO']['BulkLoaderAdmin']['CONFIRMBULK'] = 'Bekreft opplastingen';
$lang['nb_NO']['BulkLoaderAdmin']['CSVFILE'] = 'CSV Fil';
$lang['nb_NO']['BulkLoaderAdmin']['DATALOADED'] = 'Disse data er lastet inn';
$lang['nb_NO']['BulkLoaderAdmin']['PRESSCNT'] = 'Trykk fortsett for å laste inn data';
$lang['nb_NO']['BulkLoaderAdmin']['PREVIEW'] = 'Forhåndsvis';
$lang['nb_NO']['BulkLoaderAdmin_left.ss']['BATCHEF'] = 'Batch funksjoner';
$lang['nb_NO']['BulkLoaderAdmin_left.ss']['FUNCTIONS'] = 'Funksjoner';
$lang['nb_NO']['BulkLoaderAdmin_preview.ss']['RES'] = 'Resultater';
$lang['nb_NO']['CMSLeft.ss']['DELPAGE'] = 'Slett sidene...';
$lang['nb_NO']['CMSLeft.ss']['DELPAGES'] = 'Slett de merkede sidene';
$lang['nb_NO']['CMSLeft.ss']['GO'] = 'Utfør';
$lang['nb_NO']['CMSLeft.ss']['NEWPAGE'] = 'Ny side';
$lang['nb_NO']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Velg sidene du vil slette og klikk på knappen under';
$lang['nb_NO']['CMSLeft.ss']['SITECONT'] = 'Nettstedets Innhold';
$lang['nb_NO']['CMSMain']['CANCEL'] = 'Avbryt';
$lang['nb_NO']['CMSMain']['CHOOSEREPORT'] = '(Velg en rapport)';
$lang['nb_NO']['CMSMain']['COMPARINGV'] = 'Du sammenligner versjonene #%d og #%d';
$lang['nb_NO']['CMSMain']['COPYPUBTOSTAGE'] = 'Er du sikker på at du vil kopiere det publiserte innholdet til utkast?';
$lang['nb_NO']['CMSMain']['DELETEFP'] = 'Fjern fra publisert side';
$lang['nb_NO']['CMSMain']['EMAIL'] = 'Epost';
$lang['nb_NO']['CMSMain']['GO'] = 'Utfør';
$lang['nb_NO']['CMSMain']['METADESCOPT'] = 'Beskrivelse';
$lang['nb_NO']['CMSMain']['METAKEYWORDSOPT'] = 'Nøkkelord';
$lang['nb_NO']['CMSMain']['NEW'] = 'Ny';
$lang['nb_NO']['CMSMain']['NOCONTENT'] = 'Ingen innhold';
$lang['nb_NO']['CMSMain']['NOTHINGASSIGNED'] = 'Du har ingen anvisninger';
$lang['nb_NO']['CMSMain']['NOWAITINGON'] = 'Du venter ikke på noen.';
$lang['nb_NO']['CMSMain']['NOWBROKEN'] = 'Følgene sider har nå ødelagte linker:';
$lang['nb_NO']['CMSMain']['NOWBROKEN2'] = 'Eierne har blitt kontaktet og de vil prøve å fikse disse sidene.';
$lang['nb_NO']['CMSMain']['OK'] = 'OK';
$lang['nb_NO']['CMSMain']['PAGEDEL'] = '%d siden slettet';
$lang['nb_NO']['CMSMain']['PAGENOTEXISTS'] = 'Siden eksisterer ikke';
$lang['nb_NO']['CMSMain']['PAGEPUB'] = '%d side publisert';
$lang['nb_NO']['CMSMain']['PAGESDEL'] = '%d sidene slettet';
$lang['nb_NO']['CMSMain']['PAGESPUB'] = '%d sider publisert';
$lang['nb_NO']['CMSMain']['PAGETYPEOPT'] = 'Sidetype';
$lang['nb_NO']['CMSMain']['PRINT'] = 'Print';
$lang['nb_NO']['CMSMain']['PUBALLCONFIRM'] = 'Venligst publiser hver enkelt side på denne nettsiden, copierer utkast til live.';
$lang['nb_NO']['CMSMain']['PUBALLFUN'] = '"Publiser Alle" funksjonalitet';
$lang['nb_NO']['CMSMain']['PUBALLFUN2'] = 'Å trykke på denne knappen vil være det samme som å trykke "publiser" på alle sidene. Dette blir ofte brukt ved store endringer som f.eks. ved oppretting av nettsiden for første gang.';
$lang['nb_NO']['CMSMain']['PUBPAGES'] = 'Ferdig: Publisert %d sider';
$lang['nb_NO']['CMSMain']['REMOVEDFD'] = 'Fjernet fra utkast-siden';
$lang['nb_NO']['CMSMain']['REMOVEDPAGE'] = 'Fjernet %s fra den publiserte siden.';
$lang['nb_NO']['CMSMain']['RESTORE'] = 'Gjenopprett';
$lang['nb_NO']['CMSMain']['RESTORED'] = '%s vellykket gjenopprettet';
$lang['nb_NO']['CMSMain']['ROLLBACK'] = 'Rull tilbake til denne versjonen';
$lang['nb_NO']['CMSMain']['ROLLEDBACKPUB'] = 'Rullet tilbake til publisert versjon. Ny versjon er #%d';
$lang['nb_NO']['CMSMain']['ROLLEDBACKVERSION'] = 'Rullet tilbake til versjon #%d. Ny versjon er #%d';
$lang['nb_NO']['CMSMain']['SAVE'] = 'Lagre';
$lang['nb_NO']['CMSMain']['SENTTO'] = 'Sendt til %s %s for godkjenning';
$lang['nb_NO']['CMSMain']['STATUSOPT'] = 'Status';
$lang['nb_NO']['CMSMain']['TOTALPAGES'] = 'Totalt antall sider:';
$lang['nb_NO']['CMSMain']['VERSIONSNOPAGE'] = 'Kan ikke finne side #%d';
$lang['nb_NO']['CMSMain']['VIEWING'] = 'Du ser på versjon #%d, opprettet %s';
$lang['nb_NO']['CMSMain']['VISITRESTORE'] = 'besøk gjenopprettingsside/(ID)';
$lang['nb_NO']['CMSMain']['WAITINGON'] = 'Du venter på andre å jobbe med disse sidene <b>%d</b>';
$lang['nb_NO']['CMSMain']['WORKTODO'] = 'Du har arbeid som venter på disse sidene <b>%d</b>';
$lang['nb_NO']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Opprettet som kladd og ikke publisert enda.';
$lang['nb_NO']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Legg til kriterie';
$lang['nb_NO']['CMSMain_left.ss']['BATCHACTIONS'] = 'Flere oppg.';
$lang['nb_NO']['CMSMain_left.ss']['CHANGED'] = 'endret';
$lang['nb_NO']['CMSMain_left.ss']['CLOSEBOX'] = 'Klikk for å lukke boksen';
$lang['nb_NO']['CMSMain_left.ss']['COMMENTS'] = 'Kommentarer';
$lang['nb_NO']['CMSMain_left.ss']['COMPAREMODE'] = 'Sammenligningsmodus (klikk 2 under)';
$lang['nb_NO']['CMSMain_left.ss']['CREATE'] = 'Opprett';
$lang['nb_NO']['CMSMain_left.ss']['DEL'] = 'slettet';
$lang['nb_NO']['CMSMain_left.ss']['DELETECONFIRM'] = 'Slett de valgte sidene.';
$lang['nb_NO']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Slett fra kladd men fortsatt på live siden';
$lang['nb_NO']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Endret i kladden, men ikke publisert enda.';
$lang['nb_NO']['CMSMain_left.ss']['EDITEDSINCE'] = 'Endret siden';
$lang['nb_NO']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Godkjenn "drag &amp; drop" reorganisering';
$lang['nb_NO']['CMSMain_left.ss']['GO'] = 'Utfør';
$lang['nb_NO']['CMSMain_left.ss']['KEY'] = 'Nøkkel:';
$lang['nb_NO']['CMSMain_left.ss']['NEW'] = 'ny';
$lang['nb_NO']['CMSMain_left.ss']['OPENBOX'] = 'Klikk for å åpne denne boksen';
$lang['nb_NO']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Versjon historikk';
$lang['nb_NO']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Publiser de merkede sidene';
$lang['nb_NO']['CMSMain_left.ss']['SEARCH'] = 'Søk';
$lang['nb_NO']['CMSMain_left.ss']['SEARCHTITLE'] = 'Søk gjennom URL, Tiitel, Meny Tittel, &amp; Innhold';
$lang['nb_NO']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Merk sidene du vil endre og klikk deretter på en oppgave:';
$lang['nb_NO']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Velg de sidene du vil kopiere, om du vil at under-sidene skal inkluderes, og hvor du vil plassere kopiene.';
$lang['nb_NO']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Vis bare redigerte sider';
$lang['nb_NO']['CMSMain_left.ss']['SHOWUNPUB'] = 'Vis upubliserte versjoner';
$lang['nb_NO']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Stedinnhold og Struktur';
$lang['nb_NO']['CMSMain_left.ss']['SITEREPORTS'] = 'Rapporter';
$lang['nb_NO']['CMSMain_left.ss']['TASKLIST'] = 'Oppgaveliste';
$lang['nb_NO']['CMSMain_left.ss']['WAITINGON'] = 'Venter på';
$lang['nb_NO']['CMSMain_right.ss']['ANYMESSAGE'] = 'Har du en melding til din redaktør?';
$lang['nb_NO']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Venligst velg en side fra venstre kolonne.';
$lang['nb_NO']['CMSMain_right.ss']['LOADING'] = 'laster inn...';
$lang['nb_NO']['CMSMain_right.ss']['MESSAGE'] = 'Melding';
$lang['nb_NO']['CMSMain_right.ss']['SENDTO'] = 'Send til';
$lang['nb_NO']['CMSMain_right.ss']['STATUS'] = 'Status';
$lang['nb_NO']['CMSMain_right.ss']['SUBMIT'] = 'Send til godkjenning';
$lang['nb_NO']['CMSMain_right.ss']['WELCOMETO'] = 'Velkommen til';
$lang['nb_NO']['CMSMain_versions.ss']['AUTHOR'] = 'Forfatter';
$lang['nb_NO']['CMSMain_versions.ss']['NOTPUB'] = 'Ikke publisert';
$lang['nb_NO']['CMSMain_versions.ss']['PUBR'] = 'Utgiver';
$lang['nb_NO']['CMSMain_versions.ss']['UNKNOWN'] = 'Ukjent';
$lang['nb_NO']['CMSMain_versions.ss']['WHEN'] = 'Når';
$lang['nb_NO']['CMSRight.ss']['CHOOSEPAGE'] = 'Venligst velg en side fra venstre kolonne';
$lang['nb_NO']['CMSRight.ss']['ECONTENT'] = 'Endre Innhold';
$lang['nb_NO']['CMSRight.ss']['WELCOMETO'] = 'Velkommen til';
$lang['nb_NO']['CommentList.ss']['CREATEDW'] = 'Kommentarer blir opprettet hver gang funksjonene Publiser, Avvis, Submit blir utført';
$lang['nb_NO']['CommentList.ss']['NOCOM'] = 'Det er ingen kommentarer på denne siden.';
$lang['nb_NO']['ImageEditor.ss']['CANCEL'] = 'avbryt';
$lang['nb_NO']['ImageEditor.ss']['CROP'] = 'beskjær';
$lang['nb_NO']['ImageEditor.ss']['HEIGHT'] = 'høyde';
$lang['nb_NO']['ImageEditor.ss']['REDO'] = 'gjenta';
$lang['nb_NO']['ImageEditor.ss']['ROT'] = 'rotér';
$lang['nb_NO']['ImageEditor.ss']['SAVE'] = 'lagre&nbsp;bilde';
$lang['nb_NO']['ImageEditor.ss']['UNDO'] = 'angre';
$lang['nb_NO']['ImageEditor.ss']['UNTITLED'] = 'Utittelert Dokument';
$lang['nb_NO']['ImageEditor.ss']['WIDTH'] = 'bredde';
$lang['nb_NO']['LeftAndMain']['CHANGEDURL'] = 'Endret URL til %s';
$lang['nb_NO']['LeftAndMain']['COMMENTS'] = 'Kommentarer';
$lang['nb_NO']['LeftAndMain']['FILESIMAGES'] = 'Filer & Bilder';
$lang['nb_NO']['LeftAndMain']['HELP'] = 'Hjelp';
$lang['nb_NO']['LeftAndMain']['NEWSLETTERS'] = 'Nyhetsbrev';
$lang['nb_NO']['LeftAndMain']['PAGETYPE'] = 'Side-type';
$lang['nb_NO']['LeftAndMain']['PERMAGAIN'] = 'Du har blirr logget ut av kontrollpanelet. Hvis du vil logge inn igjen, skriv inn brukernavn og passord nedenunder.';
$lang['nb_NO']['LeftAndMain']['PERMALREADY'] = 'Beklager, men du har ikke adgang til denne delen av kontrollpanelet. Hvis du vil logge inn med en annen konto, venligst gjør det nedenunder';
$lang['nb_NO']['LeftAndMain']['PERMDEFAULT'] = 'Venligst velg en annen innloggingsmetode og skriv inn nødvendig informasjon for å få adgang til kontrollpanelet.';
$lang['nb_NO']['LeftAndMain']['PLEASESAVE'] = 'Venligst Lagre Siden: Denne siden kunne ikke oppdateres grunnet at den ikke har blitt lagret enda.';
$lang['nb_NO']['LeftAndMain']['REPORTS'] = 'Rapporter';
$lang['nb_NO']['LeftAndMain']['REQUESTERROR'] = 'Feil ved spørring';
$lang['nb_NO']['LeftAndMain']['SAVED'] = 'lagret';
$lang['nb_NO']['LeftAndMain']['SAVEDUP'] = 'Lagret';
$lang['nb_NO']['LeftAndMain']['SECURITY'] = 'Sikkerhet';
$lang['nb_NO']['LeftAndMain']['SITECONTENT'] = 'Innhold';
$lang['nb_NO']['LeftAndMain']['SITECONTENTLEFT'] = 'Nettstedets innhold';
$lang['nb_NO']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Dette er den';
$lang['nb_NO']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'versjonen som du kjører foreløpig, teknisk sett er det CVS virksomhet';
$lang['nb_NO']['LeftAndMain.ss']['ARCHS'] = 'Arkivert side';
$lang['nb_NO']['LeftAndMain.ss']['DRAFTS'] = 'Utkastside';
$lang['nb_NO']['LeftAndMain.ss']['EDIT'] = 'Endre';
$lang['nb_NO']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['nb_NO']['LeftAndMain.ss']['LOADING'] = 'Laster inn...';
$lang['nb_NO']['LeftAndMain.ss']['LOGGEDINAS'] = 'Logget inn som';
$lang['nb_NO']['LeftAndMain.ss']['LOGOUT'] = 'logg ut';
$lang['nb_NO']['LeftAndMain.ss']['PUBLIS'] = 'Publisert side';
$lang['nb_NO']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe Nettside';
$lang['nb_NO']['LeftAndMain.ss']['SWITCHTO'] = 'Bytt til:';
$lang['nb_NO']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Se side:';

$lang['nb_NO']['LeftAndMain']['STATUSTO'] = 'Status endret til %s';
$lang['nb_NO']['LeftAndMain']['TREESITECONTENT'] = 'Nettstedets innhold';
$lang['nb_NO']['MemberList']['ADD'] = 'Legg til';
$lang['nb_NO']['MemberList']['EMAIL'] = 'Epost';
$lang['nb_NO']['MemberList']['FILTERBYG'] = 'Filtrer etter gruppe';
$lang['nb_NO']['MemberList']['FN'] = 'Fornavn';
$lang['nb_NO']['MemberList']['PASSWD'] = 'Passord';
$lang['nb_NO']['MemberList']['SEARCH'] = 'Søk';
$lang['nb_NO']['MemberList']['SN'] = 'Etternavn';
$lang['nb_NO']['MemberList.ss']['FILTER'] = 'Filter';
$lang['nb_NO']['MemberList_Table.ss']['EMAIL'] = 'Epost adresse';
$lang['nb_NO']['MemberList_Table.ss']['FN'] = 'Fornavn';
$lang['nb_NO']['MemberList_Table.ss']['PASSWD'] = 'Passord';
$lang['nb_NO']['MemberList_Table.ss']['SN'] = 'Etternavn';
$lang['nb_NO']['MemberTableField']['ADD'] = 'Legg til';
$lang['nb_NO']['MemberTableField']['ADDEDTOGROUP'] = 'Legg til medlem i gruppen';
$lang['nb_NO']['MemberTableField.ss']['ADDNEW'] = 'Legg til ny';
$lang['nb_NO']['MemberTableField.ss']['DELETEMEMBER'] = 'Slett dette medlemmet';
$lang['nb_NO']['MemberTableField.ss']['EDITMEMBER'] = 'Endre dette medlemmet';
$lang['nb_NO']['MemberTableField.ss']['SHOWMEMBER'] = 'Vis dette medlemmet';
$lang['nb_NO']['NewsletterAdmin']['FROMEM'] = 'Fra epostadresse';
$lang['nb_NO']['NewsletterAdmin']['MEWDRAFTMEWSL'] = 'Ny brevkladd';
$lang['nb_NO']['NewsletterAdmin']['NEWLIST'] = 'Ny epostliste';
$lang['nb_NO']['NewsletterAdmin']['NEWNEWSLTYPE'] = 'Ny type nyhetsbrev';
$lang['nb_NO']['NewsletterAdmin']['NEWSLTYPE'] = 'Nyhetsbrev-type';
$lang['nb_NO']['NewsletterAdmin']['PLEASEENTERMAIL'] = 'Venligst skriv inn en epost-adresse';
$lang['nb_NO']['NewsletterAdmin']['RESEND'] = 'Send på nytt';
$lang['nb_NO']['NewsletterAdmin']['SAVE'] = 'Lagre';
$lang['nb_NO']['NewsletterAdmin']['SAVED'] = 'Lagret';
$lang['nb_NO']['NewsletterAdmin']['SEND'] = 'Send...';
$lang['nb_NO']['NewsletterAdmin']['SENDING'] = 'Sender eposter...';
$lang['nb_NO']['NewsletterAdmin']['SENTTESTTO'] = 'Sendt test til';
$lang['nb_NO']['NewsletterAdmin']['SHOWCONTENTS'] = 'Vis innhold';
$lang['nb_NO']['NewsletterAdmin_BouncedList.ss']['EMADD'] = 'Epost adresse';
$lang['nb_NO']['NewsletterAdmin_BouncedList.ss']['HAVEBOUNCED'] = 'Eposter som er avvist';
$lang['nb_NO']['NewsletterAdmin_BouncedList.ss']['NOBOUNCED'] = 'Ingen eposter som blir sendt er avvist.';
$lang['nb_NO']['NewsletterAdmin_BouncedList.ss']['UNAME'] = 'Brukernavn';
$lang['nb_NO']['NewsletterAdmin_left.ss']['ADDDRAFT'] = 'Opprett nytt utkast';
$lang['nb_NO']['NewsletterAdmin_left.ss']['ADDTYPE'] = 'Legg til ny type';
$lang['nb_NO']['NewsletterAdmin_left.ss']['CREATE'] = 'Opprett';
$lang['nb_NO']['NewsletterAdmin_left.ss']['DEL'] = 'Slett';
$lang['nb_NO']['NewsletterAdmin_left.ss']['DELETEDRAFTS'] = 'Slett markerte utkast';
$lang['nb_NO']['NewsletterAdmin_left.ss']['GO'] = 'Utfør';
$lang['nb_NO']['NewsletterAdmin_left.ss']['NEWSLETTERS'] = 'Nyhetsbrev';
$lang['nb_NO']['NewsletterAdmin_left.ss']['SELECTDRAFTS'] = 'Marker utkastene du vil slette og trykk på knappen under';
$lang['nb_NO']['NewsletterAdmin_right.ss']['CANCEL'] = 'Avbryt';
$lang['nb_NO']['NewsletterAdmin_right.ss']['ENTIRE'] = 'Send til hele epostlisten';
$lang['nb_NO']['NewsletterAdmin_right.ss']['ONLYNOT'] = 'Bare send til de som ikke har mottatt før';
$lang['nb_NO']['NewsletterAdmin_right.ss']['SEND'] = 'Send nyhetsbrev';
$lang['nb_NO']['NewsletterAdmin_right.ss']['SENDTEST'] = 'Send test til';
$lang['nb_NO']['NewsletterAdmin_right.ss']['WELCOME1'] = 'Velkommen til';
$lang['nb_NO']['NewsletterAdmin_right.ss']['WELCOME2'] = 'Nyhetsbrev administrasjonsseksjon. Venligst velg en mappe fra venstre side.';
$lang['nb_NO']['NewsletterAdmin_SiteTree.ss']['DRAFTS'] = 'Utkast';
$lang['nb_NO']['NewsletterAdmin_SiteTree.ss']['MAILLIST'] = 'Postlister';
$lang['nb_NO']['NewsletterAdmin_SiteTree.ss']['SENT'] = 'Sendte elementer';
$lang['nb_NO']['NewsletterAdmin_UnsubscribedList.ss']['NOUNSUB'] = 'Ingen brukere har avsluttet abonnementet på dette nyhetsbrevet.';
$lang['nb_NO']['NewsletterAdmin_UnsubscribedList.ss']['UNAME'] = 'Brukernavn';
$lang['nb_NO']['NewsletterAdmin_UnsubscribedList.ss']['UNSUBON'] = 'Avsluttet abonementet på';
$lang['nb_NO']['NewsletterList.ss']['CHOOSEDRAFT1'] = 'Venligst velg et utkast fra venstre side, eller';
$lang['nb_NO']['NewsletterList.ss']['CHOOSEDRAFT2'] = 'legg til en';
$lang['nb_NO']['NewsletterList.ss']['CHOOSESENT'] = 'Venligst velg et sendt element fra venstre meny.';
$lang['nb_NO']['Newsletter_RecipientImportField.ss']['CHANGED'] = 'Antall detaljer endret:';
$lang['nb_NO']['Newsletter_RecipientImportField.ss']['IMPORTED'] = 'Nye importerte medlemmer:';
$lang['nb_NO']['Newsletter_RecipientImportField.ss']['IMPORTNEW'] = 'Importer nye medlemmer';
$lang['nb_NO']['Newsletter_RecipientImportField.ss']['SEC'] = 'sekunder';
$lang['nb_NO']['Newsletter_RecipientImportField.ss']['SKIPPED'] = 'Oppslag som ble droppet:';
$lang['nb_NO']['Newsletter_RecipientImportField.ss']['TIME'] = 'Tid brukt:';
$lang['nb_NO']['Newsletter_RecipientImportField.ss']['UPDATED'] = 'Oppdaterte medlemmer:';
$lang['nb_NO']['Newsletter_RecipientImportField_Table.ss']['CONTENTSOF'] = 'Innhold av';
$lang['nb_NO']['Newsletter_RecipientImportField_Table.ss']['NO'] = 'Avbryt';
$lang['nb_NO']['Newsletter_RecipientImportField_Table.ss']['RECIMPORTED'] = 'Mottagere importert fra';
$lang['nb_NO']['Newsletter_RecipientImportField_Table.ss']['YES'] = 'Bekreft';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['DATE'] = 'Dato';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['EMAIL'] = 'Epost';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['FN'] = 'Fornavn';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['NEWSNEVERSENT'] = 'Nyhetsbrevet har Aldri blitt Send til Følgende Abonnenter';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['RES'] = 'Resultat';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['SENDBOUNCED'] = 'Sending til Følgende Mottakere Avvist';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['SENDFAIL'] = 'Sending til Følgene Mottakere Feilet';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['SENTOK'] = 'Sending til Følgende Mottakere Vellykket';
$lang['nb_NO']['Newsletter_SentStatusReport.ss']['SN'] = 'Etternavn';
$lang['nb_NO']['PageComment']['COMMENTBY'] = 'Kommentert av \'%s\' den %s';
$lang['nb_NO']['PageCommentInterface.ss']['COMMENTS'] = 'Kommentarer';
$lang['nb_NO']['PageCommentInterface.ss']['NEXT'] = 'neste';
$lang['nb_NO']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Ingen har kommentert på denne siden enda';
$lang['nb_NO']['PageCommentInterface.ss']['POSTCOM'] = 'Post din kommentar';
$lang['nb_NO']['PageCommentInterface.ss']['PREV'] = 'forrige';
$lang['nb_NO']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'denne kommentaren er ikke spam';
$lang['nb_NO']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'denne posten er spam';
$lang['nb_NO']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Postet av';
$lang['nb_NO']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'fjern denne kommentaren';
$lang['nb_NO']['ReportAdmin_left.ss']['REPORTS'] = 'Rapporter';
$lang['nb_NO']['ReportAdmin_right.ss']['WELCOME1'] = 'Velkommen til';
$lang['nb_NO']['ReportAdmin_right.ss']['WELCOME2'] = 'Rapportseksjon. Venligst velg en spesifikk rapport fra venstre side.';
$lang['nb_NO']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Rapporter';
$lang['nb_NO']['SecurityAdmin']['ADDMEMBER'] = 'Legg til medlem';
$lang['nb_NO']['SecurityAdmin']['ADVANCEDONLY'] = 'Denne seksjonen er bare for erfarne brukere. Se <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">denne siden</a> for mere informasjon.';
$lang['nb_NO']['SecurityAdmin']['NEWGROUP'] = 'Ny gruppe';
$lang['nb_NO']['SecurityAdmin']['SAVE'] = 'Lagre';
$lang['nb_NO']['SecurityAdmin']['SGROUPS'] = 'Sikkerhetsgrupper';
$lang['nb_NO']['SecurityAdmin_left.ss']['CREATE'] = 'Opprett';
$lang['nb_NO']['SecurityAdmin_left.ss']['DEL'] = 'Slett';
$lang['nb_NO']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Slett merkede grupper';
$lang['nb_NO']['SecurityAdmin_left.ss']['GO'] = 'Utfør';
$lang['nb_NO']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Sikkerhetsgrupper';
$lang['nb_NO']['SecurityAdmin_left.ss']['SELECT'] = 'Marker de sidene du vil slette og trykk på knappen under';
$lang['nb_NO']['SecurityAdmin_left.ss']['TOREORG'] = 'For å reorganisere nettstedet drar du sidene og slipper dem på ønsket sted.';
$lang['nb_NO']['SecurityAdmin_right.ss']['WELCOME1'] = 'Velkommen til';
$lang['nb_NO']['SecurityAdmin_right.ss']['WELCOME2'] = 'Sikkerhetsadministrasjon. Venligst velg en gruppe fra venstre side.';
$lang['nb_NO']['SideReport']['EMPTYPAGES'] = 'Tomme sider';
$lang['nb_NO']['SideReport']['LAST2WEEKS'] = 'Sider endret de siste 2 ukene';
$lang['nb_NO']['SideReport']['REPEMPTY'] = '%s rapporten er tom';
$lang['nb_NO']['StaticExporter']['BASEURL'] = 'Base URL';
$lang['nb_NO']['StaticExporter']['EXPORTTO'] = 'Eksporter til den mappen';
$lang['nb_NO']['StaticExporter']['FOLDEREXPORT'] = 'Mappe å eksportere til';
$lang['nb_NO']['StaticExporter']['NAME'] = 'Statistikk eksportør';
$lang['nb_NO']['StaticExporter']['ONETHATEXISTS'] = 'Vennligst spesifiser en mappe som eksisterer';



$lang['nb_NO']['SubmittedFormEmail.ss']['SUBMITTED'] = 'Følgende data ble sendt til ditt nettsted:';
$lang['nb_NO']['TaskList.ss']['BY'] = 'av';
$lang['nb_NO']['ThumbnailStripField']['NOTAFOLDER'] = 'Dette er ikke en mappe';
$lang['nb_NO']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Velg en mappe over)';
$lang['nb_NO']['ViewArchivedEmail.ss']['CANACCESS'] = 'Du kan nå nettstedets arkiv på denne linken:';
$lang['nb_NO']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Du ønsker å se innholdet på vår nettside på';
$lang['nb_NO']['WaitingOn.ss']['ATO'] = 'tildelt til';

?>