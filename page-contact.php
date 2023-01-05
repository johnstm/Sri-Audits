<?php
/*
 * Template Name: Contact Page
 */
get_header();
?>

<style>
 #grid2{
    right:0px !important;
    bottom:0px !important ;
    top: initial !important;
 }
</style>

<main id="maincontent" role="main" >

<?php  

get_template_part('template-parts/main-banner' );

?>

<section class="sa__serviceswrapper">
 

<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two-left.png" id="grid1" alt="grid"/>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/three-sqaure.png" id="grid2" alt="grid"/>

 <h3 class="sa__touch main-heading">Get in Touch </h3>

 <!-- For desktops -->
 <div class="sa__addresswrapper">
    <div class="sa__directions-wrapper">

    <?php
   
   $i = 1 ; 
     
   while(true){

    $placeName = get_field("place_name_$i");
    $addressVal = get_field("address_$i"); 
    $directionsLink  = get_field("directions_link_$i"); 
    $phoneNumber = get_field("phone_number_$i"); 
    $emailId = get_field("contact_email_$i");
    
    // var_dump($placeName); 
    // var_dump($addressVal); 
    // var_dump($directionsLink); 
    // var_dump($phoneNumber); 
    // var_dump($emailId);

      if(!$placeName || !$addressVal || !$directionsLink  || !$phoneNumber || !$emailId){
          break;
      }
 
     echo '<div id="addressCard'.$i.'" class="card">

                <div  class="card__location" > 
                    <img class="sa__directions-pin" src="<?php echo get_template_directory_uri(); ?>/assets/images/location.png" alt="map pin"  />
                    
                    <h6 class="sa__directions-place">'.$placeName.'</h6>
                    <address class="sa__directions-address paragraphs ">
                    '.$addressVal.  '
      
                </address>
 
                </div>


                <a target="__blank" href="'.$directionsLink.'" class="d-none d-md-block sa__directions-place    sa__directions-place--url paragraphs">
                         Get Directions 
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direction.png"   alt="arrow"/> 
                </a>
          
                <div class="d-block d-md-none"> 
                    <div class="d-flex align-center sa__contact-phone">
                        <img src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/09/Group-736.png" alt="phone"  class="" >
                        <p >'.$phoneNumber.'</p>
                    </div>
                    <div class="d-flex align-center sa__contact-email">
                        <img src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/09/Group-805.png" alt="email" class="" >
                        <p>'.$emailId.'</p>
                    </div> 
                </div>
            
        </div>'; 

      $i++;
   }
  
  ?> 
    
    </div>
</div>

    <div class="  sa__contactdetails-wrap ">
        <?php 
            $i = 1; 
            while(true){
                $phoneNumber = get_field("phone_number_$i"); 
                $emailId = get_field("contact_email_$i"); 

    //              var_dump($phoneNumber); 
    // var_dump($emailId);
                  
                if( !$phoneNumber || !$emailId){
                    break;
                }
                    echo '
                        <div class="card">
                            <div class="d-flex align-center sa__contact-phone">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" alt="phone"  class="" >
                                <p class="paragraphs">'.$phoneNumber.'</p>
                            </div>
                            <div class="d-flex align-center sa__contact-email">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png" alt="email" class="" >
                                <p>'.$emailId.'</p>
                            </div> 
                        </div>
                      ';
                $i++;
            }
        ?>  
    </div>




    <!-- For mobile phone -->
    <div class="sa__addresswrapper sa__addresswrapper-mobile">
    <div class="sa__directions-wrapper">

    <?php
   
   $i = 1 ; 
     
   while(true){

    $placeName = get_field("place_name_$i");
    $addressVal = get_field("address_$i"); 
    $directionsLink  = get_field("directions_link_$i"); 
    $phoneNumber = get_field("phone_number_$i"); 
    $emailId = get_field("contact_email_$i");
    
    // var_dump($placeName); 
    // var_dump($addressVal); 
    // var_dump($directionsLink); 
    // var_dump($phoneNumber); 
    // var_dump($emailId);

      if(!$placeName || !$addressVal || !$directionsLink  || !$phoneNumber || !$emailId){
          break;
      }
 
     echo '<div id="addressCard'.$i.'" class="card">

                <div  class="card__location" > 
                <img class="sa__directions-pin" src="<?php echo get_template_directory_uri(); ?>/assets/images/location.png" alt="map pin"  />
                    
                    <h6 class="sa__directions-place">'.$placeName.'</h6>
                    <address class="sa__directions-address paragraphs ">
                    '.$addressVal.  '
      
                </address>
 
                </div>


                <a target="__blank" href="'.$directionsLink.'" class=" d-md-block sa__directions-place    sa__directions-place--url paragraphs">
                         Get Directions 
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/direction.png"   alt="arrow"/> 
                </a>

                <div class="d-block sa__contact-number"> 
                    <div class="d-flex align-center sa__contact-phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png"  alt="phone"  class="" >
                        <p class="paragraphs">'.$phoneNumber.'</p>
                    </div>
                    <div class="d-flex align-center sa__contact-email">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png"  alt="email" class="" >
                        <p>'.$emailId.'</p>
                    </div> 
                </div>
        </div>'; 

      $i++;
   }
  
  ?> 
    
    </div>
</div>
</section>


</main>

<?php
get_footer();
?>