<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/base.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/layout.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive-style.css">

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js');
wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');
wp_enqueue_script('flexslider', get_stylesheet_directory_uri() .'/js/jquery.flexslider-min.js');
wp_enqueue_script('mobilemenu', get_stylesheet_directory_uri() .'/js/jquery.mobilemenu.js');
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>
<body <?php body_class(); ?> >

<div class="topbar">
	<div class="container">
		<div class="topfeed"> <a href="<?php bloginfo('rss2_url'); ?>" > Subscribe to RSS feed </a> </div>
	</div>
</div>

<div class="top">
	<div class="container">
    	<div class="header_logo">
    	</div>
		<div class="sixteen columns head">
			<!--<div class="twelve columns omega">
				<div id="botmenu">-->
					<div class="navi-left">
					<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','fallback_cb'=> 'fallbackmenu' ) ); ?>
					</div>
					<div class="navi-right">
					<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'secondary','fallback_cb'=> 'fallbackmenu' ) ); ?>
					</div>
				<!--</div>
			</div>-->
		</div>
	</div>
</div>
<div class="container casing">
