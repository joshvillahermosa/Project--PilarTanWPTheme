<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package pilartan
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			<div class="row">
				<div class="text-center nav-inline">
					<?php
					/**
					 * First or Top level footer
					 */
						if (is_active_sidebar('footer-1')) {
						    dynamic_sidebar('footer-1');
						}
						wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '%3$s',
							'depth'           => 0,
							'walker'          => '')
						);
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<?php
					/**
					 * Left footer
					 */
						if (is_active_sidebar('footer-2')) {
						    dynamic_sidebar('footer-2');
						}

					?>
				</div>
				<div class="col-md-6">
					<?php
					/**
					 * Right level footer
					 */
						if (is_active_sidebar('footer-3')) {
						    dynamic_sidebar('footer-3');
						}
					?>
				</div>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'pilartan' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'pilartan' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'pilartan' ), 'pilartan', '<a href="http://joshvee.com" rel="designer">Joshua John Villahermosa</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
