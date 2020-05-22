
<?php
/*
Template Name: Checkout Page
Template Post Type: page
*/
get_header();
?>

<main id="checkout" class="site-main box--padding">

    <h3>Let's Get Started</h3>

    <p>Do not worry. We will not charge you in this transaction. I will get in touch with you as soon as you send this form.</p>

    <?php echo do_shortcode('[contact-form-7 id="44" title="Get Started"]');?>      

</main>

<?php
get_footer();