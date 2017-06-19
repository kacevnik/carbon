<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('/'); ?></title>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="row">
				<div class="header_left">
					<?php
						$args = array('theme_location' => 'top', 'container'=> 'nav', 'menu_class' => 'top-menu', 'menu_id' => 'top-nav');
			wp_nav_menu($args);
					?>
					<div class="header_logo">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
						</a>
					</div>
				</div>
				<div class="header_right">
					<ul class="header_right_list">
						<li class="header_cart">$2,399<i class="fa fa-shopping-cart" aria-hidden="true"></i><span>8</span></li>
						<li class="header_favorites"><i class="fa fa-heart-o" aria-hidden="true"></i><span>10</span></li>
						<li class="header_login"><a href="#"><i class="fa fa-user" aria-hidden="true"></i>You</a></li>
						<li class="header_lang"><a href="">RU</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>