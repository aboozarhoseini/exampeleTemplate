<?php
$args = array(
    'post_type' => 'music',
    'posts_per_page' => 3  /*در صورتی که این مورد ست نشده باشد به صورت پیش فرض از تنظیمات خود وردپرس استفاده میکند*/

);

$array = new WP_Query($args);
?>
<?php if ($array->have_posts()): while ($array->have_posts()): $array->the_post(); ?>


    <div class="col-md-3 text-center animate-box">
        <div class="pricing">
            <h2 class="pricing-heading"><?php the_title() ?></h2>
            <div class="price"><sup class="currency">$</sup>140
                <small>per month</small>
            </div>
            <p><?php the_content() ?></p>
            <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Select Plan</a></p>
        </div>
    </div>


<?php endwhile; ?>
<?php endif; ?>





