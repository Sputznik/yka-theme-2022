<?php
	$author_id		= get_the_author_meta( 'ID' );
	$author_link 	= esc_url( get_author_posts_url( $author_id ) );

	$categories = get_the_category();
	$separator = ', ';
	$categories_str = '';

	if ( ! empty( $categories ) ) {
		foreach( $categories as $category ) {
			$categories_str .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
		}
		$categories_str = ( trim( $categories_str, $separator ) );
	}
?>

<div class="author-snippet">
	<div class="author-details">
		<a class="author-name" href="<?php _e( $author_link );?>">
			<?php _e( get_the_author() );?>
		</a>
		<div class="post-categories"><?php _e( $categories_str );?></div>
	</div>
	<div class="post-date">
		<div class="post-published-date">
			Published: <?php _e( get_the_date('F j, Y') );?>
		</div>
		<div class="post-updated-date">
			Updated: <?php _e( get_the_modified_date('F j, Y') );?>
		</div>
	</div>
</div>
