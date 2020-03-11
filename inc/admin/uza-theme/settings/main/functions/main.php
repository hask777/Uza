<?php

function uza_slider_options(){
    echo 'Customize your slider';
}

function uza_slider_posts(){
        $args = array(
            'post_type' => 'portfolio'
        );
        $posts = new WP_Query($args);
    ?>
        <?php $posts_list =  esc_attr(get_option('posts_list'));
        pr($posts_list);
        ?>
        <select class="" name="posts_list">
            <?php
            if($posts->have_posts()){
                while( $posts->have_posts() ){
                    $posts->the_post();
                    ?>
                    <option value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
                    <?
                }
            }?>
        </select>
    <?
}

function uza_slider_terms(){
    $terms = get_terms('portfolio_cat');
    $terms_list =  esc_attr(get_option('terms_list'));
    pr($terms_list);
    ?>
        <select class="" name="terms_list">
        <?
            foreach($terms as $term):
            ?>
                <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
            <? endforeach; ?>
        </select>
    <?
}
