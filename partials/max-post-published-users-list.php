<ul class='list-unstyled yka-max-post-published-users'>
<?php
  $yka_util = YKA_UTIL::getInstance();
  $authors  = $yka_util->maxPostPublishedUsers( $atts['users'] );
  foreach ( $authors as $author ) : $author_url = get_author_posts_url( $author->ID ) ?>
  <li>
    <span class="posts-count">
      <?php _e( $yka_util->thousandsNumberFormat( $author->posts_count ) ); ?>
    </span>
    <a href="<?php _e( $author_url );?>"><?php echo get_avatar( $author->ID, 95 );?></a>
    <a href="<?php _e( $author_url );?>"><?php _e( $author->name );?></a>
  </li>
  <?php endforeach; ?>
</ul>
