<?php
/**
 * @package modulus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		$featured_image = get_theme_mod( 'featured_image',true );
	    $featured_image_size = get_theme_mod ('featured_image_size','1');
		if( $featured_image ) : 
		        if ( $featured_image_size == '1' ) :?>		
						<div class="post-thumb">
						  <?php	if( $featured_image && has_post_thumbnail() ) : 
								    the_post_thumbnail('modulus-blog-full-width');
								 
			                     endif;?>
			            </div> <?php
		        else: ?>
		 	            <div class="post-thumb">
		 	                 <?php if( has_post_thumbnail() && ! post_password_required() ) :   
					               the_post_thumbnail('modulus-small-featured-image-width');
								
								endif;?>
			             </div>  <?php				
	            endif; 
		endif; ?> 
 
		<header class="entry-header">  
		
		<div class="title-meta">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<span class="date-structure">				
					<span class="dd"><i class="fa fa-calendar"></i><?php the_time('j M Y'); ?></span>			
				</span>
				<?php modulus_author(); ?>
				<?php modulus_comments_meta(); ?> 
				<?php modulus_edit() ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
		<br class="clear">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Read More', 'modulus' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages: ', 'modulus' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<?php if ( 'post' == get_post_type() ): ?>
	<footer class="entry-footer">
		<?php modulus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<?php endif;?>


</article><!-- #post-## -->