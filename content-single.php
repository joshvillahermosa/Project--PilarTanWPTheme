<?php
/**
 * @package pilartan
 */
?>

<!-- Displays single content posts-->
<br />
<div class="container">
	<div class="jumbotron white-bg">
		<div class="row">
			<div class="col-md-12">
				<?php
					/** Args to get latest post*/

					$postID = $pt_post['ID'];
					$imageSize = 'large';
					$imgArg = array(
						'class'	=> "img-rounded img-responsive img-feat",
						'alt'	=> $pt_post["title"]
					);
					//print_r(get_the_post_thumbnail($postID, $imageSize, $imgArg));
					echo get_the_post_thumbnail($postID, $imageSize, $imgArg);
				?> 	
			</div>
		</div>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php pilartan_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
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
	</div>
</div>