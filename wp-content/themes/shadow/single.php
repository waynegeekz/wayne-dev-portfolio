<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
?>


<main id="default-article" class="site-main article" role="main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_type() );

	endwhile;
	?>

</main>


<?php
get_footer();