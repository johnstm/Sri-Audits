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
     else echo "https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/8/8e/Nidavellir.png/revision/latest?cb=20180517190710&path-prefix=es" ?>
      alt ="Sri audits Chartered Associates"  > 
      
    <div class="wrapper__1">
        <div class="contentwrapper">
            <div class="testo__1">
                <h1>Sridhar & Co Charted Associates</h1>
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
    <img id="mesh2b" src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/09/gridh.jpg" class="d-none d-md-block" alt="east" style=" bottom: 0px;left: 0px;" >


    <div class="sri__welcome-wrapper"> 

            <div class="dummyblock1" > 
            </div>
            
            <div class="dummyblock2" >
            
            </div>
    </div>

    <div class="contentwrapper2">
        <div class="sa__welcome-wrapper">

            <div class="block1">

                <img id="mesh1" src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/09/gridh.jpg" class="d-md-none" alt="east" >

                <div class="sa__welcome-textwrap">
                    <p style=" font-family: var(--font1); border-bottom: 2px solid var(--wine); width: fit-content ; /* padding-bottom: 5px; */ font-size: 22px; margin-bottom: 13px;  line-height: 33px; ">About Us</p>

                    <h2 style="font-family: var(--font3);font-size: 30px;line-height: 36px;color: var(--wine);"> Welcome to Sridhar & Co Chartered Associates</h2>
                </div>

                <img id="mesh2" src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/09/gridh.jpg" class="d-md-none" alt="east" > 
            </div>

            <div class="block2">
                <p >
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

    <img id="mesh2b" src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/09/gridh.jpg" class="d-none d-md-block" alt="east" style=" bottom: 0px;left: 0px;" >

</section>

<!-- todo : what we aim  -->

<section class="sa__ourmisssion">
    <div class="container3">

        <div class="dummyblock1">
            <?php $missionImage  = get_field('our_mission_image') ?>

            <img src="<?php if($missionImage) echo $missionImage["url"] ; ?>" alt="out mission " class="sa__ourmission-featureimage" >
            
        </div>

        <div class="dummyblock2 sa__ourmission-aim">
            <span class="t1">What We aim</span> 

            <p class="t2">Our Mission </p>

            <p class="t__3 d-flex align-center">
                <div class="d-flex justify-center">S</div> erve with Quality
            </p>
            <p class="t__3 d-flex align-center">
                <div class="d-flex justify-center">R</div> elaibility
            </p>
            <p class="t__3 d-flex align-center">
                <div class="d-flex justify-center">I</div> ntegrity
            </p>
            <p class="t__3 d-flex align-center">
                <div class="d-flex justify-center">C</div> ommitment , dedication & devotion to profession
            </p>
            <p class="t__3 d-flex align-center">
                <div class="d-flex justify-center">A</div>dherence to Professional Standard and ethical values.
            </p>
            <p class="t__3 d-flex align-center">
                <div class="d-flex justify-center">S</div> ocial and economic commitment
            </p>
        </div>

    </div>
</section>


<!-- tood : what we do  -->
<section class="sa__ourservices">

 <div class="sa__p1"> What we do</div>

 <h3 class="sa__h3">
   Our Services
 </h3>

 <p class="sa__p-subtext">
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
<?php
get_footer();
?>