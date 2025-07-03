<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MyCustomTheme
 */

get_header();
?>

	<div id="primary" class="content-area single-post-content">
		<main id="main" class="site-main">
			<div class="container">

				<?php
				while ( have_posts() ) :
					the_post();

					// Display the post title
					the_title( '<h1 class="entry-title">', '</h1>' );
					?>

					<div class="entry-meta">
						<?php
						// Basic meta: Post date. Could be expanded with author, etc.
						// For a more complete meta, consider using a function like that from _s: twentyseventeen_posted_on()
						echo '<span class="posted-on">';
						printf(
							/* translators: %s: post date. */
							esc_html__( 'Posted on %s', 'mycustomtheme' ),
							'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . get_the_date() . '</a>'
						);
						echo '</span>';

						// Example for author - uncomment if desired
						/*
						echo '<span class="byline"> ' . esc_html_x( 'by', 'post author', 'mycustomtheme' ) . ' ';
						echo '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';
						echo '</span>';
						*/
						?>
					</div><!-- .entry-meta -->

					<?php
					// Display featured image if set for the post
					if ( has_post_thumbnail() ) :
						?>
						<div class="post-thumbnail single-post-thumbnail">
							<?php the_post_thumbnail( 'large' ); // Or a specific single post image size ?>
						</div><!-- .post-thumbnail -->
						<?php
					endif;
					?>

					<div class="entry-content">
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mycustomtheme' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mycustomtheme' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php
						// Display categories and tags
						$categories_list = get_the_category_list( esc_html__( ', ', 'mycustomtheme' ) );
						if ( $categories_list ) {
							printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'mycustomtheme' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						}

						$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'mycustomtheme' ) );
						if ( $tags_list ) {
							printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'mycustomtheme' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						}
						?>
					</footer><!-- .entry-footer -->

					<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mycustomtheme' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mycustomtheme' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

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
