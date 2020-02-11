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


//***********************************************************************
//***************************** like  ***********************************
//***********************************************************************
add_action('wp_ajax_like_action', 'like_action');

function like_action()
{
    $id = 352;
    testTheme_set_like_post_meta($id);
    echo testTheme_get_like_post_meta($id);
    wp_die();
}


//***********************************************************************
//***********************************************************************
//***********************************************************************


//***********************************************************************
//***************************** more_post  ******************************
//***********************************************************************
add_action('wp_ajax_more_action', 'more_action');
add_action('wp_ajax_nopriv_more_action', 'more_action');
function more_action()
{
//    sleep(rand(0.2,2));

    $page = intval($_POST['page']);
    $posts_per_page = 4;


    $offset = (($page - 1) * $posts_per_page);



    $more_post_args = array(
        'post_type' => array('post'),
        'posts_per_page' => $posts_per_page,
        'offset' => $offset
    );
    $more_posts = new WP_Query($more_post_args);

    $count = ($more_posts->found_posts) - $page;

//***********************************************************************
    if ($more_posts->have_posts()):
        while ($more_posts->have_posts()) :
            $more_posts->the_post();
            $output_html .= '<a href= ' . get_permalink() . '>';
            $output_html .= '<div class="col-md-4 animate-box fadeInUp animated-fast" style="float: right;">';
            $output_html .= '<article>';
            $output_html .= '<h3>' . get_the_title() . '</h3>';
            $output_html .= '<p class="admin">';
            $output_html .= '<span>' . get_the_date("Y/m/d l") . ' </span>';
            $output_html .= '</p>';
            $output_html .= '<span><p>' . get_the_excerpt() . '</p></span>';
            $output_html .= ' <p class="p-avatar">' . get_avatar(get_the_author_meta('ID'), 32) . '</p>';
            $output_html .= '<a href="#" class="author">' . get_the_author() . '</a>';
            $output_html .= '<a href="#" class="a-like-it"><i class="far fa-heart"></i></a>';
            $output_html .= '<p class="p-like">' . testTheme_get_like_post_meta(get_the_ID()) . '</p>';
//            $output_html .= '<p class="p-tag" style="background-color:yellow ">' . the_title_attribute(array("before" => "Permalink to:", "after" => " ")) . '</p>';


//            $output_html .= '<p style = "background-color: #0A246A" >' . get_the_tags() . '</p>';
            $output_html .= '  </article>';
            $output_html .= '</div>';
            $output_html .= '</a>';


        endwhile;
    endif;
    wp_reset_postdata();

    //***********************************************************************
//    $output_html = 'ali';
    $result = array();
    $result['count'] = $posts_per_page;
    $result['allpost'] = $count;
    $result['content'] = $output_html;
    wp_die(json_encode($result));


}


//***********************************************************************
//***********************************************************************
//***********************************************************************
