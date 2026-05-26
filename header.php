<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lumen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="site-header layout-padding">
        <div class="header-inline">
			<div class="site-branding">
				 <a href="<?php home_url(); ?>" class="site-logo">
					<img src="<?php the_field('site_logo','option');?>" alt="">
				</a>
			</div>
			  <div class="menu-trigger d-block d-lg-none">
				 <span></span>
				 <span></span>
				 <span></span>
		      </div>
			   <!-- Menu Item -->
			     <?php
					  wp_nav_menu( array(
						'theme_location'    => 'mainMenu',
						'container'         => 'div',
						'container_class'   => 'main-menu d-none d-lg-block',
				       ) );
				  ?>
				<!-- Header Right Item -->
			 <div class="header-right d-none d-lg-block">
				  <div class="header-btns">

					<?php 
					$search_btn = get_field('search_btn', 'option');
					$demo_btn = get_field('demo_btn', 'option');
					?>

					<?php if($search_btn): ?>
						<div class="search-btn">
							<a href="<?php echo esc_url($search_btn['url']); ?>"
							target="<?php echo esc_attr($search_btn['target'] ?: '_self'); ?>"
							class="site-btn border-gray">

								<span class="btn-text">
									<?php echo esc_html($search_btn['title']); ?>
								</span>

								<span class="btn-icon">
									<?php get_template_part('assets/svgs/search-icon'); ?>
								</span>

							</a>
						</div>
					<?php endif; ?>

					 <?php if($demo_btn): ?>
							<div class="header-demo-btn">
								<a href="<?php echo esc_url($demo_btn['url']); ?>"
								target="<?php echo esc_attr($demo_btn['target'] ?: '_self'); ?>" 
								class="site-btn">

								<span class="btn-text">
									<?php echo esc_html($demo_btn['title']); ?>
								</span>

								<span class="btn-icon">
									<?php get_template_part('assets/svgs/arrow-angle-right'); ?>
								</span>

								</a>

							</div>
						<?php endif; ?>

                 </div>
			</div>
		</div>
	</header><!-- #masthead -->

	<!-- Hamburger Menu Start -->
	<div class="hamburger-menu-wrapper d-block d-lg-none">
		<div class="hamburger-menu-inner">
			<div class="menu-close">
				 <img src="<?php echo get_template_directory_uri(); ?>/assets/svgs/close.svg" alt="">
			</div>
			<div class="hamburger-menu">
				  <?php
					wp_nav_menu( array(
						'theme_location'    => 'mainMenu',
						'container'         => 'div',
						'container_class'   => 'mobile-menu',
				   ) );
					?>
			</div>
			<div class="hamburger-footer">
				 <div class="header-btns">

					<?php 
					$search_btn = get_field('search_btn', 'option');
					$demo_btn = get_field('demo_btn', 'option');
					?>

					<?php if($search_btn): ?>
						<div class="search-btn">
							<a href="<?php echo esc_url($search_btn['url']); ?>"
							target="<?php echo esc_attr($search_btn['target'] ?: '_self'); ?>"
							class="site-btn border-gray">

								<span class="btn-text">
									<?php echo esc_html($search_btn['title']); ?>
								</span>

								<span class="btn-icon">
									<?php get_template_part('assets/svgs/search-icon'); ?>
								</span>

							</a>
						</div>
					<?php endif; ?>

					 <?php if($demo_btn): ?>
							<div class="header-demo-btn">
								<a href="<?php echo esc_url($demo_btn['url']); ?>"
								target="<?php echo esc_attr($demo_btn['target'] ?: '_self'); ?>" 
								class="site-btn">

								<span class="btn-text">
									<?php echo esc_html($demo_btn['title']); ?>
								</span>

								<span class="btn-icon">
									<?php get_template_part('assets/svgs/arrow-angle-right'); ?>
								</span>

								</a>

							</div>
						<?php endif; ?>
                 </div>
			</div>
		</div> 
	</div>
<!-- Hamburger Menu End -->
