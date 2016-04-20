<?php

    // Theme Scripts & Styles
    function theme_scripts() {
        wp_enqueue_style( 'main', get_stylesheet_uri() );
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Bitter:700' );
        wp_deregister_script('jquery'); 
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), true, '1.11.3');
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );

    // Theme Options
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }

    // Add title tag to <head> section
    add_theme_support( 'title-tag' );

    if ( ! function_exists( '_wp_render_title_tag' ) ) :
        function theme_slug_render_title() {
            return '<title>' . wp_title( '|', true, 'right' ) . '</title>';
        }
        add_action( 'wp_head', 'theme_slug_render_title' );
    endif;
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    // Add Read More link to excerpt
    function new_excerpt_more($more) {
        global $post;
        return '<br><br><a class="button" href="'. get_permalink($post->ID) . '">' . 'More Info' . '</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');


    // Add Featured Image support
    add_theme_support( 'post-thumbnails' );

    // Custom Menus
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    ));

    function my_login_logo() { ?>
        <style type="text/css">
            body.login div#login h1 a {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/forge-logo.png);
                background-size: 320px;
                width: 100%;
                height: 220px;
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>