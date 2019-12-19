<?php

$args = array(
    'post_type' => 'post'
);


$the_array = new WP_Query($args);
$the_array->post_count = 3;

if ($the_array->have_posts()) {
    while ($the_array->have_posts()) {
        $the_array->the_post();
        ?>

        <div class="f-blog">
            <a href="<?php the_permalink()?>" class="blog-img" ><?php echo get_avatar(get_the_author_meta('ID'), 64);?></a>
            <div class="desc">
                <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                <p class="admin" ><span ><?php the_date()?></span></p>
            </div>
        </div>
        <?php
    }
}

?>




