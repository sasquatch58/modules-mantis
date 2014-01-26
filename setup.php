<?php

// MODULE CONFIGURATION DEFINITION
$config = array();
$config['mod_name'] 			    = 'Mantis';                   // name the module
$config['mod_version'] 				= '3.0.0';                    // add a version number
$config['mod_directory'] 			= 'mantis';                   // tell web2project where to find this module
$config['mod_setup_class'] 			= 'CSetupMantis';             // the name of the PHP setup class (used below)
$config['mod_type'] 				= 'user';                     // 'core' for modules distributed with w2p by standard, 'user' for additional modules
$config['mod_ui_name'] 				= $config['mod_name'];        // the name that is shown in the main menu of the User Interface
$config['mod_ui_icon'] 				= 'mantis_logo_button.gif';   // name of a related icon
$config['mod_description'] 			= 'Issue Management';         // some description of the module
//$config['mod_main_class'] = '';	//no main class for mantis
//$config['permissions_item_table'] 		= 'mantis';
//$config['permissions_item_field'] = '';
//$config['permissions_item_label'] = '';
$config['requirements'] = array(
		array('require' => 'web2project',   'comparator' => '>=', 'version' => '3')
);

class CSetupMantis extends w2p_System_Setup {   
	public function install() {
		$result = $this->_meetsRequirements();
			if (!$result) {
			return false;
		}
		return parent::install();
	}
		
    public function configure() {
		return false;	
	}

    public function upgrade($old_version) {
        return false;
	}
	
	public function remove() {
		return parent::remove();
	}
}