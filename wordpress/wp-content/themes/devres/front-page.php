<?php get_header(); ?>
<section class="banner">
    <div class="bannerbox">
        <img class="bannerimg" src="<?= get_field('banner_top_img')['url']; ?>" alt="">
        <div class="bannertitle">
            <h2 class="subtitle"> <?= get_field('banner_top_subtitle'); ?> </h2>
            <h1 class="main-title"> <?= get_field('banner_top_main_title'); ?> </h1>
            <a href="<?= get_field('banner_top_link')['url']; ?>"> &horbar;&horbar; <?= get_field('banner_top_link')['title']; ?> </a> 
        </div>
    </div>
    <div class="cards">
        <div class="cardbox boxshadow">
                <img src="<?php get_field('banner_top_cards_icon');?>" alt="quality-food-icon"/>
                <div>
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_cards_title_icon' );?></h5>  
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_cards_text_icon' );?>.</p>
                </div>
            </div>

            <div class="cardbox boxshadow">
                <img src="<?php get_field('banner_top_cards_icon_2');?>" alt="quality-delivery-icon"/>
                <div>
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_cards_title_icon_2' );?></h5>  
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_cards_text_icon_2' );?>.</p>
                </div>
            </div>

            <div class="cardbox boxshadow">
                <img src="<?php get_field('banner_top_icon_3');?>" alt="original-recipes-icon"/>
                <div>
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_cards_title_icon_3' );?></h5>  
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_cards_text_icon_3' );?>.</p>
                </div>
            </div>
        </div>

</section>

<section class="intro">

    <img class="introimg" src="<?= get_field('intro_image')['url']; ?>" alt="">

    <div class="introtext boxshadow">
        <p class="title"> <?= get_field('intro_title'); ?> </p>
        <p class="subtitle"> <?= get_field('intro_subtitle'); ?> </p>
        <p> <?= get_field('intro_text'); ?> </p>
        <p class="signature">
            <p class="subtitle"> <?= get_field('intro_signature'); ?> </p>
        </p>
    </div>

    <img class="introhatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">

</section>

<?php get_template_part('parts/restaurants') ?>
<?php get_template_part('parts/discover-menu') ?>
