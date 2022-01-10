<?php

define('YKA_THEME_PATH', get_template_directory() );
define('YKA_THEME_URL', get_template_directory_uri() );

// INCLUDE FILES
$inc_files = array(
 'lib/class-yka-theme.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }

/* HIDE ADMIN BAR FROM THE FRONTEND */
add_filter('show_admin_bar', '__return_false');
