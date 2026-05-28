<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lumen
 */

?>

	<footer class="site-footer layout-padding pt-50 pb-50">
		<div class="footer-top-inner">
			<!-- Footer About -->
			<div class="footer-widget-box">
				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url('/') ); ?>">
						<img src="<?php the_field('footer_logo', 'option'); ?>" alt="">
					</a>
				</div>
				<div class="footer-description">
					<?php the_field('footer_description', 'option'); ?>
				</div>
				<div class="footer-tagline">
					<p><?php the_field('footer_tagline', 'option'); ?></p>
				</div>
				<div class="contact-form">
					<?php 
						$form_shortcode = get_field('footer_newslater', 'option');

						if($form_shortcode) {
							echo do_shortcode($form_shortcode);
						} 
					?>
				</div>
			</div>

			<!-- Platform Widget -->
			<div class="footer-widget-box">
				<?php 
					if ( is_active_sidebar('platform') ) {
						dynamic_sidebar('platform');
					}
				?>
			</div>

			<!-- Company Widget -->
			<div class="footer-widget-box">
				<?php 
					if ( is_active_sidebar('company') ) {
						dynamic_sidebar('company');
					}
				?>
			</div>

			<!-- Resources Widget -->
			<div class="footer-widget-box">
				<?php 
					if ( is_active_sidebar('resources') ) {
						dynamic_sidebar('resources');
					}
				?>
			</div>

            <!-- Legal Widget -->
			<div class="footer-widget-box">
				<?php 
					if ( is_active_sidebar('legal') ) {
						dynamic_sidebar('legal');
					}
				?>
			</div>
		</div>
		<div class="footer-bottom-inner">
             <div class="footer-copyright-left">
				<?php the_field('footer_copyright', 'option'); ?>
			 </div>
             <div class="footer-copyright-right">
				<?php the_field('footer_category_list', 'option'); ?>
			 </div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
