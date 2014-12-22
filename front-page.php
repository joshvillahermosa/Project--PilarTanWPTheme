<?php
/*
 * Template Name: Front-Page
 * Description: Front page
 */
$ptbackgroundImg = wp_get_attachment_image_src(103); //Need to implement dyanmically
$authorID = 2;
get_header(); ?>
<style type="text/css">
	/**
	 * CSS for the front-page
	 */
	.pt-banner{
		/*Will need to add a method here to dynamically add*/
		background: url('http://pilartanmd.joshvee.com/wp-content/uploads/2014/12/ptjumbotron-compressed.jpg') no-repeat center center fixed;
		background-size: cover;
	}
</style>
<div class="jumbotron pt-banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 pt-spirtual">
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
					if (is_active_sidebar('front-page-2')) {
					    dynamic_sidebar('front-page-2');
					}
				?>
			</div>
		</div>
	</div>
</div>
<!-- Author information -->
<div class="container-fluid">
	<div id="pt-author">
		<div class="row">
			<div id="pt-author-pic" class="col-md-4">
				
			</div>
			<div id="pt-author-info" class="col-md-8">
				<h1>Who is <?php 
					$pt_firstname = get_the_author_meta('first_name', $authorID); 
					$pt_lastname = get_the_author_meta('last_name', $authorID);
					echo $pt_firstname." ".$pt_lastname;
					?>
				</h1>
				<?php 
					$pt_description = get_the_author_meta( 'description', $authorID ); 

					/** Cutes text down*/ 
					//echo $pt_description;
					echo strlen($pt_description);
					$cropText = substr($pt_description, 0, 2000);
					echo $cropText."... <a href='#'>Read more</a><hr />";
				?>
			</div>
		</div>
	</div>
</div>
<!-- New letter sign up  -->
<div class="container-fluid">
	<div class="pt-newsletter-form">

	</div>
</div>
<!-- Latest Blog post-->
<div id="pt-latestblog-post" class="container-fluid">
	<div class="row">
		<!-- Blog image -->
		<div class="col-md-4">
			<img src=""  alt="" class="img-rounded"/>
		</div>
		<div class="col-md-8"/>
			<?php 
				$pt_latest_post = (wp_get_recent_posts( 
					array(
						'numberposts' => 1,
						'offset' => 10
					)
				)); 
				$pt_post = $pt_latest_post[0];
			?>
			<h1><?php echo $pt_post['post_title'];?></h1>
			<?php echo $pt_post["post_content"] ?>
		</div>
		<?php echo "<hr/> Dump <br />"; print_r($pt_latest_post); ?>
	</div>
</div>
<!-- Twitter and latest comment -->
<div id="pt-twittercomments" class="container-fluid">
	<div class="row">
		<!-- Twitter -->
		<div class="col-md-6">

		</div>
		<!-- Latest comments -->
		<div class="col-md-6">

		</div>
	</div>
</div>
<?php get_footer();?>
