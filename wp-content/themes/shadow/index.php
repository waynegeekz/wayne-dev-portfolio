<?php
/**
 * The main template file
 */

get_header();
?>


<main id="main" class="site-main" role="main">

	<section class="jumbotron">

		<h3 class="jumbotron__header">Website Done Right</h3>

		<p class="jumbotron__description">Creating a website is a great way to jump start in scaling your business. I can help you build the right website you are looking for. Let's turn your idea into a reality.</p>

		<div class="jumbotron__links">

			<a href="<?php echo site_url();?>/cart" class="btn btn--primary" >I need a website <i class="fa fa-caret-right"></i></a>

			<a href="<?php echo site_url();?>/cart" class="btn btn--secondary" >I need a consultation (FREE) <i class="fa fa-caret-right"></i></a>
	
		</div>

	</section>

	<section class="intro box--padding">



		<section class="intro__img">
			

			<div class="intro__circle">

				<div class="circles-container">

					<div class="circle__img">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/logo_wordpress.png" " alt="Wordpress Logo">
					</div>

					<div class="circle__img">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/logo_yoast.png" " alt="Yoast SEO Logo">
					</div>
					
					<div class="circle__img">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/logo_analytics.png" " alt="Google Analytics Logo">
					</div>

					<div class="circle__img">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/logo_woo.png" " alt="WooCommerce Logo">
					</div>

					<div class="circle__img">
						<img src="<?php echo bloginfo('template_url')?>/assets/images/logo_w3.png" " alt="W3 Total Cache Logo">
					</div>

				</div>					

			</div>

			<img class="intro__profimage" src="<?php echo bloginfo('template_url')?>/assets/images/logo_me.png" alt="Chris Wayne Comendador">


		
		</section>


		<section class="intro__description">
		
		
			<h3>I am a professional <span>wordpress theme developer</span> and a UX/UI designer.</h3>
			
			<p>
				Hello! My name is Chris Wayne Comendador. I'm a strong communicator. I am fond of making website ideas come to life and surely I want that for your business too.
			</p>

			<p>
				Let me help you make a strong online presence by designing a beautiful and professional website that will convert your audience into customers.
			</p>

			<a href="<?php echo site_url();?>/cart" class="btn btn--primary">I need a website <i class="fa fa-caret-right"></i></a>
		

		</section>




	</section>



</main>

<?php

get_footer();