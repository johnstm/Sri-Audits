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

<section class="sa__contactwrapper">
 

<img src="<?php echo get_template_directory_uri().'/assets/images/sqaure-two-left.png'; ?>" id="grid1" alt="grid"/>
<img src="<?php echo get_template_directory_uri().'/assets/images/three-sqaure.png' ; ?>" id="grid2" alt="grid"/>

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

    $location =  get_template_directory_uri().'/assets/images/location.png' ; 
    $arrow = get_template_directory_uri().'/assets/images/direction.png' ;

     echo '<div id="addressCard'.$i.'" class="card">

                <div  class="card__location" > 
                    <img class="sa__directions-pin" src="'.$location.'" alt="map pin"  />
                    
                    <h6 class="sa__directions-place">'.$placeName.'</h6>
                    <address class="sa__directions-address paragraphs ">
                    '.$addressVal.  '
      
                </address>
 
                </div>


                <a target="__blank" href="'.$directionsLink.'" class="d-none d-md-block sa__directions-place    sa__directions-place--url paragraphs">
                         Get Directions 
                        <img src="'.$arrow.'"   alt="arrow"/> 
                </a>
          
                <div class="d-block d-md-none"> 
                    <div class="d-flex align-center sa__contact-phone">
                        <img src="'.$phone_icon.'" alt="phone"  class="" >
                        <p >'.$phoneNumber.'</p>
                    </div>
                    <div class="d-flex align-center sa__contact-email">
                        <img src="'.$email_icon.'" alt="email" class="" >
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
                $phone_icon = get_template_directory_uri().'/assets/images/phone.png';
                $email_icon = get_template_directory_uri().'/assets/images/email.png';
                    echo '
                        <div class="card">
                            <div class="d-flex align-center sa__contact-phone">
                                <img src="'.$phone_icon.'" alt="phone"  class="" >
                                <a href="tel:'.$phoneNumber.'" class="contact-icons">
                                <p class="paragraphs">'.$phoneNumber.'</p>
                                </a>
                            </div>
                            <div class="d-flex align-center sa__contact-email">
                                <img src="'.$email_icon.'" alt="email" class="" >
                                <a href="mailto:'.$emailId.'" class="contact-icons">
                                <p class="paragraphs">'.$emailId.'</p>
                                </a>
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

      $phone_icon = get_template_directory_uri().'/assets/images/phone.png';
      $email_icon = get_template_directory_uri().'/assets/images/email.png';
    
 
     echo '<div id="addressCard'.$i.'" class="card">

                <div  class="card__location" > 
                <img class="sa__directions-pin" src="'.$location.'" alt="map pin"  />
                    
                    <h6 class="sa__directions-place">'.$placeName.'</h6>
                    <address class="sa__directions-address paragraphs ">
                    '.$addressVal.  '
      
                </address>
 
                </div>


                <a target="__blank" href="'.$directionsLink.'" class=" d-md-block sa__directions-place    sa__directions-place--url paragraphs">
                         Get Directions 
                        <img src="'.$arrow.'"   alt="arrow"/> 
                </a>

                <div class="d-block sa__contact-number"> 
                    <div class="d-flex align-center sa__contact-phone">
                        <img src="'.$phone_icon.'"  alt="phone"  class="" >
                        <a href="tel:'.$phoneNumber.'" class="contact-icons">
                        <p class="paragraphs">'.$phoneNumber.'</p>
                        </a>
                    </div>
                    <div class="d-flex align-center sa__contact-email">
                        <img src="'.$email_icon.'"  alt="email" class="" >
                        <a href="mailto:'.$emailId.'" class="contact-icons">
                          <p>'.$emailId.'</p>
                        </a>
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