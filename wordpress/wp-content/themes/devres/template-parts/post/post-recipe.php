<!-- Display the instructions of the recipe  -->

<section class="banner-top-recipe">
    <h5>
        <?= get_the_title(); ?>
    </h5>
    <a>
        <?= get_field('banner_top_single_recipe_category_single_recipe'); ?>
    </a>
    <p>
        <?= get_field('banner_top_single_recipe_description_single_recipe'); ?>
    </p>
    <img class="image" src=<?php echo get_field('banner_top_single_recipe_image_single_recipe')['sizes']['medium']; ?>>
    <?php wp_reset_postdata(); ?>
</section>

<section class="recipe">
    <p>
        <?= get_field('serving_number'); ?>
    </p>
    <p>
        <?= get_field('preparation_time'); ?>
    </p>
    <h6>
        <?php
        $field = get_field_object('ingredients_single_recipe');
        ?>
        <?= $field['label']; ?>
    </h6>
    <div>
        <?= get_field("ingredients_single_recipe"); ?>
    </div>
    <div class="recipe-instructions">
        <h6>
            <?php
            $field = get_field_object('instructions_single_recipe');
            ?>
            <?= $field['label']; ?>
        </h6>
        <?php
        if (have_rows('instructions_single_recipe')) :
            $i = 1;
            while (have_rows('instructions_single_recipe')) : the_row();
                $sub_value = get_sub_field('instructions_details');
                echo  "<div class ='explanation-block'><span>", $i, "</span>", $sub_value, "</div>";
                $i++;
            endwhile;
        else :
            echo 'error';
        endif;
        ?>
    </div>
</section>