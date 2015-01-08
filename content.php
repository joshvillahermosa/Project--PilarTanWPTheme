<?php
/**
 * @package pilartan
 */
?>
<!-- ### Displays single content snippet in the blog listing-->


<!--Gets image-->
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php endif; ?>
<style type="text/css">
	#post<?php echo get_the_ID();?> {

		background: url('<?php echo $image[0]; ?>') no-repeat center center fixed;
		background-size: cover;
	}
	.pt-bg-white{
		border: 1px;
		border-radius: 10px;
		/*background-color: #FDCE80;*/
		background-color: #FFFEA3;
		opacity: 0.8;
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="jumbotron" id="post<?php echo get_the_ID();?>">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php pilartan_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div>
	

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pilartan' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pilartan' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pilartan_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->