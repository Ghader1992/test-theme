<?php
/**
 * Template part for displaying 3 recent posts on the home page.
 *
 * @package MyCustomTheme
 */

// Query for 3 recent posts
$recent_posts_args = array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'orderby'        => 'date',
	'order'          => 'DESC',
);
$recent_posts_query = new WP_Query( $recent_posts_args );

if ( $recent_posts_query->have_posts() ) :

	echo '<div class="recent-posts-grid">'; // Changed class for grid layout
	/* Start the Loop */
	while ( $recent_posts_query->have_posts() ) :
		$recent_posts_query->the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * Using 'template-parts/content-post' for custom structure.
		 */
		get_template_part( 'template-parts/content', 'post' );

	endwhile;
	echo '</div>';

	// Restore original Post Data
	wp_reset_postdata();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
