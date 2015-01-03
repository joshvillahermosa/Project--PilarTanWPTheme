<?php
/*
 * Template Name: Author Page
 * Description: Author page
 */
?>
<?php
	$authorID = 2;
	$pt_firstname = get_the_author_meta('first_name', $authorID); 
	$pt_lastname = get_the_author_meta('last_name', $authorID);
	$pt_name = $pt_firstname." ".$pt_lastname;
	$pt_description = get_the_author_meta( 'description', $authorID );
?>
<?php get_header();?>
<div class="container">
	<br />
	<div class="jumbotron">
		<div class="row">
			<?php if (is_active_sidebar('author-page-1')) 
					{dynamic_sidebar('author-page-1');}?>
		</div>
		<div class="row">
			<h1>Hi There! </h1>
			<p><?php //echo $pt_description ?></p>
		</div>
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content();?>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>	
</div>
<script type="text/javascript">
	/**
		Dirty hack
		Source: http://stackoverflow.com/questions/10596417/is-there-a-way-to-get-element-by-xpath-in-javascript
	*/
	function getElementByXpath (path) {
  		return document.evaluate(path, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue;
	}

	var image = getElementByXpath('//*[@id="image-7"]/div/img');
	image.className = 'img-circle img-responsive';

</script>
<?php get_footer();?>