<?php
/**
 * Enqueue scripts and styles.
 * 
 * @package myportfolio
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @since 1.0.0
 * 
 */

// Enqueue Normalize.css
function add_normalize_CSS() {
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');

// Theme Setup
if ( ! function_exists( 'myportfolio_theme_setup' ) ) {
    function myportfolio_theme_setup() {
        load_theme_textdomain( 'myportfolio', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support('custom-logo');
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form', 
            'comment-list', 
            'gallery', 
            'caption' 
        ) );
        add_theme_support( 'customized-selective-refresh-widgets' );
        add_theme_support( 'responsive-embeds' );

        // Register Navigation Menu
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'myportfolio' ),
            'footer'  => esc_html__( 'Footer', 'myportfolio' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'myportfolio_theme_setup' );


function custom_portfolio_items( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ( $query->is_post_type_archive( 'portfolio' ) ) {
            $query->set( 'posts_per_page', 6 ); // Set the number of posts per page here
        }
    }
}
add_action( 'pre_get_posts', 'custom_portfolio_items' );

// Custom Post Type & Taxonomy for Portfolio
function create_portfolio_function() {
    $labels = array(
        'name'               => __( 'Portfolio', 'myportfolio' ),
        'singular_name'      => __( 'Portfolio', 'myportfolio' ),
        'add_new'            => __( 'Add New Portfolio', 'myportfolio' ),
        'add_new_item'       => __( 'Add New Portfolio Item', 'myportfolio' ),
        'edit_item'          => __( 'Edit Portfolio', 'myportfolio' ),
        'new_item'           => __( 'New Portfolio', 'myportfolio' ),
        'all_items'          => __( 'All Portfolios', 'myportfolio' ),
        'view_item'          => __( 'View Portfolio', 'myportfolio' ),
        'search_items'       => __( 'Search Portfolio', 'myportfolio' ),
        'not_found'          => __( 'No Portfolio found', 'myportfolio' ),
        'not_found_in_trash' => __( 'No Portfolio found in trash', 'myportfolio' ),
        'menu_name'          => __( 'Portfolios', 'myportfolio' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    );

    $labels = array(
        'name'                       => __( 'Portfolio Categories', 'myportfolio' ),
        'singular_name'              => __( 'Portfolio Category', 'myportfolio' ),
        'search_items'               => __( 'Search Portfolio Categories', 'myportfolio' ),
        'all_items'                  => __( 'All Portfolio Categories', 'myportfolio' ),
        'edit_item'                  => __( 'Edit Portfolio Category', 'myportfolio' ),
        'update_item'                => __( 'Update Portfolio Category', 'myportfolio' ),
        'add_new_item'               => __( 'Add New Portfolio Category', 'myportfolio' ),
        'new_item_name'              => __( 'New Portfolio Category Name', 'myportfolio' )
    );

    register_taxonomy( 'portfolio_category', 'portfolio', array(
        'hierarchical' => true,
        'labels'       => $labels,
        'show_ui'      => true,
        'query_var'    => true,
        'rewrite'      => array( 'slug' => 'portfolio-category' ),
    ) );

    register_post_type( 'portfolio', $args );
    flush_rewrite_rules();
}
add_action( 'init', 'create_portfolio_function' );

// Enqueue Scripts and Styles
function myportfolio_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600;700&display=swap', array(), '1.0', 'all' );
    
    // Enqueue Bootstrap CSS    
    wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '5.3.3', 'all' );
    
    // Enqueue Line Awesome CSS
    wp_enqueue_style('line-awesome', get_stylesheet_directory_uri() . '/assets/css/line-awesome.min.css');
    
    // Enqueue Main CSS
    wp_enqueue_style( 'myportfolio', get_stylesheet_uri(), array(), '1.0', 'all' );
    
    // Enqueue Bootstrap JS File
    wp_enqueue_script( 'bootstrap', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array(), 'v5.3.3', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
}
add_action( 'wp_enqueue_scripts', 'myportfolio_scripts' );

// Custom Read More Text
function myportfolio_excerpt_readmore( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'myportfolio_excerpt_readmore' );

// Custom Excerpt Length
function myportfolio_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'myportfolio_custom_excerpt_length', 999 );

// AOS Animation
function add_aos_animation() {
    wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.css', false, null);
    wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js', false, null, true);
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js', array( 'AOS' ), null, true);
}
add_action( 'wp_enqueue_scripts', 'add_aos_animation' );

