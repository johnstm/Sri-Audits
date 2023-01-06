

<section  >

<?php
 $banner = get_field('main_banner');
?> 
 <div class="sa__bannerwrapper">
    <img src="<?php
     if($banner):
        echo $banner['url'];
     endif;
    ?>" class=" d-md-block sa__banner-img" alt="<?php echo $image['alt']; ?>" />
    
    <div class="sa__herotextwrapper">
    <h1 class="sa__banner-h1">
        <?php echo get_field('h1_title') ?>
    </h1>
    
    <p class="sa__banner-p1"><?php echo get_field('hero_banner_subtext') ;?> </p>
   </div>
</div>
</section>

