<?php
$arr = array(
    'post_type' => array('post'),
//                'orderby' => 'date',
//                'order' => 'ASC',
    //    'order' => 'DESC',
//    'posts_per_page' =>3

);

$the_array = new WP_Query($arr);

if ($the_array->have_posts())
    while ($the_array->have_posts()) {
        $the_array->the_post();
        ?>
        <!--start post wrapper-->
        <a href="<?php the_permalink() ?>">

            <div class="col-md-4 animate-box">
                <article>
                    <h3><?php echo get_the_title() ?></h3>
                    <p class="admin"><span><?php echo get_the_date('Y/m/d l') ; ?> </span></p>
                    <p><?php the_excerpt(); ?></p>
                    <p class="author-wrap">
                    <p><?php echo get_avatar(get_the_author_meta('ID'), 32) ?></p>
                    <a href="#" class="author"><?php get_the_author() ?></a></p>
                    <p style="background-color:yellow "><?php the_title_attribute(array('before' => 'Permalink to: ', 'after' => ' ')) ?></p>
                    <p style="background-color: #0A246A"><?php the_tags() ?></p>
                </article>
            </div>
        </a>


        <!--end post wrapper-->
        <?php
    }
else {
    echo "there is no post";
}



