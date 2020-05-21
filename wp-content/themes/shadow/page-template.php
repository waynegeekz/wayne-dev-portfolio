<?php
/*
Template Name: Pricing Page
Template Post Type: page
*/

get_header();
?>

<main id="pricing" class="site-main">


	<h3>Pricing Plans for Your Business</h3>

	<p>All designs developed are custom made and are not ready made templates available on the market. Delivery time may also vary depending on the design requirements.</p>

	<article class="packages">

		<div class="package">
			<h4>Single Page Site</h4>
			<div class="package__price">$300</div>
			<p>
				Simple one-page website with perfect for service professionals and portfolio.
			</p>
			<a class="btn" href="<?php echo site_url();?>/cart/?package=basic"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
			<ul class="package__features">
				<li><i class="fa fa-check"></i>&plusmn; 5 days delivery</li>
				<li><i class="fa fa-check"></i>Fully Mobile Responsive</li>
				<li><i class="fa fa-check"></i>SEO Optimized Website</li>
				<li><i class="fa fa-check"></i>1 Month Website Maintenance</li>
				<li class="feature--inactive"><i class="fas fa-times"></i>Google Analytics</li>
				<li class="feature--inactive"><i class="fas fa-times"></i>Content Management System</li>
				<li class="feature--inactive"><i class="fas fa-times"></i>Ecommerce Integration</li>
				<li class="feature--inactive"><i class="fas fa-times"></i>Paypal Integration</li>
			</ul>
		</div>

		<div class="package">

			<i class="package__popular"><div>POPULAR</div></i>
			
			<h4>SME's Choice</h4>
			<div class="package__price">$900</div>
			<p>
				Multi-page CMS website with forms, image galleries, and social media integration.
			</p>
			<a class="btn btn--primary" href="<?php echo site_url();?>/cart/?package=sme"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
			<ul class="package__features">
				<li><i class="fa fa-check"></i>&plusmn; 5 days delivery</li>
				<li><i class="fa fa-check"></i>Fully Mobile Responsive</li>
				<li><i class="fa fa-check"></i>SEO Optimized Website</li>
				<li><i class="fa fa-check"></i>3 months website maintenance</li>
				<li><i class="fas fa-check"></i>Google Analytics</li>
				<li><i class="fas fa-check"></i>Content Management System</li>
				<li class="feature--inactive"><i class="fas fa-times"></i>Ecommerce Integration</li>
				<li class="feature--inactive"><i class="fas fa-times"></i>Paypal Integration</li>
			</ul>
		</div>

		<div class="package">
			<h4>E-commerce Package</h4>
			<div class="package__price">$1,600</div>
			<p>
				Setup your online store and do business transactions safely.
			</p>
			<a class="btn" href="<?php echo site_url();?>/cart/?package=ecommerce"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
			<ul class="package__features">
				<li><i class="fa fa-check"></i>&plusmn; 5 days delivery</li>
				<li><i class="fa fa-check"></i>Fully Mobile Responsive</li>
				<li><i class="fa fa-check"></i>SEO Optimized Website</li>
				<li><i class="fa fa-check"></i>6 months Website Maintenance</li>
				<li><i class="fas fa-check"></i>Google Analytics</li>
				<li><i class="fas fa-check"></i>Content Management System</li>
				<li><i class="fas fa-check"></i>Ecommerce Integration</li>
				<li><i class="fas fa-check"></i>Paypal Integration</li>
			</ul>
		</div>


	</article>

	<section class="pricing__inquiry">

		<h3>Not sure which plan is for you? Are you looking for a custom package?</h3>

		<a class="btn btn--secondary" href="<?php echo site_url();?>/consult">I need a consultation (FREE)</a>
	
	</section>


</main>

<?php
get_footer();