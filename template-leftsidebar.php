<?php
/**
 * Template Name: Sidebar Left Template
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
		
	<div id="content" class="site-content">
		<div class="container">

	 <?php get_sidebar('left'); ?>	 	

    <div id="primary" class="content-area  <?php modulus_layout_class(); ?>  columns">
			
			<main id="main" class="site-main" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	
		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif;
		?>
	
		<?php get_footer(); ?>