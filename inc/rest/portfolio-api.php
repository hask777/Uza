<?php
add_action('rest_api_init', 'uza_portfolio_rest_api');

function uza_portfolio_rest_api(){
    register_rest_route( 'uza_rest/v1', 'portfolio', array(
        'methods'  => WP_REST_SERVER::READABLE,
        'callback' => 'uza_portfolio_rest_url',
    ));

    function uza_portfolio_rest_url(){
        $portfolio = new WP_Query(array(
            'post_type' => 'portfolio',
            'posts_per_page' => 4,
            'orderby'        => 'rand',
        ));

        $portfolio_fields = array();

        while($portfolio->have_posts()){

            $portfolio->the_post();

            array_push($portfolio_fields, array(
                'title'     => get_the_title(),
                'content'   => get_the_content(),
                'link'      => get_the_permalink(),
                'image_url' => get_the_post_thumbnail_url(get_the_ID(),'full')
            ));
        }

        return $portfolio_fields;
    }
    // register_rest_field('portfolio', 'image_url', array(
    //     'get_callback' => function(){ return get_the_post_thumbnail_url(get_the_ID(),'full'); }
    // ));
}
