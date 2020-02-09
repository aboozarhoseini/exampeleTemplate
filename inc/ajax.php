<?php


//***********************************************************************
//***************************** test  ***********************************
//***********************************************************************


// افزودن تابع my_action که در فایل myMain.js در بخش data ست شده است
// افزودن یک تابع برای ایجکس


//***********************************************************************
// تابع اکشن برای حالت لاگین و غیر لاگین
//***********************************************************************


// برای حالت لاگین در سایت
add_action('wp_ajax_my_action', 'my_action');
// برای حالت غیر لاگین در سایت
add_action('wp_ajax_nopriv_my_action', 'my_action2');


function my_action()
{
//     با متد post که در فایل myMain.js تنظیم شده به مقادیر دست پیدا میکنیم
    $user_id = ($_POST['user_id']);
    $user_name = $_POST['user_name'];
    $user_digit = $_POST['digit'];
    $user_full_name = $_POST['full_name'];
    $user_birth = $_POST['birth'];
    echo 'user id is : ' . $user_id .
        PHP_EOL . 'user name is : ' . $user_name .
        PHP_EOL . 'name is : ' . $user_full_name .
        PHP_EOL . 'myDigigt is : ' . $user_digit .
        PHP_EOL . 'myBirth is  : ' . $user_birth;
    wp_die();
}

function my_action2()
{
//     با متد post که در فایل myMain.js تنظیم شده به مقادیر دست پیدا میکنیم
    $user_id = ($_POST['user_id']);
    $user_name = $_POST['user_name'];
    //    echo $user_id ;
    echo 'this is not login';
    wp_die();
}


//***********************************************************************
//***********************************************************************
//***********************************************************************


add_action('wp_ajax_like_action', 'like_action');

function like_action()
{
    $id = 352;
    testTheme_set_like_post_meta($id);
    echo testTheme_get_like_post_meta($id);
    wp_die();
}

?>