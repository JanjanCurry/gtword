<?php get_header();  ?>

<main>
		<h2 class="page-heading">Contact Us</h2>
			
<section>

<?php 

 while (have_posts()) {
 	the_post();

	?>
<div class="card">
		
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