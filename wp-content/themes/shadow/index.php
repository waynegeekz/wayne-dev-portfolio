<?php
/**
 * The main template file
 */

get_header();
?>


<main id="main" class="site-main" role="main">

	<a href="#" class="btn btn--primary">I need a website <i class="fas fa-caret-right"></i></a>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_type() );

	endwhile;

	the_posts_pagination( array(
		'prev_text' => __( 'Previous page' ),
		'next_text' => __( 'Next page' ),
	) );

endif;
?>

<pre>
ad
asd
asd
asd
asd
asd
as
date_subdas
das
das
da
sd
asasd
asd
as
date_subsda
ad
asd
asd
asd
asd
asd
as
date_subdas
das
das
da
sd
asasd
asd
as
date_subsda
ad
asd
asd
asd
asd
asd
as
date_subdas
das
das
da
sd
asasd
asd
as
date_subsda
ad
asd
asd
asd
asd
asd
as
date_subdas
das
das
da
sd
asasd
asd
as
date_subsda
ad
asd
asd
asd
asd
asd
as
date_subdas
das
das
da
sd
asasd
asd
as
date_subsda


</pre>


</main>

<?php
get_sidebar();
get_footer();