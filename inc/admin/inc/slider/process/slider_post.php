<?php
function uza_save_slider_post_admin( $post_id, $post, $update){
    if(!$update){
        return;
    }

    $slider_data = array();
    $slider_data['posts'] = sanitize_text_field($_POST['posts']);
    $slider_data['color1'] = sanitize_text_field($_POST['color1']);
    $slider_data['color2'] = sanitize_text_field($_POST['color2']);
    $slider_data['color_button'] = sanitize_text_field($_POST['color_button']);
    $slider_data['post_type_1'] = sanitize_text_field($_POST['post_type_1']);

    update_post_meta($post_id, 'slider_data', $slider_data);

    // pr($_POST);
    // die();
}
