<?php get_header(); ?>

	<div class="container-404">
		<h2 class="page-heading">404 Page Not Found!!</h2>
		<img src="<?php echo get_template_directory_uri(); ?> /img/205629.jpg">
		<h3> Sorry I guess your lost, Please Try the Following Links</h3>
		<ul>
			<li><a href="<?php echo site_url('/blog') ?>">Blog List</a></li>
			<li><a href="<?php echo site_url('/work') ?>">Project List</a></li>
			<li><a href="<?php echo site_url('/about') ?>">About Me</a></li>
			<li><a href="<?php echo site_url('') ?>">Home Page</a></li>
		</ul>
	</div>

<?php get_footer(); ?>