<div id="<?php _e( $atts['id']	);?>" class="yka-post-list" data-target="<?php _e('article.post-item');?>" data-url="<?php _e( $atts['url'] );?>">
	<?php while( $this->query->have_posts() ) : $this->query->the_post();?>
		<article class="post-item">
			<?php get_template_part( 'partials/orbit/post-list' );?>
		</article>
	<?php endwhile;?>
</div>
