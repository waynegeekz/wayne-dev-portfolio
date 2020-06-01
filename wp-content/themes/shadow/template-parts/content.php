<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" class="entry">


	<header class="entry-header">

		<div class="post__breadcrumbs">
			<a href="#>">Home</a> <i class="fas fa-caret-right"></i> <?php echo get_the_category_list(" <i class='fas fa-caret-right'></i> ", ""); ?>
		</div>
		
		<?php the_post_thumbnail('cat-thumb', ['class'=>'responsive']);?>

		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<hr class="hr-bar">

		<div class="post__details">Written by <?php the_author() ?> on <?php the_time('F j, Y') ?> </div>

	</header>

	<?php echo do_shortcode('[mashshare]');?>

	<div class="entry-content">

		<?php the_content(); ?>

	</div>


</article>