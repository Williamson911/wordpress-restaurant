<!-- display the four cards recipe
to use it somewhere put between php tags:  get_template_part('template-parts/post/post-recipe-cards'); -->

<section class="recipe-cards">
    <?php
    $the_query = new WP_Query(array(
        'category_name' => 'recipe',
        'posts_per_page' => 5,
    ));
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="card-deck" style="padding: 0 2%; margin: 1% 0;">
                <div class="card" style="width: 20%;">
                    <img class="card-img-top" src=<?= get_field('banner_top_single_recipe_image_single_recipe')['sizes']['medium']; ?>>
                    <div class="card-body">
                        <p>
                            <?= get_the_date('F j, Y'); ?>
                        </p>
                        <h5 class="card-title">
                            <?= get_the_title(); ?>
                        </h5>
                        <p class="card-text">
                            <?= get_field('banner_top_single_recipe_description_single_recipe'); ?>
                        </p>
                        <a class="card-link" href=<?= get_permalink(); ?>>
                            ....Read more
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php __('No News'); ?></p>
    <?php endif; ?>
</section>