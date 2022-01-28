<?php
	global $yka_theme;
  $post_id    = get_the_ID();
  $author_id	= get_the_author_meta( 'ID' );
	$author     = $yka_theme->getUser( $author_id );
	$categories = $yka_theme->getPostCategories( $post_id );
?>
<?php if ( !empty( get_the_post_thumbnail() ) ) : $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; endif;?>
<a href="<?php the_permalink(); ?>" class="thumbnail-bg" <?php if( isset( $image_url ) && $image_url ){ echo 'style="background-image:url('.$image_url.');"'; } ?>></a>
<div class="post-content">
  <h3 class="title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h3>
  <div class="footer">
    <div class="author">
      <a href="<?php _e( $author->link );?>"><?php _e( $author->display_name );?></a>
    </div>
    <div class="category">
      <?php
				$first_single_cat  = array_shift( $categories );
				echo '#<a href="'.get_category_link( $first_single_cat->term_id ).'">'.$first_single_cat->name.'</a>';
			?>
    </div>
  </div>
</div>
