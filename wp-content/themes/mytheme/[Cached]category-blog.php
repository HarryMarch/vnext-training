<?php get_header();?>

<section class="page-wrap">
	<div class="container">

		<!-- Show category of these posts -->
		<h1><?php echo single_cat_title();?></h1>

		<!-- Show all posts with template section-archive -->
	    <?php get_template_part('includes/section','archive'); ?>

	    <!-- Show pagination with next, previous button -->
	    <?php previous_posts_link();?>
	    <?php next_posts_link();?>

	</div>
</section>



<?php get_footer();?>