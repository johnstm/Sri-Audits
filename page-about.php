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

<p class="sa__about-who">Who we are</p>

<section class="sa__about1wrapper">
<img src="" alt="grid" class="">

<div class="contentwrapper">
    <div class="sa__about-textcontent1">
        <div class="textblock1">
            <?php  $textcontent1 = get_field('text_block_1') ;
                    if($textcontent1)
                      echo $textcontent1 ; 
             ?>
        </div>
        <?php 
            $imgcontent1 = get_field('image_block_1');
         ?>
         <div class="image1"  >
        <img src="<?php if( $imgcontent1) echo $imgcontent1["url"] ?>" alt="<?php echo  $imgcontent1["alt"] ?>"  />
</div>
    </div>
</div>

<div class="contentwrapper">
    <div class="sa__about-textcontent2">
        <div class="textblock1">
            <?php  $textcontent2 = get_field('text_block_2') ;
                    if($textcontent2)
                      echo $textcontent2 ; 
             ?>
        </div>
        <?php 
            $imgcontent2 = get_field('image_block_2');
         ?>
        <img src="<?php if( $imgcontent2) echo $imgcontent2["url"] ?>" alt="<?php echo  $imgcontent2["alt"] ?>"  class="image1"  />
    </div>
</div>

</section>

<section class="sa__ourmission">
    <div class="sa__ourmission-wrap">
       
        <div>
            <?php $image3 = get_field('image_block_3'); ?>
            <img src="<?php if($image3)echo $image3["url"] ; ?>" alt="<?php echo $image3["alt"]; ?>" class="" />
        </div>
        <div class="sa__ourmission-aim">
            <span class="t1">What We aim</span> 

            <p class="t2">Our Mission </p>

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
        <h3 class="sa__about-who team__h3" >Our Team</h3>

        <div class="contentwrapper sa__teammembers-wrapper">
            
            <div class="sa__member-card">
                <div class="sa__card-front">
                    <img class="sa__member-img" alt="member" src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/09/member1.jpg">

                    <p class="sa__member-name">CA. R. Srinivasan</p>
                    <p class="sa__member-degree">B.Com.FCA, DISA (Partner)</p>

                    <img  id="" src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/08/plus.jpg" alt="click" class="sa__plusicon sa__cardexpand" width="20" height="20" >
                </div>


                <div class="d-none sa__card-contents">
                    <p class="sa__member-name">CA. R. Srinivasan</p>
                    <p class="sa__member-degree">B.Com.FCA, DISA (Partner)</p>

                    <p class="sa__member-bio">
                         Bachelor of Commerce and Fellow member of Institute of Chartered Accountants of India.
                    <br>
                         Also qualified Intermediate of Cost and Works Accountancy and Diploma Holder in Public Relations & Advertising, Labour Laws and Administrative Laws.
                    <br>
                        Commenced practice as partner of M/s. Warrier & Warrier for a short period.
                    </p>
                </div>
            </div>


            <div class="sa__member-card">
                <div class="sa__card-front">
                    <img class="sa__member-img" alt="member" src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/09/member1.jpg">

                    <p class="sa__member-name">CA. R. Srinivasan</p>
                    <p class="sa__member-degree">B.Com.FCA, DISA (Partner)</p>

                    <img src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/08/plus.jpg" alt="click" class="sa__plusicon sa__cardexpand" width="20" height="20" >
                </div>

                <div class="d-none sa__card-contents">
                    <p class="sa__member-name">CA. R. Srinivasan</p>
                    <p class="sa__member-degree">B.Com.FCA, DISA (Partner)</p>

                    <p class="sa__member-bio">
                         Bachelor of Commerce and Fellow member of Institute of Chartered Accountants of India.
                    <br>
                         Also qualified Intermediate of Cost and Works Accountancy and Diploma Holder in Public Relations & Advertising, Labour Laws and Administrative Laws.
                    <br>
                        Commenced practice as partner of M/s. Warrier & Warrier for a short period.
                    </p>
                </div>
            </div>

        </div>

</section>

<section class="sa__gallery-wrapper">
    <img src="" alt="grid" class="grid_square1" />

    <p class="sa__about-who"> Gallery </p>

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

    <a href="#" class="sa__gallery-expand"><p class="text-center"> View Gallery</p></a>
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

<?php
get_footer();
?>

  