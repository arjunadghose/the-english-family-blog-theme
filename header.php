<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div class="container">
		<div id="main">
			<header>
				<div id="brooklyn-sun">
					<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/brooklyn-sun.png" /></a>
				</div>
				<div id="tree-lg-screen">
					<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/tree3b.png" /></a>
				</div>
				<div id="tree-sm-screen">
					<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/tree3.jpg" /></a>
				</div>
				<div id="brooklyn-block">
					<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/brooklyn-drawing.png" /></a>
				</div>
				<h1 id="name">
					<a href="<?php echo esc_url(home_url()); ?>">The English Family <span class="padding-left">Blog</span></a>
				</h1>
				<a href="<?php echo esc_url(home_url()); ?>"><p id="description">About our travels, the places we've seen, <span class="padding-left">and</span> our experiences together...</p></a>
			</header>