<?php
/*
 * Template Name: Testamonials Page
 * Description: Testamonials page
 */
?>
<?php get_header();?>
<div class="container">
	<br />
	<div class="jumbotron">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content();?>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<?php echo testimonials();?>
	</div>

	<div class="row">
		<?php if (is_active_sidebar('testimonials-page-1')) 
					{dynamic_sidebar('testimonials-page-1');}?>
	</div>
</div>
<?php get_footer();?>