<?php
$args = array('post_type' => 'music');

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
                <p><a href="#" class="btn btn-primary">Select Plan</a></p>
            </div>
        </div>


<?php endwhile; ?>
<?php endif; ?>





