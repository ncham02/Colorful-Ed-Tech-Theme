<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colorful_Ed-Tech
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_front_page() ) :
				?>
 <?php the_title( '<h1 class="front-page-title">', '</h1>' ); ?>
<?php else: ?>
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php	endif; ?>
	</header><!-- .entry-header -->

	<?php colorful_edtech_post_thumbnail(); ?>
	<?php
		if ( !is_front_page() ) :
			?>
<div class="cardboard-background">
	<div class="blue-paper">
	<img class="tape top-left" src="<?php echo esc_url( get_template_directory_uri() . '/images/tape-png-44308.png' ); ?>" alt="">
	<img class="tape top-right" src="<?php echo esc_url( get_template_directory_uri() . '/images/tape-png-44308.png' ); ?>" alt="">
	<img class="tape bottom-left" src="<?php echo esc_url( get_template_directory_uri() . '/images/tape-png-44308.png' ); ?>" alt="">
	<img class="tape bottom-right" src="<?php echo esc_url( get_template_directory_uri() . '/images/tape-png-44308.png' ); ?>" alt="">
		<?php	endif; ?>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'colorful_edtech' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<?php
		if ( !is_front_page() ) :
			?>
		</div>
</div>
	<?php	endif; ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'colorful_edtech' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
