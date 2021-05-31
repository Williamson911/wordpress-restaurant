<?php get_header();

if (in_category('recipe')) {

    //display post recipe
    get_template_part('template-parts/post/post-recipe');
    get_template_part('template-parts/post/post-recipe-cards');
} else {

    //display post restaurant
    the_field('banner_top_about');
}; ?>

<section>
    <?php get_footer(); ?>
</section>