<?php get_header();?>

<section class="page-wrap">
	<div class="container">

		<!-- Show the title of this post -->
		<h1><?php the_title() ?></h1>


		<!-- Show the thumbnail of this post -->
		<?php if(has_post_thumbnail()):?>

			<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail"> 

		<?php endif;?>

		<div class="row">
			<div class="col-lg-6">
				<!-- Show this post with template section-blogcontent -->
			    <?php get_template_part('includes/section','cars'); ?>

			    <!-- Show all page numbers of this post -->
			    <?php wp_link_pages();?>
			</div>
			<div class="col-lg-6">

			</div>
		</div>

		

	    
	</div>
</section>



<?php get_footer();?>