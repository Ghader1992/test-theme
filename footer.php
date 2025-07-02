<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyCustomTheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container"> <?php // Added container for padding ?>
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<aside class="widget-area footer-widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</aside><!-- .widget-area -->
			<?php endif; ?>

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mycustomtheme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'mycustomtheme' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'mycustomtheme' ), 'mycustomtheme', 'Jules' ); // Updated author
					?>
			</div><!-- .site-info -->
		</div> <?php // End container ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
