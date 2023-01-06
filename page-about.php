<?php
/*
 * Template Name: About Page
 */
get_header();

?>
<style>
   

    @media screen and (min-width:768px){

    }


    @media screen and (min-width:992px){

    }
</style>

<main id="maincontent" role="main" >

<?php   get_template_part('template-parts/main-banner') ; ?>

<p class="sa__about-who main-heading">Who we are</p>



<section class="sa__about1wrapper">


<div class="contentwrapper">
    <div class="sa__about-textcontent1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two.jpg" class="sa__about-img"/>
        <div class="textblock1 paragraphs">
            <?php  $textcontent1 = get_field('text_block_1') ;
                    if($textcontent1)
                      echo $textcontent1 ; 
             ?>
        </div>
        <?php 
            $imgcontent1 = get_field('image_block_1');
         ?>
        <div class="sa__about-right">
        <img src="<?php if( $imgcontent1) echo $imgcontent1["url"] ?>" alt="<?php echo  $imgcontent1["alt"] ?>"  class="image1"/>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two-left.png" class="sa__about-leftImage" />
         
</div>

    </div>
</div>

<div class="contentwrapper">
    <div class="sa__about-textcontent2">
 
        <div class="textblock1 paragraphs">
            <?php  $textcontent2 = get_field('text_block_2') ;
                    if($textcontent2)
                      echo $textcontent2 ; 
             ?>
        </div>
        <?php 
            $imgcontent2 = get_field('image_block_2');
         ?>
        <div class="sa__about-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two.jpg" class="sa__about-rightImage"/>
        <img src="<?php if( $imgcontent2) echo $imgcontent2["url"] ?>" alt="<?php echo  $imgcontent2["alt"] ?>"  class="image1"  />
</div>
    </div>
</div>

</section>

<section class="sa__ourmission">
    <div class="sa__ourmission-wrap">
       
        <div>
            <?php $image3 = get_field('image_block_3'); ?>
            <img src="<?php if($image3)echo $image3["url"] ; ?>" alt="<?php echo $image3["alt"]; ?>" class="sa__ourmission-image" />
        </div>
        <div class="sa__ourmission-aim">
            <span class="t1 paragraphs">What We aim</span> 
       
            <p class="t2 main-heading">Our Mission </p>
           
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two-left.png" class="sa__ourmission-sqaure" />
         
            <p class="t__3 d-flex align-center">
                <span class="d-flex justify-center">S</span> erve with Quality
            </p>
            <p class="t__3 d-flex align-center">
                <span class="d-flex justify-center">R</span> elaibility
            </p>
            <p class="t__3 d-flex align-center">
                <span class="d-flex justify-center">I</span> ntegrity
            </p>
            <p class="t__3 d-flex align-center">
                <span class="d-flex justify-center">C</span> ommitment , dedication & devotion to profession
            </p>
            <p class="t__3 d-flex align-center">
                <span class="d-flex justify-center">A</span>dherence to Professional Standard and ethical values.
            </p>
            <p class="t__3 d-flex align-center">
                <span class="d-flex justify-center">S</span> ocial and economic commitment
            </p>
        </div>

    </div>
</section>

<!-- Our Team -->

<section class="sa__our-team">
        <h3 class="sa__about-who team__h3 main-heading" >Our Team</h3>

        <div class="contentwrapper sa__teammembers-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meshg.png" class="sa__team-sqaure sa__gallery-sqaure" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meshg.png" class="sa__team-sqaure-bottom sa__gallery-sqaure" />
             <?php
                $i=1 ;
                $plus_icon = get_template_directory_uri().'/assets/images/plus.png';  ; 

                while(true){
                    $mem_img = get_field("cardimg_$i");
                    $mem_name = get_field("cardname_$i");
                    $mem_des = get_field("carddesignation_$i");
                    $mem_content = get_field("card_contents_$i");

                    if(!$mem_img || !$mem_name || !$mem_des || !$mem_content){
                        break;
                    }

                    echo 
                    '<div class="sa__member-card">
                        <div class="sa__card-front">
                            <img class="sa__member-img" alt="member" src="'.$mem_img['url'].'">
                            <div class="sa__team-details">
                            <h4 class="sa__member-name">'.$mem_name.'</h4>
                            <h6 class="sa__member-degree">'.$mem_des.'</h6>
                            </div>
                            <img  id="" src="'.$plus_icon.'" alt="click" class="sa__plusicon sa__cardexpand" width="20" height="20" >
                        </div>
    
    
                        <div class="d-none sa__card-contents">
                        <div class="sa__team-details">
                            <h4 class="sa__member-name">'.$mem_name.'</h4>
                            <h6 class="sa__member-degree">'.$mem_des.'</h6>
                        </div>
                            <p class="sa__member-bio">
                                '.$mem_content.'
                            </p>
                        </div>
                     </div>';

                    $i++ ; 
                }
            ?>
            
        </div>

</section>

<section class="sa__gallery-wrapper gallery-about">
    
    <p class="sa__about-who main-heading gallery-heading"> Gallery </p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meshg.png" class="sa__gallery-sqaure" />
    <div class="contentwrapper">

        <div class="splide__track">
            <div class="splide__list">
                <?php
                    $i=1 ;

                    while(true){
                        $slide = get_field("gallery_slide_$i");
                        
                        if(!$slide){
                            break;
                        }

                        echo '<div class="gallery__img">'.
                             '<img src="'.$slide["url"].'" alt="'.$slide["alt"].'" class="gallery__imgslide" >'.
                             '</div>';

                        $i++ ;
                    }
                ?>
            </div>
        </div>

    </div>

  
</section>



<?php

    if(have_posts()):
 		while(have_posts()):the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile;
           else: ?>
    <?php _e("not posts found","wp_posts") ?>
    <?php endif ; ?>


</main>
<script>
var $carousel = $('.splide__list');

var settings = {
  dots: false,
  arrows: true,
  slide: '.gallery__img',
  slidesToShow: 5,
  slidesToScroll:1,
  infinite:true,

  responsive: [
    {
      breakpoint: 1300,
      settings: {
        
        slidesToShow: 4
      }
    },
    {
      breakpoint: 992,
      settings: {
        
        slidesToShow: 3
      }
    },
    {
      breakpoint: 767,
      settings: {
        
        slidesToShow: 2
      }
    },
 

]
};


$carousel.slick(settings);




</script>


<?php
get_footer();
?>
