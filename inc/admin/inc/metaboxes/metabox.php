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
                'ingredients' => '',
                'time'        => '',
                'utensils'    => '',
                'level'       => '',
                'meal_type'   => '',
                'post_name_i' => ''
            );
        }

        ?>
        <?php  $slider_f = get_post_meta($slider_data['ingredients']);
        pr($slider_data);
        echo $slider_data['ingredients'];

        ?>
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="ingredients" value="<?php echo $slider_data['ingredients'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="time" value="<?php echo $slider_data['time'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="utensils" value="<?php echo $slider_data['utensils'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="level" value="<?php echo $slider_data['level'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" name="meal_type" value="<?php echo $slider_data['meal_type'];?>" class="form-control">
            </div>

            <div class="form-group">
                <label for="post_name">Post title</label>
                <select class="" name="post_name_i">
                    <option value="<?php echo $slider_data['post_name_i'];?>">fghf</option>
                    <option value="<?php echo $slider_data['post_name_i'];?>">2233</option>
                </select>
            </div>

            <input name="color1" type="text" value="<?php echo $slider_data['color1']; ?>" /><br>
            <input name="color2" type="text" value="<?php echo $slider_data['color2']; ?>" />

            <div class="first">

            </div>
            <div class="second">

            </div>

            <style media="screen">
                .first{
                    width: 100px;
                    height: 100px;
                    background-color: <?php echo $slider_data['color1']; ?>
                }

                .second{
                    width: 100px;
                    height: 100px;
                    background-color: <?php echo $slider_data['color2']; ?>
                }
            </style>

        <?
    }
}
