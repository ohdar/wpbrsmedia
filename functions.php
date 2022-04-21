<?php
/*
* This is our functions file
*/
//add_filter('site_transient_update_plugins', '__return_false');
//Include Theme Setup File
require get_template_directory().'/inc/wpbrsmedia-themesetup.php';

//Include Theme Styles & Scripts
require get_template_directory().'/inc/wpbrsmedia-enquescripts.php';


//Include Theme Register Sidebars File
require get_template_directory().'/inc/wpbrsmedia-regsidebars.php';

//Custom Post Types
require get_template_directory().'/inc/portfolio.php';
//Include Custom Post Types
require get_template_directory() .'/inc/angelsoftware.php';
//Include Custom Post Types
require get_template_directory() .'/inc/cloudtechnology.php';
//Include Custom Post Types
require get_template_directory() .'/inc/services.php';
//Include Custom Post Types
require get_template_directory() .'/inc/elearning.php';

//TGM Plugin Activation
//require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';
//require get_template_directory().'/inc/install-plugins.php';

//Kirki Embedded
require get_template_directory().'/inc/plugins/kirki/kirki.php';
require get_template_directory().'/inc/kirki-config.php';

//Include Customizer
require get_template_directory() .'/inc/customizer.php';
//increase the upload size
//@ini_set( 'upload_max_size' , '64M' );
//@ini_set( 'post_max_size', '64M');
//@ini_set( 'max_execution_time', '300' );