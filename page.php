<?php get_header();?>
	<div class="container ">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
      <div class="page-description"><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
	</div>
<?php get_footer();?>
