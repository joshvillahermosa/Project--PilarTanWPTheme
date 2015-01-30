<?php
/*
 * Template Name: Feed-back
 * Description: Feedback
 */
$ptbackgroundImg = wp_get_attachment_image_src(103); //Need to implement dyanmically
get_header(); ?>
<div class="container">
  <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content();?>
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
</div>
<?php get_footer();?>