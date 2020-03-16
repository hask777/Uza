<?php
function uza_customizer_theme_settings($wp_customize){
   

   $wp_customize->add_panel('stb_headers_panel',
      array(
          'priority' => 10,
          'capability' => 'edit_theme_options',
          'theme_supports' => '',
          'title' => __('Настройки темы', 'stb'),
          'description' => __('Configure general settings for the Theme Name Theme', 'theme-slug')
      ));

      $wp_customize->add_setting('stb_headers_choices_settings', array(
          'default' =>'',
          'transport' =>'refresh'
      ));

      $wp_customize->add_section('stb_headers_section', array(
          'title' => __('Выбор хедэра', 'stb'),
          'prioryty' => 5,
          'panel'=>'stb_headers_panel'
      ));

      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_headers_choices_control',
              array(
                  'label'  => __('Choose One Of Next Headers','stb'),
                  'section' => 'stb_headers_section',
                  'settings' => 'stb_headers_choices_settings',
                  'type' => 'radio',
                  'choices'        => array(
                      'header 1'   => __( 'header 1 Simple Header' ),
                      'header 2'  => __( 'header 2' ),
                      'header 3'  => __( 'header 3' ),
                      'header 4'  => __( 'header 4 Woocommerce Header' )
                  )
              )
          )
      );

}
add_action( 'customize_register', 'uza_customizer_theme_settings' );
