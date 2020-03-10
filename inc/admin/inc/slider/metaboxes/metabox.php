<?php

function uza_admin_metabox_init(){
    add_action('add_meta_boxes_slider', 'uza_create_metaboxes');

    function uza_create_metaboxes(){
        add_meta_box( 'uza_slider_options_mb', __('Slider Options', 'uza' ), 'uza_slider_options_mb', 'slider', 'normal', 'high');
    }

    function uza_slider_options_mb($post){

        $slider_data = get_post_meta($post->ID, 'slider_data', true);

        if(empty($slider_data)){

            $slider_data = array(
                'posts'     => '',
                'color1'    => '',
                'color2'    => '',
                'color_button'    => '',
                'post_type' => '',
            );
        }
        require_once 'slider-mb-parts/start.php';
        require_once 'slider-mb-parts/menu.php';
        require_once 'slider-mb-parts/slider-html.php';
        require_once 'slider-mb-parts/end.php';

    }
}
