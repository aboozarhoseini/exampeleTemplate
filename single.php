<?php

global $post;
$current_id = $post->ID;
echo $current_id;
//echo "<br>";
//
//echo "<br>";
//foreach (get_the_category() as $item) {
//    echo $item->term_id;
//
//}


echo "<br>";
echo get_the_post_thumbnail($current_id,'main-thumbnials');




?>





