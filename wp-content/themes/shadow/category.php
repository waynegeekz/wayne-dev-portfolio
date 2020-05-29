<?php

get_header(); ?> 
 
<main id="page-category" class="site-main" role="main">

    
    <header class="category-header">
    
        <h3 class="category-title"><?php single_cat_title(); ?></h3>

        <?php

        if ( category_description() ) : ?>
            
        <?php echo category_description(); ?>

        <?php endif; ?>

    </header>

    <hr>

    <section class="posts">

    <?php 

    if ( have_posts() ) :

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
    
    <?php 
    
    endwhile; // End Loop

    else: ?>
    
        <p>Sorry, no posts matched your criteria.</p>
    
    <?php endif; ?>

    </section>
 


</main>
 
<?php 

get_footer();