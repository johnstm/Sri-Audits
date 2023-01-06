<?php
get_header();
?>

<main id="maincontent" role="main" >

 <!-- 
    otpauth://totp/app.kalashnikov.test%3Alocaladmin%40example.com?issuer=app.kalashnikov.test&secret=PJUWK43PNBYXKOLROVSWKY3IGN2GQ2LLMFUHI2DPONUHKMDFMVXHKOLKN5UGOMLWMF4TMZDFOVWDOZTJMVRWQYLJGNUXK23PNBRWQNDPNBRDG5LJHF3WS5LUGRXXG2DPNBYGQ5LOMU3W633TNAZHC5LFNFWWKZLWMVSWO2BSMVUWOOLLN5UHO33PHBUGC2LSMFUHS33ROVQWQ ' 
-->

<!--  Banner section  -->
<section class="sa__herocontent">
    
    <?php $bannerimg = get_field('landingbanner'); ?>
    <img class="sa-home__banner" src=<?php
     if($bannerimg)
        echo $bannerimg["url"]; 
      ?>
      alt ="Sri audits Chartered Associates"  > 
      
    <div class="wrapper__1">
        <div class="contentwrapper">
            <div class="testo__1">
                <h1>Sridhar & Co Chartered Accountants</h1>
                <p>Coming together is beginning, Keeping together is Progress, Working together is Success</p>
                <a href="/contact">
                    <button>
                    Contact Us
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- todo : welcome to  -->


<section class="sa__welcometosri">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two.jpg" class="sa__welcome-topImage"/>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two.jpg" class="sa__welcome-img"/>

    <div class="sri__welcome-wrapper"> 

            <div class="dummyblock1" > 
            </div>
            
            <div class="dummyblock2" >
            
            </div>
    </div>

    <div class="contentwrapper2">

        <div class="sa__welcome-wrapper">

            <div class="block1">

                <div class="sa__welcome-textwrap">
                    <p style=" font-family: var(--font1); border-bottom: 2px solid var(--wine); width: fit-content ; /* padding-bottom: 5px; */  margin-bottom: 13px;  "class="paragraphs">About Us</p>

                    <h2 style="font-family: var(--font3);color: var(--wine);" class="main-heading"> Welcome to Sridhar & Co Chartered Accountants</h2>
                </div>

              
            </div>

            <div class="block2">
                <p class="paragraphs">
                    <?php $welcometext = 'CA R. Sridhar qualified in 1987, commenced practice in Trivandrum. Later in 1988 he established a firm of Chartered Accountants with its head quarters at Thiruvananthapuram under the name and style of Sri Narayan Associates. In 2004. the name of the firm was changed to Sridhar & Co. 
                    <br><br>
                    We provide all services except public issue of shares and listing of companies and we look forward for an opportunity to extend our experience to these areas also. 
                    <br><br>
                    We aim at assuring quality services to our clients in a professional and ethical manner and to grow further through the growth of our clients.' ;
                    
                    echo $welcometext;
                    ?>
                </p>
            </div>

        </div>
    </div>

</section>

<!-- todo : what we aim  -->



<section class="sa__ourmission">
    <div class="sa__ourmission-wrap">
       
        <div>
            <?php $image3 = get_field('our_mission_image'); ?>
            <img src="<?php if($image3)echo $image3["url"] ; ?>" alt="<?php echo $image3["alt"]; ?>" class="sa__ourmission-image" />
        </div>
        <div class="sa__ourmission-aim">
            <span class="t1 paragraphs">What We aim</span> 
       
            <p class="t2 main-heading" >Our Mission </p>
           
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

<!-- tood : what we do  -->
<section class="sa__ourservices">
 <img class="mesh mesh1" src="<?php echo get_template_directory_uri() . '/assets/images/meshservice.png';   ?>">
 <img class="mesh mesh2" src="<?php echo get_template_directory_uri() . '/assets/images/meshservice.png';   ?>">


 <div class="sa__p1 paragraphs"> What we do</div>

 <h3 class="sa__h3 main-heading">
   Our Services
 </h3>

 <p class="sa__p-subtext paragraphs">
 We have a well equipped team of professionals assisted with other professionals like CWA,<br> MBA and articled clerks, audit trainees and other staff.
 <p>

