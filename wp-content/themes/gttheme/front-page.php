<?php get_header();  ?>


<div id="banner">
	<h1>&lt; GTCoding /&gt;</h1>
	<h3>Learn Coding From Scratch</h3>
</div>

<main>
	<a href="<?php echo site_url('/blog'); ?>">
		<h2 class="section-heading">All Blogs</h2>
	</a>
			
<section>

<?php 
		$args = array( 
		'post_type' => 'post',
		'posts_per_page' => 2,
);

$blogpost =new WP_Query($args);

while ($blogpost->have_posts()) {
	$blogpost->the_post();

	?>
<div class="card">
		<div class="card-image">
			<a href="<?php  the_permalink(); ?>">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
			</a>
		</div>

		<div class="card-description">
			<a href="<?php  the_permalink(); ?>">
				<h3><?php echo the_title(); ?></h3>
				<p><?php echo wp_trim_words( get_the_excerpt(), 30); ?></p>
				<a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
			</a></div>
	</div>

	<?php
}
wp_reset_query();
 ?>
	

</section>

<h2 class="section-heading">All Projects</h2>
<section>
	
<?php 
		$args = array( 
		'post_type' => 'project',
		'posts_per_page' => 2,
);

$blogpost =new WP_Query($args);

while ($blogpost->have_posts()) {
	$blogpost->the_post();

	?>
<div class="card">
		<div class="card-image">
			<a href="<?php  the_permalink(); ?>">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
			</a>
		</div>

		<div class="card-description">
			<a href="<?php  the_permalink(); ?>">
				<h3><?php echo the_title(); ?></h3>
				<p><?php echo wp_trim_words( get_the_excerpt(), 30); ?></p>
				<a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
			</a></div>
	</div>

	<?php
}
wp_reset_query();
 ?>
</section>

<h2 class="section-heading">Source Code</h2>
	<section class="section-source">
		<p>
			Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 
		</p>

		<a href="#" class="btn-readmore">Github Profile</a>

	</section>

<?php get_footer(); ?>