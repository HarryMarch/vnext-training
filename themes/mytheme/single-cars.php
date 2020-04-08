<?php get_header(); ?>

<div <div class="container">
    <h1>
        <?php the_title(); ?> 
    </h1>
    <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" 
        class="img-fluid mb-3 img-thumbnail">
    <?php endif; ?>

    <div class="row">
        <div class="col-6">
            <?php get_template_part('includes/section', 'cars'); ?>
            <?php wp_link_pages(); ?>
        </div>
        <div class="col-6">
        </div>
    </div>  

</div>

<?php get_footer(); ?> 