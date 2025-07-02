<?php
/**
 * The front page template file.
 *
 * This is the template that displays the front page of the WordPress site.
 * It takes precedence over home.php and index.php for the site's front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package MyCustomTheme
 */

get_header(); ?>

	<div id="primary" class="content-area front-page">
		<main id="main" class="site-main">
			<div class="container"> <?php // Added container for padding ?>
				<?php
				// This will include the template part that queries and displays 3 recent posts.
				get_template_part( 'template-parts/content', 'home' );
				?>
			</div> <?php // End container ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
