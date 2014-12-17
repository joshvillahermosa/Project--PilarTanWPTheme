<?php
/*
 * Template Name: Front-Page
 * Description: Front page
 */
get_header(); ?>
<div class="jumbotron pt-banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7">
				<!-- Where widget one will be located-->
				<?php
				/**
				 *  Front Page jumbotron widget - Primarily used for quick inspirational qoutes
				 */
					if (is_active_sidebar('front-page-1')) {
					    dynamic_sidebar('front-page-1');
					}
				?>
			</div>
			<div class="col-md-5">
				<!-- Where store widget will be located-->
				<?php
				/**
				 *  Front Page jumbotron widget - Primarily used to feature products
				 */
					echo is_active_sidebar('front-page-2')." - Sidebar 2"; 
					if (is_active_sidebar('front-page-2')) {
					    dynamic_sidebar('front-page-2');
					}
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>