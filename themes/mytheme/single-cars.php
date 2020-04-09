<?php get_header(); ?>

<div <div class="container">
    <h1>
        <?php the_title(); ?> 
    </h1>
    <?php if(has_post_thumbnail()): ?>
        <div class="gallery">
            <a href="<?php the_post_thumbnail_url('blog-large'); ?>">
                <img src="<?php the_post_thumbnail_url('blog-large'); ?>" 
                    alt="<?php the_title(); ?>" 
                class="img-fluid mb-3 img-thumbnail">
            </a>
        </div>
    <?php endif; ?>

    <?php 
        $gallery = get_field('gallery');
        if($gallery):?>
            <div class="gallery mb-5">
                <?php foreach($gallery as $image) :?>
                    <a href="<?php echo $image['sizes']['blog-large'];?>">
                        <img src="<?php echo $image['sizes']['blog-small'];?>" 
                            class="img-fluid img-thumbnail">
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>   

    <div class="row">
        <div class="col-6">
            <?php get_template_part('includes/section', 'cars'); ?>
            <?php wp_link_pages(); ?>
        </div>
        <div class="enquiry_form">
            <?php gravity_form(1, 'Enquire about this car', null, false, 
                ['rego' => get_field('registration')], true, 100, true) ?>
            <ul>
                <li>
                    Color: <?php the_field('color'); ?>
                </li>
                <li>
                    Registration: <?php the_field('registration'); ?>
                </li>
            </ul>
            <h3>Features</h3>
            <ul>
                <?php if(have_rows('features')): ?>
                    <?php
                        while(have_rows('features')): the_row();
                        $feature = get_sub_field('feature');
                    ?>
                        <li>
                            <?php echo $feature; ?>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>     
        </div>
    </div>  

</div>

<?php get_footer(); ?> 