<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
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

						<div class="d-none" id="hamburgerSide" onclick="hamBurger(this ,'hamburgerMenu');" style="display:grid ; place-items:end;margin:10px;" >
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

	
