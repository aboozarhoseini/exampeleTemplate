<?php

$args = array(
    'post_type' => array('post', 'music'),
    'meta_key' => 'testTheme_slider_image_url',
    'meta_value' => '',
    'meta_compare' => '!=',


);


$the_array = new WP_Query($args);
//$the_array->post_count = 3;

if ($the_array->have_posts()) {
    while ($the_array->have_posts()) {
        $the_array->the_post();
        ?>

        <div class="item">
            <div class="col-md-8 col-md-offset-2">
                <div class="featured-entry">
                    <img class="img-responsive" src="<?php echo get_post_meta($the_array->post->ID,'testTheme_slider_image_url',true) ?>" alt="">
                </div>
            </div>
        </div>

        <?php
    }
}

?>

