
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >


	<!-- FOR MOBILE NAVIGATION MENU -->
	<div id="slideout-menu">
	<ul>
		<li>
			<a href="<?php echo site_url(''); ?>">Home</a>
		</li>
		<li>
			<a href="<?php echo site_url('/blog'); ?>">Blog</a>
		</li>
		<li>	
			<a href="<?php echo site_url('/works'); ?>">Projects</a>
		</li>
		<li>		
			<a href="<?php echo site_url('/about'); ?>">About</a>
		</li>
		<div class="searchbox-slide-menu">
			<?php get_search_form(); ?>
		</div>
	</ul>	
	</div>
	
	<nav>
	<div id="logo-img">
		<a href="<?php echo site_url(''); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="GTCoding Logo">
		</a>	
	</div>
	<div id="menu-icon">
		<i class="fa fa-bars"></i>	
	</div>
	<ul>
		<li>
			<a href="<?php echo site_url(''); ?>" <?php if (is_front_page()) { echo 'class="active"'; } ?> >Home</a>
		</li>
		<li>
			<a href="<?php echo site_url('/blog'); ?>" <?php if (get_post_type() == 'post') { echo 'class="active"'; } ?> >Blog</a>
		</li>
		<li>	
			<a href="<?php echo site_url('/works'); ?>" <?php if (is_page('works')) { echo 'class="active"'; } ?> >Projects</a>
		</li>
		<li>		
			<a href="<?php echo site_url('/about'); ?>" <?php if (is_page('about')) { echo 'class="active"'; } ?> >About</a>
		</li>
		<li>
			<div id="search-icon">
				<i class="fa fa-search"></i>	
			</div>
		</li>
	</ul>
</nav>
<div id="searchbox">
	<?php get_search_form(); ?>
</div>
