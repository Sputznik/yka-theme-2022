<?php

/*
* SOME BASIC UTILTY FUNCTIONS THAT CAN BE USED ACROSS THE ENTIRE CODEBASE
*/

class YKA_UTIL extends YKA_BASE{

  // CONVERTS LONG NUMBERS INTO ABBREVIATED STRING
  function thousandsNumberFormat( $num ) {
    if( $num > 1000 ) {
      $x = round($num);
      $x_number_format = number_format($x);
      $x_array = explode(',', $x_number_format);
      $x_parts = array('K', 'M', 'B', 'T');
      $x_count_parts = count($x_array) - 1;
      $x_display = $x;
      $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
      $x_display .= $x_parts[$x_count_parts - 1];
      return $x_display;
    }

    return $num;
  }

  function count_user_posts( $userid ) {
    global $wpdb;
    $query = "SELECT COUNT(*) FROM $wpdb->posts WHERE post_author = $userid AND post_status = 'publish'";
    return $wpdb->get_var($query);
  }

  function maxPostPublishedUsers( $users_count ){
    global $wpdb;
    $prefix = $wpdb->prefix;
    $authors = $wpdb->get_results("
    SELECT
        {$prefix}users.ID, {$prefix}users.display_name as name, COUNT(*) as posts_count FROM
        {$prefix}posts, {$prefix}users WHERE
        {$prefix}posts.post_status='publish' AND {$prefix}posts.post_author = {$prefix}users.ID
        GROUP BY post_author ORDER BY posts_count DESC LIMIT $users_count
    ");

    return $authors;

  }

}
