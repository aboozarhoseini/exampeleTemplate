<?php
if(!function_exists('dd')){
    function dd($string)
    {
        var_dump($string);
        exit();
    }
}
define('TEST_THEME_NAME', 'turaco');

add_theme_support('tile-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-header');



//***********************************


//***********************************






add_filter('show_admin_bar', '__return_false');


function myThemeSetUp()
{
//    register mani menu
    $menus = array(
        'top-menu' => 'top'
    );
    register_nav_menus($menus);
// register

}

function add_responsive_slider_assets()
{
    // styles
    wp_register_style('owl.carousel.min.css',get_template_directory_uri().'/css/owl.carousel.min.css');
    wp_register_style('owl.theme.default.min.css',get_template_directory_uri().'/css/owl.theme.default.min.css');
    wp_register_style('animate.css',get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('owl.theme.default.min.css');
    wp_enqueue_style('owl.carousel.min.css');
    wp_enqueue_style('animate.css');

    // scripts
    wp_register_script('owl.carousel.min.js',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery.min.js'),'2.1.4',true);
    wp_register_script('jquery.min.js',get_template_directory_uri().'/js/jquery.min.js','','',true);
    wp_enqueue_script('owl.carousel.min.js');
    wp_enqueue_script('jquery.min.js');

}

add_action('after_setup_theme', 'myThemeSetUp');

add_action('wp_enqueue_scripts','add_responsive_slider_assets');



include_once get_template_directory().'/inc/custom-post-type.php';
