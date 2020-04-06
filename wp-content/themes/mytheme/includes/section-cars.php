<?php if (have_posts()) : while (have_posts()) : the_post();?>

	

	<!-- Show the content -->
	<?php the_content();?>

	

	<!-- Show the tags -->
	<?php 
		$tags = get_the_tags();
		if($tags):
		foreach ($tags as $tag):?> 

			<a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
				<?php echo $tag->name;?>
			</a>
	
	<?php endforeach; endif;?>

	<!-- Show category -->
	<?php
		$categories = get_the_category();
		foreach ($categories as $cat):?> 		
			<a href="<?php echo get_category_link($cat->term_id);?>">	
				<?php echo $cat->name;?>
			</a>
	
	<?php endforeach;?>

	<!-- Show date of post -->
	<p><?php echo get_the_date('l jS F, Y');?></p>

	<!-- Show comment section -->
	<?php //comments_template();?>

<?php endwhile; else: endif; ?>