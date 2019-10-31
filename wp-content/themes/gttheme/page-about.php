<?php get_header();  ?>

<main>
		<h2 class="page-heading">About Page</h2>
			
<section>

<?php 

 while (have_posts()) {
 	the_post();

	?>
<div class="card">
		<div class="card-image">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
		</div>
	
		<div class="card-description">
			<?php echo the_content(); ?>
		</div>
	</div>

	<?php
}
 ?>
	

</section>

<div class="pagination">
	<?php echo paginate_links(array(
		'total' => $blogpost->max_num_pages,
	)); ?>
</div>
<?php get_footer(); ?>