<?php
function uza_save_slider_post_admin( $post_id, $post, $update){
    if(!$update){
        return;
    }

    $slider_data = array();
    // Posts
    $slider_data['slide_id'] = sanitize_text_field($_POST['slide_id']);
    $slider_data['posts_1'] = sanitize_text_field($_POST['posts_1']);
    $slider_data['post_type_1'] = sanitize_text_field($_POST['post_type_1']);
    // Content
    $slider_data['color_title'] = sanitize_text_field($_POST['color_title']);
    $slider_data['title_font_size'] = sanitize_text_field($_POST['title_font_size']);
    $slider_data['title_font_style'] = sanitize_text_field($_POST['title_font_style']);
    // Button
    $slider_data['color_button'] = sanitize_text_field($_POST['color_button']);
    $slider_data['color_background'] = sanitize_text_field($_POST['color_background']);
    $slider_data['slider_button_text'] = sanitize_text_field($_POST['slider_button_text']);
    $slider_data['slide_class_name'] = sanitize_text_field($_POST['slide_class_name']);

    update_post_meta($post_id, 'slider_data', $slider_data);

    // pr($_POST);
    // die();
}
