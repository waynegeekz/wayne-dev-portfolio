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
			<a class="btn" href="<?php echo site_url();?>/cart/?package=Single%20Page%20Site"><i class="fas fa-handshake"></i>Get Started Now</a>
			<ul class="package__features">
				<li><i class="fa fa-calendar"></i>&plusmn; 5 days delivery</li>
				<li><i class="fas fa-laptop-code"></i>Fully Mobile Responsive</li>
				<li><i class="fas fa-pen-nib"></i>SEO Optimized Website</li>
				<li><i class="fa fa-tools"></i>Website Maintenance (1 month)</li>
			</ul>
		</div>

		<div class="package">

			<i class="package__popular"><div>POPULAR</div></i>
			
			<h4>SME's Choice</h4>
			
			<div class="package__price">$900</div>
			
			<p>
				Multi-page CMS website with forms, image galleries, and social media integration.
			</p>
			
			<a class="btn btn--primary" href="<?php echo site_url();?>/cart/?package=SME's%20Choice"><i class="fas fa-handshake"></i>Get Started</a>
			
			<ul class="package__features">
				<li><i class="fa fa-calendar"></i>&plusmn; 4 weeks delivery</li>
				<li><i class="fas fa-laptop-code"></i>Fully Mobile Responsive</li>
				<li><i class="fas fa-pen-nib"></i>SEO Optimized Website</li>
				<li><i class="fa fa-tools"></i>Website Maintenance (3 months)</li>
				<li>
					<i class="fas fa-chart-line"></i>
					Google Analytics 
					<i class="fa fa-info-circle tooltip">
						<span>
							Track how your visitors use your website by integrating Google Analytics.
						</span>
					</i>
				</li>
				<li>
					<i class="fab fa-wordpress"></i>
					Content Management System 
					<i class="fa fa-info-circle tooltip">
						<span>
							Publish posts, pages, and create online forms with integrated wordpress content sanagement system. Update your site content without coding!
						</span>
					</i>
				</li>
				<li><i class="fab fa-facebook-messenger"></i>Live Chat (3 months)</li>
			</ul>
			
		</div>

		<div class="package">

			<h4>Ecommerce Pro</h4>
			
			<div class="package__price">$1,600</div>
			
			<p>
				Setup your online store and do business transactions safely.
			</p>
			
			<a class="btn" href="<?php echo site_url();?>/cart/?package=Ecommerce%20Pro"><i class="fas fa-handshake"></i>Get Started</a>
			
			<ul class="package__features">
				<li><i class="fa fa-calendar"></i>&plusmn; 8 weeks delivery</li>
				<li><i class="fas fa-laptop-code"></i>Fully Mobile Responsive</li>
				<li><i class="fas fa-pen-nib"></i>SEO Optimized Website</li>
				<li><i class="fa fa-tools"></i>Website Maintenance (6 months)</li>
				<li>
					<i class="fas fa-chart-line"></i>
					Google Analytics 
					<i class="fa fa-info-circle tooltip">
						<span>
							Track how your visitors use your website by integrating Google Analytics.
						</span>
					</i>
				</li>
				<li>
					<i class="fab fa-wordpress"></i>
					Content Management System 
					<i class="fa fa-info-circle tooltip">
						<span>
							Publish posts, pages, and create online forms with integrated wordpress content sanagement system. Update your site content without coding!
						</span>
					</i>
				</li>
				<li><i class="fab fa-facebook-messenger"></i>Live Chat (3 months)</li>
				<li>
					<i class="fas fa-shopping-cart"></i>
					Ecommerce
					<i class="fa fa-info-circle tooltip">
						<span>
							Sell products and manage your online store by integrating ecommerce on your website.
						</span>
					</i>
				</li>
				<li>
					<i class="fas fa-envelope"></i>
					Business Email Setup
					<i class="fa fa-info-circle tooltip">
						<span>
							Configure Email Hosting Services such GSuite or Outlook.
						</span>
					</i>
				</li>
				<li>
					<i class="fas fa-database"></i>
					Site Backups 
					<i class="fa fa-info-circle tooltip">
						<span>
							Monthly backup service for 6 months to get you ready in case of data failure or malicious attacks.
						</span>
					</i>
				</li>
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