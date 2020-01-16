<?php

//*********************************
// meta boxes
//*********************************


function wpdocs_register_meta_boxes()
{
    $screens = array('post', 'music');
    foreach ($screens as $screen) {
        add_meta_box('meta-box-id', "aboozarBox", 'wpdocs_my_display_callback', $screen);
    }
}

add_action('add_meta_boxes', 'wpdocs_register_meta_boxes');


function wpdocs_my_display_callback($post)
{
    $image_url = get_post_meta($post->ID, 'testTheme_slider_image_url', true);
    ?>
    <div>
        <label for="name">آدرس عکس :</label>
        <input type="text" title="text" id="name" name="testTheme_url_slider" style="width: 100%;" value="<?php echo $image_url; ?>">
    </div>
    <?php
}

function wpdocs_save_meta_box($post_id)
{


    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    // Check if our nonce is set.
    if (!isset($_POST['testTheme_url_slider']) || empty($_POST['testTheme_url_slider']))
        return;

    // Sanitize the user input.
    $mydata = sanitize_text_field($_POST['testTheme_url_slider']);

    // Update the meta field.
    update_post_meta($post_id, 'testTheme_slider_image_url', $mydata);
}

add_action('save_post', 'wpdocs_save_meta_box');

?>