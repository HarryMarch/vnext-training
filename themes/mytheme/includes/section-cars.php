<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

    <?php 
        $tags = get_the_tags();
        if($tags):
        foreach($tags as $tag):
    ?>
    <a href="<?php echo get_tag_link($tag -> term_id);  ?>" class="badge badge-success" >
            <?php echo $tag -> name; ?>
    </a>
    <?php endforeach; endif; ?>

    <?php
        $categories = get_the_category();
        foreach($categories as $category):
    ?>
        <a href="<?php echo get_category_link($category -> term_id); ?>">
            <?php echo $category -> name ?>
        </a>
    <?php endforeach; ?>

    <p>
        <?php echo get_the_date('d/m/Y - h:i:s'); ?>
    </p>

    <?php
        //comments_template();
    ?>

<?php endwhile; else : endif ?>