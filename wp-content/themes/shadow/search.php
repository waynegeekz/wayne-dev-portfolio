<?php
/**
 * The template for displaying search results pages
 *
 */

get_header();
?>

<main id="page-category" class="site-main" role="main">

	<section class="posts">
		<?php 
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Search Results: <?php echo get_search_query(); ?></h1>
			</header>

			<hr>

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article>
					
					<div class="post__breadcrumbs">

						<a href="#>">Home</a> <i class="fas fa-caret-right"></i> <?php echo get_the_category_list(" <i class='fas fa-caret-right'></i> ", ""); ?>

					</div>

					<h3>
					
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					
					</h3>
					
					<hr class="hr-bar">

					<div class="post__details">Written by <?php the_author() ?> on <?php the_time('F j, Y') ?> </div>

					<?php the_post_thumbnail('cat-thumb', ['class'=>'responsive']);?>
					
					<div class="entry">

						<?php the_excerpt(); ?>
					
					</div>

					<a href="<?php the_permalink();?>" class="btn btn--primary">Read More <i class="fas fa-caret-right"></i></a>

				</article>

				<hr>
				

			<?php endwhile;
		
		else: ?>

			<h4 class="fill-space">
				Sorry, but nothing matched when we searched for (<?php echo get_search_query(); ?>)</div>
			</h4>
		
		<?php
		endif;
		?>

	</section>

	<?php 
        sd_custom_pagination(
            [
                'prev_text' => __( '»', 'textdomain' ), 
                'next_text' => __( '«', 'textdomain' )
            ]
        );
    ?>
	

</main>

<?php
get_footer();