<?php

function uza_custom_settings(){
    register_setting('uza-settings-group', 'first_name');
    add_settings_section('uza-slider-options', 'Slider Options', 'uza_slider_options', 'uza_main_page');
    add_settings_field('slider-name', 'First Name', 'uza_slider_name', 'uza_main_page', 'uza-slider-options');
}

function uza_slider_options(){
    echo 'Customize your slider';
}

function uza_slider_name(){
        $args = array(
            'post_type' => 'portfolio'
        );
        $posts = new WP_Query($args);
    ?>

        <input type="text" name="first_name" value="">
        <select class="" name="first_name">
            <?php
            if($posts->have_posts()){
                while( $posts->have_posts() ){
                    $posts->the_post();
                    ?>
                    <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                    <?
                }

            }?>
        </select>

    <?
}
