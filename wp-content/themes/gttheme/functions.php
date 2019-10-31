<?php

//enqueque CSS and JS file

function gt_setup(){
	wp_enqueue_style( "fontawesome", '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_script( 'main', get_theme_file_uri( '/js/main.js' ), NULL, microtime(), true );

}
add_action( 'wp_enqueue_scripts', 'gt_setup');

//THEME SUPPORT
function gt_init(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', 
	array('comment-list','comment-form','search-form') );
}
add_action( 'init', 'gt_init');

//Project Post Type

function gt_custom_post_type() {
	register_post_type( 'project', array(
		'rewrite' => array('slug' => 'projects'),
		'labels' => array(
			'name' => 'Projects',
			'singular_name' => 'Project',
			'add_new_item' => 'Add New Project',
			'edit_item' => 'Edit Project'
		),
		'menu-icon' => 'dashicons-clipboard',
		'public' => true,
		'has_arcive' => true,
		'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'comments')
	) );
}
add_action( 'init', 'gt_custom_post_type' );

function gt_widgets() {
	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'main_sidebar',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		 )
		);
}
add_action('widgets_init', 'gt_widgets');

// Search Filter
function search_filter($query) {
	if ($query->is_search()) {
		$query->set('post_type', array('post', 'project'));
	}
}
add_filter( 'pre_get_posts', 'search_filter');