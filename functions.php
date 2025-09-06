<?php 

// Basic Setup
function wpstarter_setup() {
    load_theme_textdomain( 'wpstarter', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'wpstarter_setup' );

// Register Nav Menu
function wpstarter_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'wpstarter' ),
    ) );
}
add_action( 'after_setup_theme', 'wpstarter_register_nav_menu', 0 );

// CSS & JS
function wpstarter_scripts() {
    // CSS
	// wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    // JS
	// wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js', array(), '5.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'wpstarter_scripts' );

// Pagination
function wpstarter_pagination() {
    global $wp_query;
      $big = 999999999; // need an unlikely integer
        echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_text' => '«',
		'next_text' => '»'
    ) );
}

// Tailwind classes for content
function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwind-styles', get_template_directory_uri() . '/dist/output.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

//function mytheme_add_tailwind_classes($content) {
    //if (is_singular() && in_the_loop() && is_main_query()) {
        // Add Tailwind classes to <p> tags
        // $content = preg_replace('/<p([^>]*?)>/', '<p$1 class="my-4 text-lg/8 font-inter">', $content);
		//$content = preg_replace('/<a([^>]*?)>/', '<a$1 class="border-b-gray-200 dark:border-b-gray-600 border-b-2 border-dashed transition hover:bg-gray-200 dark:hover:bg-gray-600">', $content);
    //}
    //return $content;
//}
//add_filter('the_content', 'mytheme_add_tailwind_classes');
