<?php
// theme supports
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('post-thumbnails');

// define variables
define('TEMPLATES_BLOCKS', dirname(__FILE__) . '/template-parts/blocks/');

// Inlcude registered blocks
include('inc/register-blocks.php');
// register nav menus

function mytheme_register_nav_menu()
{
    register_nav_menus(array(
        'primary_menu' => __('Primary', 'nav-menu'),

    ));
}
add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);

// add styles/srcipts

function theme_scripts()
{
    wp_enqueue_style('compiled-styles', get_template_directory_uri() . '/dist/build/main.min.css', array(), rand(1, 999));
    wp_enqueue_script('animations', get_stylesheet_directory_uri() . '/src/js/animations.js');
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/src/js/app.js');
}
add_action('wp_enqueue_scripts', 'theme_scripts');


// add widget area
function register_widget_areas()
{

    register_sidebar(array(
        'name'          => 'Footer area one',
        'id'            => 'footer_area_one',
        'description'   => 'This widget area discription',
        'before_widget' => '<div class="footer-area footer-area-one">',
        'after_widget'  => '</div>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ));

    register_sidebar(array(
        'name'          => 'Footer area two',
        'id'            => 'footer_area_two',
        'description'   => 'This widget area discription',
        'before_widget' => '<div class="footer-area footer-area-two">',
        'after_widget'  => '</div>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ));

    register_sidebar(array(
        'name'          => 'Footer area three',
        'id'            => 'footer_area_three',
        'description'   => 'This widget area discription',
        'before_widget' => '<div class="footer-area footer-area-three">',
        'after_widget'  => '</div>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ));

    register_sidebar(array(
        'name'          => 'Footer area four',
        'id'            => 'footer_area_four',
        'description'   => 'This widget area discription',
        'before_widget' => '<div class="footer-area footer-area-three">',
        'after_widget'  => '</div>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ));
}

add_action('widgets_init', 'register_widget_areas');


// SVG Support 
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
}
add_action('admin_head', 'fix_svg');


function acf_wysiwyg_remove_wpautop()
{
    remove_filter('acf_the_content', 'wpautop');
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');
