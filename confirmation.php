<?php
/*
 * Template Name: Confirmation Page
 * Description: Confirmation page after email activation
 */
?>
<?php get_header(); ?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title()?></h1>
				<!-- Displays widget-->
				<div class='col-md-6'>
				<?php if (is_active_sidebar('confirm-page-1')) 
					{dynamic_sidebar('confirm-page-1');}?>
				</div>
				<!-- Displays content -->
				<div class='col-md-6'>
					<?php the_content();?>
				</div>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>	
</div>
<?php get_footer();?>

