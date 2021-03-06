<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package modulus
 */
get_header();    
?>
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
		
		<?php $sidebar_position = get_theme_mod( 'sidebar_position', 'right' ); ?>
		<?php if( 'left' == $sidebar_position ) :?>
			<?php get_sidebar('left'); ?>
		<?php endif; ?> 


	<div id="primary" class="content-area <?php modulus_layout_class(); ?>  columns">
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

     <?php if( 'right' == $sidebar_position ) :?>
			<?php get_sidebar(); ?>
		<?php endif; ?>

<?php get_footer(); ?>
