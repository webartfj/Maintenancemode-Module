<?PHP if (!defined('TL_ROOT')) die('You cannot access this file directly!');
	/*
	  -- Maintenancemode Modul --
	  Autor: Fabian Jocks
	  Homepage: www.fabian-jocks.de
	*/
	
	
	/* General Setup */
	$GLOBALS['TL_LANG']['MOD']['mod_be_wa_maintenancemode'] 					= array('Wartungsmodus', 'Hier können Sie Besuchern Ihrer Webseite eine Wartungsseite anzeigen lassen.');
	
	/* Backend */
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['edit'] = 'Wartungsmodus Einstellungen';
	
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['title_legend'] = 'Allgemeine Einstellungen';
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['status'] = array('Wartungsmodus Status', 'Hier können Sie den Status des Wartungsmodus umschalten.');
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['status_options'] = array('Ausgeschaltet', 'Eingeschaltet');
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['deadline'] = array('Deadline', 'Der Tag an dem der Wartungsmodus ausgeschaltet wird, wenn er eingeschaltet ist.');
	
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['content_legend'] = 'Inhalt';
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['title'] = array('Titel', 'Dieser Titel wird als Überschift auf der &bdquo;Wartungsmodus&rdquo;-Seite angezeigt.');
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['content'] = array('Persönlicher Wartungstext', 'Dieser Text wird auf der &bdquo;Wartungsmodus&rdquo;-Seite angezeigt.');
	
	/* Frontend */
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['title_default'] = 'Webseite befindet sich im Wartungsmodus';
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['content_default'] = 'Diese Webseite befindet sich zur Zeit im Wartungszustand. Bitte besuchen Sie sie in den nächsten Tagen erneut oder benachrichtigen Sie den Administrator.';
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['fe_ptitle'] = 'Contao im Wartungsmodus';
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['fe_headertitle'] = 'Wartungsmodus';
	$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['fe_gotobackend'] = 'Zum Backend';
?>