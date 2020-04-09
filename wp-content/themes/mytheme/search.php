<?php get_header(); ?>

<div <div class="container">  
    <div class="col-lg-9">
        <h1>
            Search Result '<?php echo get_search_query(); ?>'
        </h1>
        <?php get_template_part('includes/section', 'searchresults'); ?>

        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</div>

<?php get_footer(); ?> 

<?php 
/**
    <?php 
        global $wp_query;
        $big = 99999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query -> max_num_pages
        ));
    ?>
 */
?>