<div class="contentwrapper sa__servies-gridwrap">

    <?php 
        $i = 1; 

        while(true){
            
            $card_title = get_field("services")["services_title_$i"]  ; //get_field("services[services_title_$i]");
            $card_image = get_field("services")["service_thumbnail_$i"] ; //get_field("services_thumbnail_$i");

            if(!$card_image || !$card_title){
                break ; 
            }

            echo '
            <div class="sa__service-card">
                    <img src="'.$card_image['url'].'" alt="'.$card_title.'" class="sa__service-card-img">
                    <p>'.$card_title.'</p>
            </div>';
            
            $i++ ; 
        }
    ?>
</div>

</section>


<section class="sa__gallery-wrapper">
    
    <p class="sa__about-who main-heading gallery-heading"> Our Team </p>
    
    <div class="contentwrapper teamwrapper">

        <div class="splide__track">
            <div class="splide__list">
                 <?php
                    $i=1 ;

                    while(true){
                        $name = get_field("memname_$i");
                        $designation = get_field("memdes_$i");
                        $m_image =  get_field("memicon_$i");
                        $iconpath = get_template_directory_uri().'/assets/images/member-icon.png'; 

                        if(!$name || !$designation){
                            break;
                        }

                        $placeholder_icon ; 

                        if($m_image)
                        $placeholder_icon = $m_image['url'];
                        else
                        $placeholder_icon = $iconpath ;

                        echo '<div class="sa__team-member">
                                <img src="'.$placeholder_icon.'" class="sa__team-icon"/>
                                <div class="sa__team-details">
                                    <h4>'.$name.'</h4>
                                    <h6>'.$designation.'</h6>
                                </div>
                             </div>
                             ';
                        $i++ ;
                    }
                ?> 
            </div>
        </div>

    </div>

  
</section>
<section class="sa__main">
    <div class="sa__welcometosri">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two.jpg" class="sa__welcome-topImage"/>

<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two.jpg" class="sa__welcome-img"/>


    <div class="sri__welcome-wrapper"> 

            <div class="dummyblock1" > 
            </div>
            
            <div class="dummyblock2" >
            
            </div>
    </div>

    <div class="contentwrapper2">
        <div class="sa__welcome-wrapper">

            <div class="block1">
                <div class="sa__welcome-textwrap">
                    <p style=" font-family: var(--font1); border-bottom: 2px solid var(--wine); width: fit-content ; /* padding-bottom: 5px; */  margin-bottom: 13px; " class="paragraphs">Our Guarantee</p>

                    <h2 style="font-family: var(--font3);color: var(--wine);" class="main-heading"> We are a part of Batgach</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/batgatch.png" class="sa__batgatch-img"/>
                </div>
            </div>

            <div class="block2">
                <p class="paragraphs">
                    <?php $welcometext = 'Batgach is a network of Chartered Accountants firms in major cities of India. Batgach is one of the first network approved by ICAI, India. The founding principle of Batgach is standardization of Professional Work. 
                    <br><br>
                    The foundation of Batgach has ethical standards and timeliness in execution. Batgach & Affiliates – an network approved by Institute of Chartered Accountants of India has a presence across sixteen cities in India. 
                    <br><br>
                    Batgach has a team of 70 partners Chartered Accountants and 700 other professional staff. All affiliate partners has professional expertise in multi-disciplinary fields.' ;
                    
                    echo $welcometext;
                    ?>
                </p>
            </div>

        </div>
    </div>
                </div>
</section>
<!-- flex word :  -->

<?php

    if(have_posts()):
 		while(have_posts()):the_post(); ?>
    <?php the_content() ?>
    <?php endwhile;
     else: ?>
    <?php _e("not posts found","wp_posts") ?>
    <?php
	endif
	?>

</main>
<script>
var $carousel = $('.splide__list');

var settings = {
  dots: false,
  arrows: true,
  slide: '.sa__team-member',
  slidesToShow: 4,
  slidesToScroll:1,
  infinite:true,

  responsive: [
    {
      breakpoint: 1525,
      settings: {
        
        slidesToShow: 3
      }
    },
    {
      breakpoint: 992,
      settings: {
        
        slidesToShow: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        
        slidesToShow: 1
      }
    },
 

]
};

$carousel.slick(settings);

</script>
<?php
get_footer();
?>