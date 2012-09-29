<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * System configuration
 */
$GLOBALS['TL_DCA']['tl_wa_maintenancemode'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'             => 'File',
		'closed'                    => true,
		'enableVersioning'			=> true,
		'onsubmit_callback'			=> array(array('tl_wa_maintenancemode','log_save'))
	),

	// Palettes
	'palettes' => array
	(
		'default'                   => '{title_legend},wa_status,wa_deadline;{content_legend},wa_title,wa_content'
	),

	// Fields
	'fields' => array
	(
		'wa_status' => array
		(
			'label'           		=> &$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['status'],
           	'inputType'       		=> 'select',
			'default'				=> 0,
			'options_callback'		=> 'change_status',
			'options'				=> &$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['status_options'],
           	'eval'            		=> array
			(
				'mandatory'			=> false,
				'tl_class'			=> 'w50'
			) 
		),
		
		'wa_deadline' => array
		(
			'label'           		=> &$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['deadline'],
           	'inputType'       		=> 'text',
			'default'				=> date('m/d/Y'),
           	'eval'            		=> array
			(
				'mandatory'			=> false,
				'tl_class'			=> 'w50 wizard',
				'datepicker'		=> '.'
			) 
		),
		
		'wa_title' => array
		(
			'label'           		=> &$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['title'],
           	'inputType'       		=> 'text',
           	'eval'            		=> array
			(
				'mandatory'			=> false,
				'tl_class'			=> 'long'
			) 
		),
		
		'wa_content' => array
    	(
      		'label'                   => &$GLOBALS['TL_LANG']['tl_wa_maintenancemode']['content'],
      		'inputType'               => 'textarea',
      		'eval'                    => array
			(
				'rte' => 'tinyFlash'
			)
    	)
	)
);

class tl_wa_maintenancemode extends Backend 
{ 
	public function log_save( $dca ) {
		$this->log('Maintenance-Settings updated', __CLASS__.'::'.__FUNCTION__, TL_CONFIGURATION);
	}
}
?>