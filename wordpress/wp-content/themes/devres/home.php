<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />

<?php get_header();

$args = array(
    'post_type' => 'post',
    'category_name' => 'recipe',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query($args);
if ($result->have_posts()) : ?>
    <?php while ($result->have_posts()) : $result->the_post(); ?>
        <div class="row blog-recipe" style="border: 1px solid black; margin: 2%; display: flex;">
            <div class="col col-img">
                <img class="recipe-img" src=<?= get_field('banner_top_single_recipe_image_single_recipe')['sizes']['medium']; ?>>
            </div>
            <div class="col">
                <p>
                    <?= get_the_date('F j, Y'); ?>
                </p>
                <p>
                    <?= get_field('banner_top_single_recipe_category_single_recipe'); ?>
                </p>
                <h5 class="recipe-title">
                    <?= get_the_title(); ?>
                </h5>
                <p class="recipe-text">
                    <?= get_field('banner_top_single_recipe_description_single_recipe'); ?>
                </p>
                <a class="recipe-link" href=<?= get_permalink(); ?>>
                    ....Read more
                </a>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif;
wp_reset_postdata(); ?>

<?= get_template_part('template-parts/post/post-recipe-cards'); ?>

<section>
    <?php get_footer(); ?>
</section>