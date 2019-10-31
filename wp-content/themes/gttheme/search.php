<?php get_header();  ?>

<main>
		<h2 class="page-heading">Search Result for <?php echo get_search_query(); ?></h2>
			<?php if (have_posts()) {

			 ?>
<section>

<?php 

while (have_posts()) {
	the_post();

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
				<div class="card-meta">
					Posted by: <?php echo the_author(); ?> on <?php echo the_time( 'F j, Y' ); ?><?php if (get_post_type() == 'post') {
					 ?> in <a href="#"> <?php echo get_the_category_list(', ') ?> <?php } ?></a>
				</div>
				<p><?php echo wp_trim_words( get_the_excerpt(), 30); ?></p>
				<a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
			</a></div>
	</div>

	<?php
}

 ?>
	

</section>
<?php 
	} else {
		?>
	<div class="no-results">
		<h2>Couldn't Find Anything.... </h2>
		<h3>Dont Worry</h3>
		<h3>Check Out The Following Links</h3>
		<ul>
			<li><a href="<?php echo site_url('/blog') ?>">Blog List</a></li>
			<li><a href="<?php echo site_url('/work') ?>">Project List</a></li>
			<li><a href="<?php echo site_url('/about') ?>">About Me</a></li>
			<li><a href="<?php echo site_url('') ?>">Home Page</a></li>
		</ul>
	</div>
		<?php
	}
 ?>
<div class="pagination">
	<?php echo paginate_links(); ?>
</div>


<?php get_footer(); ?>