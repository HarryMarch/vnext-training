<?php get_header();?>

<section class="page-wrap">
	<div class="container">

		<section class="row">
			<div class="col-lg-3">

				<?php if(is_active_sidebar('blog-sidebar')):?>
					<?php dynamic_sidebar('blog-sidebar');?>
				<?php endif;?>

			</div>	
			<div class="col-lg-9">		

				<!-- Show category of these posts -->
				<h1><?php echo single_cat_title();?></h1>

				<!-- Show all posts with template section-archive -->
			    <?php get_template_part('includes/section','archive'); ?>

			    <!-- Show pagination with next, previous button -->
			    <?php previous_posts_link();?>
			    <?php next_posts_link();?>


			    

				<!-- Show pagination with numbers, next, previous button -->
			    <!--<?php
			    	/*global $wp_query;

			    	$big = 999999999;

			    	echo paginate_links( array(
			    		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			    		'format' => '?page=%#%',
			    		'current' => max(1, get_query_var('paged')),
			    		'total' => $wp_query->max_num_pages
			    	) );*/
			    ?>-->
			</div>
		</section>
	</div>
</section>



<?php get_footer();?>