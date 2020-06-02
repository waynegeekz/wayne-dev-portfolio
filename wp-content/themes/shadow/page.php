<?php
/**
 * The template for displaying all pages
 *
 */

get_header();
?>

<main id="default-page" class="site-main article">

	<?php
	while ( have_posts() ) : the_post(); ?>


	<article id="post-<?php the_ID(); ?>" class="entry">

		<header class="entry-header">
			
			<?php the_post_thumbnail('cat-thumb', ['class'=>'responsive']);?>

			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<hr class="hr-bar">

			<div class="post__details"><?php the_excerpt();?></div>

		</header>

		<hr>

		<div class="entry-content">

			<?php the_content(); ?>

		</div>


	</article>

		
	<?php
	endwhile; 
	?>

</main>

<?php
get_footer();