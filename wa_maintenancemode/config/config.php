<?PHP
	if (!defined('TL_ROOT')) die('You cannot access this file directly!');
	
	/* Backend Module */
	array_insert($GLOBALS['BE_MOD'], 2, array
	(
		'system'=>array /* Group */
		(
			'mod_be_wa_maintenancemode' => array /* Module */
	   		(
	   			'tables' => array(
					'tl_wa_maintenancemode'
				),
	   			
	   			'icon'   => 'system/modules/wa_maintenancemode/html/images/be-icon.maintenancemode.png'
	   		)
	 	)
	));
	
	/* Frontend Module */
	array_insert($GLOBALS['FE_MOD'], 3, array
	(
		'miscellaneous' => array /* Group */
		(
			'fe_wa_maintenancemode' => 'ModuleMaintenancemode' /* Module */
		)
	));
?>