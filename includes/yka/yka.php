<?php

$inc_files = array(
	'class-yka-cache.php',								// YKA CACHE CLASS
	'class-yka-theme.php',							 // YKA MAIN CLASS
	'shortcodes.php',										// YKA SHORTCODES
	'class-yka-util.php',							 // YKA UTIL
	'author-functions.php'						// AUTHOR FUNCTIONS
);

foreach( $inc_files as $inc_file ){
	require_once( $inc_file );
}
