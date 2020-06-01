<?php

 /**
 * Disable the emoji's
 */
function basetheme_disable_emojis()
{
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'basetheme_disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'basetheme_disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'basetheme_disable_emojis' );


/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function basetheme_disable_emojis_tinymce( $plugins )
{
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}


/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function basetheme_disable_emojis_remove_dns_prefetch( $urls, $relation_type )
{

    if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }

    return $urls;

}



/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );


/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'cat-thumb', 1024, 520, array( 'center', 'center' ) );

/*
 * Add Site Logo Support
 */
function shadow_custom_logo_setup() {
    add_theme_support( 'custom-logo');
}
add_action( 'after_setup_theme', 'shadow_custom_logo_setup' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',

) );


/** 
 * Include primary navigation menu
 */
function basetheme_nav_init()
{

	register_nav_menus( array(
        'header' => 'Header',
        'footer' => 'Footer'
	) );

}
add_action( 'init', 'basetheme_nav_init' );


/**
 * Register widget area.
 *
 */
function basetheme_widgets_init()
{

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'basetheme_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function basetheme_scripts() {

    //DEREGISTER SCRIPTS
    wp_deregister_script('jquery');
    wp_deregister_script( 'wp-embed' );

	wp_enqueue_style( 'basetheme-style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/vendor/jquery/jquery-3.5.1.min.js' );
	wp_enqueue_script( 'basetheme-scripts', get_template_directory_uri() . '/assets/js/app.js' );


    $datatoBePassed = array (
        'isHome' =>  is_home()? 'true' : 'false',
        'theme_dir' => get_template_directory_uri()
    );

    wp_localize_script( 'basetheme-scripts', 'PHPVARS', $datatoBePassed );

}
add_action( 'wp_enqueue_scripts', 'basetheme_scripts' );


// function rjs_lwp_contactform_css_js() {
//     global $post;
//     if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'contact-form-7') ) {
//         wp_enqueue_script('contact-form-7');
//          wp_enqueue_style('contact-form-7');

//     }else{
//         wp_dequeue_script( 'contact-form-7' );
//         wp_dequeue_style( 'contact-form-7' );
//     }
// }
// add_action( 'wp_enqueue_scripts', 'rjs_lwp_contactform_css_js');

add_filter('wpcf7_autop_or_not', '__return_false');


function sd_custom_pagination($args = [], $class = 'pagination') {

    if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

    $args = wp_parse_args( $args, [
        'mid_size'           => 2,
        'prev_next'          => false,
        'prev_text'          => __('Older posts', 'textdomain'),
        'next_text'          => __('Newer posts', 'textdomain')
    ]);

    $links     = paginate_links($args);
    $next_link = get_previous_posts_link($args['next_text']);
    $prev_link = get_next_posts_link($args['prev_text']);
    $template  = apply_filters( 'sd_custom_pagination_markup_template', '
    <nav class="navigation %1$s" role="navigation">
        <div class="nav-links">
            %4$s
            <div class="page-numbers-container">%3$s</div>
            %2$s
        </div>
    </nav>', $args, $class);

    echo sprintf($template, $class, $prev_link, $links, $next_link);

}