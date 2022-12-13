<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
    
<title><?php
       wp_title($sep='');
         ?></title>   
   
		<?php wp_head(); ?>

	</head>

	<body <?php //body_class(); ?>>

		<?php
		wp_body_open();
		?>

	<header  class="" role="banner">

		<div class="contentwrapper">
			<div class="sa__navmenu">
			
			    <div class="logo-wrap">
					<a href="/" >
						<?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							}
						?>
					</a>
				</div>

				<div class="sa__navmenu-main" >
					
					<div class="hamburger d-md-none" id="hamburgerMenu" onclick="hamBurger(this , 'hamburgerSide');" >
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>

					<div class="d-md-block sa__navmenu-right" id="mobilemenu">

						<div class="d-md-none" id="hamburgerSide" onclick="hamBurger(this ,'hamburgerMenu');" style="display:grid ; place-items:end;margin:10px;" >
							<div class="bar1"></div>
							<div class="bar2"></div>
							<div class="bar3"></div>
						</div>
						<div class="sa__navmenu-right-wrapper">
						<?php
						
							$menu = wp_get_nav_menu_items('Header Menu');
						
							if ($menu) {
								for ($i=0 ; $i<count($menu); $i++) {
								
									echo '<a href='.$menu[$i]->url.' class="sa__navmenu-anch">
										<button class="d-none d-md-block sa__navmenuitem'.'">'.
										$menu[$i]->title.
										'</button><span class="d-md-none">'.$menu[$i]->title.'</span></a>' ;
								}
							}

						?>
						</div>
					</div>
				</div>

			</div>
	    </div>

	</header>

	
