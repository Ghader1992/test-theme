<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyCustomTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				// Ideally, replace with a custom function like mycustomtheme_posted_on() if it exists
				// For now, using a basic date display.
				echo '<span class="posted-on">' . get_the_date() . '</span>';
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php echo esc_url( get_permalink() ); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail( 'large', array(
					'alt' => the_title_attribute( array(
						'echo' => false,
					) ),
				) );
				?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_excerpt(); // Display excerpt for archive/home pages
		?>
		<a href="<?php echo esc_url(get_permalink()); ?>" class="read-more-link">
			<?php esc_html_e('Read More &raquo;', 'mycustomtheme'); ?>
		</a>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mycustomtheme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // Add categories, tags, or comments link here if desired ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
