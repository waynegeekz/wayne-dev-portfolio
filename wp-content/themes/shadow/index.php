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

			<a href="<?php echo site_url();?>/cart" class="btn btn--primary anim-zoom" >I need a website <i class="fa fa-caret-right"></i></a>

			<a href="<?php echo site_url();?>/cart" class="btn btn--secondary" >I need a consultation (FREE) <i class="fa fa-caret-right"></i></a>
	
		</div>

	</section>

	<section class="intro box">



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
		
		
			<h3>I am a professional <span>website developer</span> and a UX/UI designer.</h3>
			
			<p>
				Hello! My name is Chris Wayne Comendador. I'm a strong communicator. I am fond of making website ideas come to life and surely I want that for your business too.
			</p>

			<p>
				Let me help you make a strong online presence by designing a beautiful and professional website that will convert your audience into customers.
			</p>

			<a href="<?php echo site_url();?>/cart" class="btn btn--primary">I need a website <i class="fa fa-caret-right"></i></a>
		

		</section>




	</section>


	<section class="process box--padding">

		<header class="process__title">

			<section class="title__left">

				<h3>How do i create your website?</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquya.</p>
			
			</section>
			
			<a href="#" class="btn btn--primary">Learn More About The Process <i class="fa fa-caret-right"></i></a>

		</header>

		<hr>

		<section class="process__steps">

			<div class="steps__box">
				<img src="<?php echo bloginfo('template_url')?>/assets/images/icon_define.png" alt="Chris Wayne Comendador define icon">
				<h4>Define and Ideate</h4>
				<p>Websites help you grow your business. Understanding what your clients need on your website will help us create a better user experience for everyone.</p>
			</div>

			<div class="steps__box">
				<img src="<?php echo bloginfo('template_url')?>/assets/images/icon_prototype.png" alt="Chris Wayne Comendador prototype icon">
				<h4>Prototype your idea</h4>
				<p>It's not just about typography and nice color schemes, it's about making the experience easier and more convenient for your customers. </p>
			</div>

			<div class="steps__box">
				<img src="<?php echo bloginfo('template_url')?>/assets/images/icon_deploy.png" alt="Chris Wayne Comendador deploy icon">
				<h4>Train and Deploy</h4>
				<p>At this stage, your theme will be developed according to the project timeline. Application Deployment is included in all the package.</p>
			</div>

		</section>


	</section>

	
	<section class="promotion">
			
			<div>
				<img src="<?php echo bloginfo('template_url');?>/assets/images/gallery_promotion.png" alt="website development">
			</div>			

			<aside>
				
				<h3>Let's create your <span>professional<span> <span>website</span></h3>
				
				<p>
					Let's win the web space by creating stunning website design that can help you reach your digital marketing goals.
				</p>

				<p>
					Let's win the web space by creating stunning website design that can help you reach your digital marketing goals. With my experience and training on content marketing and web development, I'm ready to help you build your website idea.
				</p>
			
				<a class="btn btn--primary" href="<?php echo site_url();?>/pricing">I need a website <i class="fa fa-caret-right"></i></a>
				
			</aside>

		</section>

		<hr>

		<section class="clients box--padding">

			<div class="clients__info">

				<h3>Recent Clients</h3>

				<div class="hr-bar"></div>

				<p>
					My experience is working mainly with clients in education and tourism industry.
				</p>

				<p>
				Learn how to I can help you create beautiful yet powerful websites that can convert your audience into customers.
				</p>
				
				<a class="btn btn--secondary" href="<?php echo site_url();?>/consult">I need a consultation (FREE) <i class="fa fa-caret-right"></i></a>

			</div>

			<aside class="clients__gallery">

				<div class="clients__box">

					<div class="client">
						<img src="<?php echo bloginfo('template_url');?>/assets/images/logo_uc.png" alt="Unviversity of Cebu Logo">
					</div>

					<div class="client">
						<img src="<?php echo bloginfo('template_url');?>/assets/images/logo_epicparctanay.png" alt="Epic Parc Tanay Logo">
					</div>

					<div class="client">
						<img src="<?php echo bloginfo('template_url');?>/assets/images/logo_cite.png" alt="CITE Logo">
					</div>

					<div class="client">
						<img src="<?php echo bloginfo('template_url');?>/assets/images/logo_gotravelwisely.png" alt="Go Travel Wisely Logo">
					</div>

				</div>

			</aside>



		</section>

</main>

<?php

get_footer();