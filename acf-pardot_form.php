<?php

/*
Plugin Name: Advanced Custom Fields: Pardot Form
Plugin URI: https://github.com/adriangonzales/acf-pardot-forms
Description: DESCRIPTION
Version: 1.0.0
Author: Adrian Gonzales
Author URI: http://adgodev.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-pardot_form', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_pardot_form( $version ) {
	
	include_once('acf-pardot_form-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_pardot_form');	




// 3. Include field type for ACF4
function register_fields_pardot_form() {
	
	include_once('acf-pardot_form-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_pardot_form');	



	
?>