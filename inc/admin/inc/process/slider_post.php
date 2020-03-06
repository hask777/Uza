<?php
function uza_save_slider_post_admin( $post_id, $post, $update){
    if(!$update){
        return;
    }

    $slider_data = array();
    $slider_data['ingredients'] = sanitize_text_field($_POST['ingredients']);
    $slider_data['time'] = sanitize_text_field($_POST['time']);
    $slider_data['utensils'] = sanitize_text_field($_POST['utensils']);
    $slider_data['level'] = sanitize_text_field($_POST['level']);
    $slider_data['meal_type'] = sanitize_text_field($_POST['meal_type']);
    $slider_data['post_name_i'] = sanitize_text_field($_POST['post_name_i']);
    $slider_data['color1'] = sanitize_text_field($_POST['color1']);
    $slider_data['color2'] = sanitize_text_field($_POST['color2']);

    update_post_meta($post_id, 'slider_data', $slider_data);

    // pr($_POST);
    // die();
}
