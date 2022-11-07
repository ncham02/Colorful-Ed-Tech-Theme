<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colorful_Ed-Tech
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'colorful_edtech' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'colorful_edtech' ), 'WordPress' );
				?>
			</a>
			<br>
			<br>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'This theme, called %1$s, was coded by me (Nia Hamilton!) with some help from %2$s!', 'colorful_edtech' ), 'colorful_edtech', '<a href="http://underscores.me/">Underscores</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
