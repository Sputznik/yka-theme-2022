<?php

class YKA_THEME{

	var $cache;

	function __construct(){

		/* LOAD THEME ASSETS */
		add_action('wp_enqueue_scripts', array( $this, 'assets' ) );
    add_action( 'after_setup_theme', array( $this, 'afterSetupTheme' ) );

		$this->cache = YKA_CACHE::getInstance();

	}


	function assets(){

		//ENQUEUE STYLES
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, null );
		wp_enqueue_style( 'yka-google-fonts', 	'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap', false, null );
		wp_enqueue_style('yka-core-utilities', YKA_THEME_URL.'/css/utilities.css', array(), time() );
    wp_enqueue_style('yka-core-style', YKA_THEME_URL.'/css/main.css', array('yka-core-utilities', 'font-awesome' ), time() );

		//ENQUEUE SCRIPTS
		wp_enqueue_script( 'yka-core-js', YKA_THEME_URL.'/js/main.js', array('jquery'), time(), true );

	}

  function afterSetupTheme(){
    remove_theme_support( 'widgets-block-editor' );
		add_theme_support( 'post-thumbnails' );

		// Register Theme Menus
		register_nav_menus( array(
			'yka-primary-menu'    => __( 'Primary Menu', 'yka' ),
			'yka-sidebar-menu'    => __( 'Sidebar Menu', 'yka' )
		));

  }

	// CACHING USER BY USER ID AND ALSO RETRIEVING
	function getUser( $user_id ){

		return $this->cache->getData( 'users', $user_id, function( $user_id ){

			$user = get_user_by( 'id', $user_id );					// GET USER BY USER ID FROM THE DATABASE

			$user->link = esc_url( get_author_posts_url( $user_id ) );

			return $user;
		});

	}

	// CACHING AVATAR URL AND ALSO RETRIEVING
	function getAvatarURL( $user_id, $size = 128 ){

		$key = $user_id.'_'.$size;

		return $this->cache->getData( 'avatars', $key, function( $key ){

			$atts = explode( '_', $key );

			$user_id = $atts[0];
			$size = $atts[1];

			$url = get_user_meta( $user_id, 'wsl_current_user_image', true );				// GET WSL IMAGE
			if( ! $url ){ $url = get_user_meta( $user_id, 'wsl_user_image', true ); }		// FALLBACK ON OLD WSL IMAGE META
			if( ! $url ){ $url = get_avatar_url( $user_id, array( 'size' => $size ) ); }	// FALLBACK ON DEFAULT WP AVATAR IMAGE

			return $url;
		});

	}

	function getAvatar( $user_id, $size ){

		$user_avatar = $this->getAvatarURL( $user_id, $size );

		return '<img src="' . $user_avatar . '" class="avatar avatar-wordpress-social-login avatar-' . $size . ' photo" height="' . $size . '" width="' . $size . '" />';
	}

	// CACHING POST CATEGORIES BY POST ID AND ALSO RETRIEVING
	function getPostCategories( $post_id ){

		return $this->cache->getData( 'post_categories', $post_id, function( $post_id ){

			$cats = get_the_category($post_id);

			// REMOVE UNLISTED AND UNREVIEWED CATEGORIES FROM THE LIST
			$hide = array('unlisted', 'unreviewed');
			foreach (	$cats as $i=>$cat	)	{
				if( in_array( $cat->slug, $hide ) ){
					unset( $cats[$i] );
				}
			}
			return $cats;

		});

	}

}

global $yka_theme;

$yka_theme = new YKA_THEME;
