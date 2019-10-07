<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disabler of Original Data for Advanced Custom Fields Multilingual
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Disables the "Field's value in original language" message under ACF fields that are translated with WPML.
 * Version:           1.0.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_filter( 'wpml_custom_field_original_data', function ( $acf_original_value ) {
	return null;
}, 11, 1 );
