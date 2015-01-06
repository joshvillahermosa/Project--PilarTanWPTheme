<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package pilartan
 */

get_header(); ?>
<!-- Controls blog loop -->
<br />

<div class="jumbotron">
	<!-- Will hold widget--> 
	<div class="container">
		<?php if (is_active_sidebar('bloglist-page-1')) {dynamic_sidebar('bloglist-page-1');}?>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<!-- Controls blog loop -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main container-fluid" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php pilartan_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div>
		<div class="col-md-3">
			<!-- Side Widget -->
			<?php if (is_active_sidebar('bloglist-page-2')) {dynamic_sidebar('bloglist-page-2');}?>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
