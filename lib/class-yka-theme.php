<?php

class YKA_THEME{

	function __construct(){

		/* LOAD THEME ASSETS */
		add_action('wp_enqueue_scripts', array( $this, 'assets' ) );
    add_action( 'after_setup_theme', array( $this, 'afterSetupTheme' ) );
	}


	function assets(){

		//ENQUEUE STYLES
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, null );
		wp_enqueue_style('yka-core-utilities', YKA_THEME_URL.'/css/utilities.css', array(), time() );
    wp_enqueue_style('yka-core-style', YKA_THEME_URL.'/css/main.css', array('yka-core-utilities', 'font-awesome' ), time() );

		//ENQUEUE SCRIPTS
		wp_enqueue_script( 'yka-core-js', YKA_THEME_URL.'/js/main.js', array('jquery'), time(), true );

	}

  function afterSetupTheme(){
    remove_theme_support( 'widgets-block-editor' );

		// Register Theme Menus
		register_nav_menus( array(
			'yka-sidebar-menu'    => __( 'Sidebar Menuuu', 'yka' )
		));

  }

}

global $yka_theme;

$yka_theme = new YKA_THEME;
