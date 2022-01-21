<?php

  $yka_util = YKA_UTIL::getInstance();
  $author_id		= get_the_author_meta( 'ID' );
  $author_link 	= esc_url( get_author_posts_url( $author_id ) );
  $user_posts_count = $yka_util->count_user_posts( $author_id );
?>

<h4 class="follow-title">Liked the story? Follow and read more from the author</h4>
<div class="author-box">
  <div class="author-box-left">
    <a href="<?php _e( $author_link );?>" class="author-picture">
      <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
    </a>
    <div class="post-author-meta">
      <h4>
        <a href="<?php _e( $author_link );?>">
          <?php _e( get_the_author() );?>
        </a>
      </h4>
      <div class="post-count">
        <?php echo ( $user_posts_count > 1 ? "$user_posts_count Posts" : "$user_posts_count Post" ); ?>
      </div>
      <div class="followers-count">
        <?php _e( strtolower( $yka_util->thousandsNumberFormat(1700) ) );?> Followers</div>
    </div>
  </div>
  <div class="author-box-right">
    <a href="#" class="author-btn stories-btn">More Stories</a>
    <button type="button" class="author-btn follow-btn">Follow</button>
  </div>
</div>
