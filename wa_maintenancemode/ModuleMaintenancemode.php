<?PHP
	class ModuleMaintenancemode extends Module
	{
		/**
	   	* Template
	   	* @var string
	   	*/
	  	protected $strTemplate = 'mod_maintenancemode';
		
	  	protected function compile()
	  	{	
			$get = array();	
			
			$get['status'] = 0;
			if($GLOBALS['TL_CONFIG']['wa_status'] == $GLOBALS['TL_LANG']['tl_wa_maintenancemode']['status_options'][0]) $get['status'] = 1;
			if(!is_null($_SESSION['BE_DATA'])) $get['status'] = 1;
			
			$get['wa_title'] = $GLOBALS['TL_LANG']['tl_wa_maintenancemode']['title_default'];
			if(strlen($GLOBALS['TL_CONFIG']['wa_title']) > 0) $get['wa_title'] = $GLOBALS['TL_CONFIG']['wa_title'];
			
			$get['wa_content'] = $GLOBALS['TL_LANG']['tl_wa_maintenancemode']['content_default'];
			if(strlen($GLOBALS['TL_CONFIG']['wa_content']) > 0) $get['wa_content'] = $GLOBALS['TL_CONFIG']['wa_content'];
			
			if(strlen($GLOBALS['TL_CONFIG']['wa_deadline']) > 0) {
				$date['n'] = date('m/d/Y');
				$date['n'] = explode('/', $date['n']);
				$date['n'] = mktime(0, 0, 0, $date['n'][0], $date['n'][1], $date['n'][2]);
				
				$date['r'] = $GLOBALS['TL_CONFIG']['wa_deadline'];
				$date['r'] = explode('/', $date['r']);
				$date['r'] = mktime(0, 0, 0, $date['r'][0], $date['r'][1], $date['r'][2]);
			} else {
				$date['n'] = 1;
				$date['r'] = 0;
			}
			
			if($date['n'] > $date['r']) {
				$date = 1;
			} else {
				$date = 0;
			}
			
			
			if($GLOBALS['TL_CONFIG']['wa_status'] == $GLOBALS['TL_LANG']['tl_wa_maintenancemode']['status_options'][1] && $date == 0) {
				$GLOBALS['TL_CONFIG']['wa_status'] = $GLOBALS['TL_LANG']['tl_wa_maintenancemode']['status_options'][0];
				$get['status'] = 1;
			}			
			
			
			$language = array();
			$language['ptite'] = $GLOBALS['TL_LANG']['tl_wa_maintenancemode']['fe_ptitle'];
			$language['headertitle'] = $GLOBALS['TL_LANG']['tl_wa_maintenancemode']['fe_headertitle'];
			$language['gotobackend'] = $GLOBALS['TL_LANG']['tl_wa_maintenancemode']['fe_gotobackend'];
			
			
			$this->Template->get = $get;
			$this->Template->language = $language;
	  	}
	}
?>