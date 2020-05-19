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

	<section class="intro">

	
	</section>



</main>

<?php

get_footer();