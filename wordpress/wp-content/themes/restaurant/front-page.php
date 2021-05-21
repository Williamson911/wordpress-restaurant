<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>style/flexslider.css">
<section class="banner">
    <div class="banner__title">
        <img class="banner__title__img" src="<?= get_field('banner_top_image')['url']; ?>" alt="">
        <img class="banner__title__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">
        <div class="banner__title__text">
            <h2 class="main-subtitle"> <?= get_field('banner_top_main_subtitle'); ?> </h2>
            <h1 class="main-title"> <?= get_field('banner_top_main_title'); ?> </h1>
            <a href="<?= get_field('banner_top_link')['url']; ?>"> &horbar;&horbar; <?= get_field('banner_top_link')['title']; ?> </a> 
        </div>
    </div>
