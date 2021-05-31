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

<div class="greyhatch">
<div class="">
    <p class="discoverrestaurant"> Discover our franchise </p>
    <p class="ourrestaurant"> Our restaurants </p>
   
        

<?php
   
    $args = array(
    'category_name' => 'Restaurant',
    
            
    );
    $the_query = new WP_Query( $args );
    
    
    $restaurant = get_field("3_restaurants");
    $i = 0;
    foreach ($restaurant AS $article){

    if ($i == 0){
        $i++;
?>

<div class="container-fluid  d-flex justify-content-center the-chef">
    
        <div class="card story">
            <div class="card-body story-card-right shadow p-3 mb-5 ">
                <h5 class="card-title discover-title"><?php echo $article["subtitle"];?></h5>
                <h6 class="card-subtitle story-title"><?php echo $article ["title"];?></h6>
                <p class="card-text story-text"><?php echo $article ["text"];;?></p>
                <p class="d-flex justify-content-center">
                    <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">More infos !!!!</button></a>
                </p>
            </div>
        </div> <!-- END OF CARD STORY -->
        <img src="<?php echo $article ["img"];?>" class="resto-img col-lg-6  col-sm-12" /> 
    </div> <!-- END OF THE CHEF -->
   
   
    <?php 
    
    } else {  
        
        ?>
    
    <div class="">
        <img src="<?php echo $article ["img"];?>" class="resto-img"/> 
            <div class="card story">
                <div class="card-body story-card shadow p-3 mb-5 ">
                    <h5 class="card-title discover-title"><?php echo $article["subtitle"];?></h5>
                    <h6 class="card-subtitle story-title"><?php echo $article["title"];?></h6>
                    <p class="card-text story-text"><?php echo $article["text"];?></p>
                    <p class="d-flex justify-content-center">
                        <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">More lol infos</button></a>
                    </p>
                </div>
            </div> <!-- END OF CARD STORY -->       
    </div> 

    <?php 
      $i=0;
}
} 
  
    ?>


        <?php ?>

        <?php get_template_part('template-parts/post/post-recipe') ?>
        <?php get_template_part('template-parts/post/post-recipe-cards') ?>