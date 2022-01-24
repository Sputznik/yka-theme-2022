<?php

add_shortcode("yka-social-share", function(){
	ob_start();
	get_template_part('partials/social-share');
	return ob_get_clean();
});

// USERS LIST BASED ON MAXIMUM NUMBER OF PUBLISHED POSTS
add_shortcode( 'yka_max_post_published_users', function( $atts ) {
  $atts = shortcode_atts( array(
    'users'		=> '5', // Limit the number of users via shortcode
  ), $atts, 'yka_users_list' );

	ob_start();
  include(YKA_THEME_PATH.'/partials/max-post-published-users-list.php');
  return ob_get_clean();

});
