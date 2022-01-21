<?php get_header(); ?>
<?php if( have_posts() ): while( have_posts() ) : the_post();?>
  <div class="container">
    <div class="single-post-wrapper">
      <?php the_post_thumbnail( 'full', ['alt'=> 'Featured Image'] );?>
      <h1 class="post-title"><?php the_title();?></h1>
      <div id="post-author">
        <?php get_template_part('partials/avatar', 'post'); ?>
      </div>
      <h4 class="self-note">
        This post has been self-published. Youth Ki Awaaz neither endorses, nor is responsible for the views expressed by the author.
      </h4>
      <div class="title-separator"></div>
      <div class="post-description">
        <?php the_content();?>
      </div>
      <?php echo do_shortcode("[yka-social-share]");?>
      <div class="author-box-below-post">
        <?php get_template_part('partials/author-box'); ?>
      </div>
    </div>
  </div>
<?php endwhile;endif;?>
<?php get_footer();?>
