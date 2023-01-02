<?php
/*
 * Template Name: Service Page
 */
get_header();
?>
<style>
   
   
  
   

   @media screen and (min-width:768px){
     

   }

   @media screen and (min-width:992px){
       
   }

  @media screen and (min-width:1300px){
     .layer1{
      max-width:1200px; 
     }

  }

</style>
<main id="maincontent" role="main" >

    <!-- Banner Image -->

<?php  

   get_template_part('template-parts/main-banner' );

?>
 
<section class="sa__serviceswrapper">
 
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two-left.png" id="grid1" alt="grid"/>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/three-sqaure.png" id="grid2" alt="grid"/>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/three-sqaure.png" id="grid3" alt="grid"/>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sqaure-two-left.png" id="grid4" alt="grid"/>


   <?php 
        
        $i = 1 ; 

        while(true){
      
         $serviceIcons = get_field("service_icon_$i");
         $serviceTitle = get_field("service_title_$i");
         $serviceSubtext = get_field("service_subtext_$i"); 

            if( $serviceIcons === false or
            strlen($serviceTitle) === 0 or 
            strlen($serviceSubtext) === 0  ){
              // echo "here" ;
            break ;
          }


          echo '<div class="sa__servicecomponent-wrapper">
                    <div id="layer-'.$i.'" class="layer1">
                      
                      <div class="leftside">
                        <img src="'.$serviceIcons["url"].'" alt = "tax" width="43" height="43" >
                        <h3 class="sa__service-title">'.$serviceTitle.'</h3>
                      </div>
                     
                      <div class="rightside">
                        <div class="sa__service-accordion">
                           <p class="sa__service-accordion-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit quis elit risus. Vestibulum fring... 
                           </p>

                           <p id="subtext-'.$i.'" class="d-none sa__service-accordion-text ">'.$serviceSubtext.'</p>
                        </div>
                          <img id="plusicon-'.$i.'" src="<?php echo get_template_directory_uri(); ?>/assets/images/plus.png" alt="plus icon" class="sa__plusicon" width="28" height="28" onclick="accordion_active('.$i.')"  >
                      </div>   
                    
                    </div>

               </div>
                
               ';
          $i++; 
        }
       
   ?>

  <!-- <div class="sa__servicecomponent-wrapper">
    
     <div id="layer-1" class="layer1"> 
        
        <div class="leftside">
            <img src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/08/search.jpg" alt = "tax" width="43" height="43" >
            <h3 class="sa__service-title">System & audit</h3>
        </div>

        <div class="rightside">
            <div class="sa__service-accordion">
                <p class="sa__service-accordion-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit quis elit risus. Vestibulum fringilla eget velit at vestibulum quis leo congue.</p>
                <p id="subtext-1" class="d-none"> ww che cosa stai facendo </p>
            </div>
            <img src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/08/plus.jpg" alt="plus icon" width="28" height="28" onclick="accordion_active(1)"  >
        </div>


     </div>

  </div> 

  <div class="sa__servicecomponent-wrapper">
    
     <div id="layer-2" class="layer1"> 
        
        <div class="leftside">
            <img src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/08/search.jpg" alt = "tax" width="43" height="43" >
            <h3 class="sa__service-title">System & audit</h3>
        </div>

        <div class="rightside">
            <div class="sa__service-accordion">
                <p class="sa__service-accordion-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit quis elit risus. Vestibulum fringilla eget velit at vestibulum quis leo congue.</p>
                <p id="subtext-2" class="d-none"> ww che cosa stai facendo </p>
            </div>
            <img src="http://127.0.0.1:8080/wordpress/wp-content/uploads/2022/08/plus.jpg" alt="plus icon" width="28" height="28" onclick="accordion_active(2)"  >
        </div>


     </div>

  </div>  -->

</section>

 <?php $text = get_field('service_icon_1') ;
    // echo var_dump($text);
    // echo var_dump(get_field('service_subtext_1'));
   ?>

</main>

<?php
get_footer();
?>

