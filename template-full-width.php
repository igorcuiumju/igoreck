<?php
/**
 * Template Name:  Full Width Template
 *
 * @package modulus
 */

get_header(); ?>


<?php $breadcrumb = get_theme_mod( 'breadcrumb',true ); ?>    
		<div class="breadcrumb">
				<div class="container">
					<div class="breadcrumb-left eight columns">
						<?php the_title('<h4>','</h4>');?>			
					</div>
					<?php if( $breadcrumb ) : ?>
						<div class="breadcrumb-right eight columns">
							<?php modulus_breadcrumbs(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

	<?php do_action('modulus_before_content'); ?>

	<div id="content" class="site-content">
		<div class="container">

		<div id="primary" class="content-area sixteen columns">

			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->

<?php get_footer(); ?>
