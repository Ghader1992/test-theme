<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyCustomTheme
 */

get_header();
?>

	<div id="primary" class="content-area page-content">
		<main id="main" class="site-main">
			<div class="container">

				<?php
				while ( have_posts() ) :
					the_post();

					the_title( '<h1 class="entry-title">', '</h1>' );

					// Display featured image if set for the page
					if ( has_post_thumbnail() ) :
						?>
						<div class="post-thumbnail page-thumbnail">
							<?php the_post_thumbnail( 'large' ); ?>
						</div><!-- .post-thumbnail -->
						<?php
					endif;

					the_content();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
