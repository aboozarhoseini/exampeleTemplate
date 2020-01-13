<?php

global $post;
$current_id = $post->ID;
echo $current_id;


echo "<br>";
echo get_the_post_thumbnail($current_id, 'main-thumbnials');


//set view for music_post

testTheme_set_post_meta($current_id);





?>



