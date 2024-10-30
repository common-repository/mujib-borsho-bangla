<?php
/*
	* Plugin Name: 		Mujib Borsho Bangla
	* Plugin URI: 		https://softclever.com/
	* Description: 		This plugin is created for the Bangla website to celebrate 100 years of birth anniversary of the founding leader of the country, Sheikh Mujibur Rahman.
	
	* Author: 			Md Maruf Adnan Sami
	* Author URI: 		https://facebook.com/RealboyAdnan
	* Version: 			1.0
	
	* License:      	GNU General Public License v1 or later
	* License URI:  	https://softclever.com/license-agreement/
	
	* Text Domain: 		mbb
	* Copyright: 		(c) 2010 SoftClever Limited
*/

require_once plugin_dir_path(__FILE__)."class.mujib_borsho.php";

function mujib_borsho_bn_register(){
	register_widget('MujibBorshoBNWidget');
}
add_action('widgets_init','mujib_borsho_bn_register');
?>