<?php
// dd functions

if (!function_exists('dd')) {
    function dd($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit();
    }
}


define('TEST_THEME_NAME', 'turaco');


//***********************************


//***********************************


add_filter('show_admin_bar', '__return_false');


//*********************************
// add theme set up
//*********************************


function myThemeSetUp()
{
//    register mani menu
    $menus = array(
        'top-menu' => 'top'
    );
    register_nav_menus($menus);
// register


    // add_theme_support
    add_theme_support('tile-tag');
    add_theme_support('post-thumbnails');   // for show post_thumbnails
    add_theme_support('custom-header');


    add_image_size('main-thumbnials', 200, 133);
//    add_image_size('main-thumbnials', 130, 75); // smaller


}


//*********************************
// end theme set up
//*********************************


function add_responsive_slider_assets()
{
    // styles
    wp_register_style('owl.carousel.min.css', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_register_style('owl.theme.default.min.css', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_register_style('animate.css', get_template_directory_uri() . '/css/animate.css');
    wp_register_style('all.min.css', get_template_directory_uri() . '/css/all.min.css');

    wp_enqueue_style('owl.theme.default.min.css');
    wp_enqueue_style('owl.carousel.min.css');
    wp_enqueue_style('animate.css');
    wp_enqueue_style('all.min.css');

    // scripts

    wp_register_script('owl.carousel.min.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery.min.js'), '2.1.4', true);
    wp_enqueue_script('owl.carousel.min.js');


    // غیر فعال کردن jquery خود وردپرس با wp_deregister_script()

    // یکی از کاربردهای این دستور غیر فعال کردن یک فایل از یک قالب است
    // که نمخواهیم آنرا تغییر داده یا حذف کنیم

//    wp_deregister_script('jquery');


    wp_register_script('jquery.min.js', get_template_directory_uri() . '/js/jquery.min.js', '', '', true);
    wp_enqueue_script('jquery.min.js');


//    if (!is_admin()) {
//        wp_register_script('jquery_google', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', null, '', true);
//        wp_enqueue_script('jquery_google');
//
//    }


////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
// ajax
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////


// برای ارسال فایل ajax باید درخواست ها به این فایل ارسال شود
// http://localhost/wordpress/wp-admin/admin-ajax.php
//  که خروجی یک عدد 0 میباشد به صورت پیشفرض
// از آنجا که آدرس دامین عوض میشود ما باید این آدرس را به صورت داینامیک وارد کنیم


//    wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery.min.js'), '', true);
//    wp_enqueue_script('main-js');


    wp_register_script('main-js', get_template_directory_uri() . '/js/myMain.js', array('jquery.min.js'), false, true);
    wp_enqueue_script('main-js');

// با استفاده از تابع زیر و انتساب آن به فایل myMain.js میتوان داده های
    // موجود در آرایه شی مورد نظر را در فایل myMain.js فراخوانی کرد

    // نکته اینکه در این آرایه دیتاهای حساس قرار داده نشود
    wp_localize_script('main-js', 'obj_ajax',
        array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'myDigit' => 2323,
            'name' => 'aboozar hoseini',
            'currentUserId' => wp_get_current_user()->ID,
            'current_user_name' => wp_get_current_user()->data->user_login,
        )
    );


}

add_action('after_setup_theme', 'myThemeSetUp');

add_action('wp_enqueue_scripts', 'add_responsive_slider_assets');




// کلیه فایلهای مربوط به ایجکس اینجاست
include_once get_template_directory() . '/inc/ajax.php';

include_once get_template_directory() . '/inc/custom-post-type.php';


//view functions
function testTheme_set_post_meta($id)
{
    if (intval($id)) {
        $current_post_view = testTheme_get_post_meta($id);
        update_post_meta($id, 'view', $current_post_view + 1);
    }

}

function testTheme_get_post_meta($id)
{
    if (intval($id)) {
        $current_post_view = get_post_meta($id, 'view', true);
        return intval($current_post_view);
    }
    return 0;
}

















