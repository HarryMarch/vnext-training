<?php get_header();?>

<section class="page-wrap">
	<div class="container">

			

				<!-- Show category of these posts -->
				<h1>Search Results for '<?php echo get_search_query();?>'</h1>

				<!-- Show all posts with template section-archive -->
			    <?php get_template_part('includes/section','searchresults'); ?>

			    <!-- Show pagination with next, previous button -->
			    <?php previous_posts_link();?>
			    <?php next_posts_link();?>


	</div>
</section>



<?php get_footer();?>