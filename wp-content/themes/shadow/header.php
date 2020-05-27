<?php
/**
 * The header for the basetheme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="js-page-overlay">

</div>

<header class="header-container">

	<section class="header box box--padding">

		<nav class="header__left box">
			<a href="#" class="header__menu js-btnMenu"><i class="fas fa-bars"></i></a>

			<div class="header__title"><a href="<?php echo site_url();?>"><img class="custom-logo" src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo_websiteWhite.png"" alt="Chris Wayne Comendador Logo"></a></div>
		</nav>

		<nav class="header__right box">

			<?php

				wp_nav_menu( array(
					'theme_location' => 'header',
					'menu_class' => 'menu menu--desktop'
				) );
				
			?>

			<a href="#" class="js-btnSearch"><i class="fa fa-search"></i></a>
			
			<a href="<?php echo site_url();?>/checkout">
				<i class="fa fa-shopping-cart"></i>
			</a>

		</nav>

	</section>

	<?php get_search_form(); ?>

</header>





<div id="js-modalMenu" class="modal">

	<div class="modal__content">
	
		<div class="modal__header box">
			<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo_me.png" alt="">
			<div>
				<p>
					Wayne Comendador
				</p>
				<p>
					Web Developer / Designer
				</p>
			</div>
		</div>

		<div class="modal__nav">

			<ul class="modal__contacts">
				<li>Connect with me at:</li>
				<li><a href=""><i class="fa fa-phone"></i> +639 1630 444 86</a></li>
				<li><a href=""><i class="fas fa-envelope"></i> cwayne.comendador@gmail.com</a></li>
				<li><a href="https://www.fb.me/waynegeekz"><i class="fab fa-facebook"></i> fb.me/waynegeekz</a></li>
				<li><a href="https://www.linkedin.com/in/chris-wayne-comendador-7bb3854a/"><i class="fab fa-linkedin"></i> @chriswaynecomendador</a></li>
			</ul>
				
			<hr>

			<?php 
				wp_nav_menu( array(
					'theme_location' => 'header',
					'menu_class' => 'menu modal__menu',

				) );

			?>

			<hr>
			
			<div>

				<a href="#" class="btn btn--primary">I need a website <i class="fas fa-caret-right"></i></a>
			
			</div>

			<div>
			
				<a href="#" class="btn btn--secondary">I need a consultation <i class="fas fa-caret-right"></i></a>
			
			</div>

		</div>

		
	</div>

</div>


<section id="content" class="site-content">
	
