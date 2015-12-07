<?php
/**
 * The template for displaying Archive pages
 *
 * @package ThemeGrill
 * @subpackage FitClub
 * @since FitClub 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'fitclub_before_body_content' );

	$fitclub_layout = fitclub_layout_class();
	?>

	<div id="content" class="site-content">
		<main id="main" class="clearfix <?php echo $fitclub_layout; ?>">
			<div class="tg-container">
				<div id="primary" class="content-area">

					<?php if ( have_posts() ) : ?>

						<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );

						// End the loop.
						endwhile;

						get_template_part( 'navigation', 'archive' );

					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'no-results', 'archive' );

					endif;
					?>
				</div><!-- #primary -->
				<?php fitclub_sidebar_select(); ?>
			</div><!-- .tg-container -->
		</main>
	</div>

	<?php do_action( 'fitclub_after_body_content' ); ?>

<?php get_footer(); ?>