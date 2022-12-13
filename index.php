<?php

  get_header();

?>

<main id="site-content" role="main">


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


<?php


	if (is_front_page())
	      ;
	else
	echo "not Front page" ;
?>
<h1>
	<?php $h1title = get_field('h1__home');
	   if($h1title)
		   echo $h1title;
		else
			echo "Fallback content"; 
	   ?>
	</h1>
</main><!-- #site-content -->


<?php
get_footer();

?>
 