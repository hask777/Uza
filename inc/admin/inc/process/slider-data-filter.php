<?php

function uza_slider_data_filter_content( $content ){

    if(is_singular('slider')){
        return $content;
    }

    global $post;

    $slider_data = get_post_meta($post->ID, 'slider_data', true);



    return $slider_html . $content;
}
