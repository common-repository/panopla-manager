<?php

/*
Plugin Name: PanoPlaManager
Plugin URI: http://wordpress.org/plugins/PanoPlaManager/
Description: Embed a pano on your site
Version: 0.5
Author: PanoPla
Author URI: http://www.panoplay.net
*/

require_once("ppminstall.php");
require_once("pano.php");

// Shortcodes
add_shortcode("ppm", "ppm_handler");

// Activiation Hook
// register_activation_hook( __FILE__, 'ppm_install' );
// There is nothing being stored in the database right now
