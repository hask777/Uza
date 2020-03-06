<?php


    class Uza_WP_Widget_Social extends WP_Widget {
      /**
      * To create the example widget all four methods will be
      * nested inside this single instance of the WP_Widget class.
      **/

      public function __construct() {
         $widget_options = array(
           'classname' => 'social_widget',
           'description' => 'This is an Social Widget',
         );
         parent::__construct( 'social_widget', 'Social Widget', $widget_options );
       }

       public function widget( $args, $instance ) {

          $title = apply_filters( 'widget_title', $instance[ 'title' ] );
          $description = apply_filters( 'widget_description', $instance[ 'description' ] );
          $copyright = apply_filters( 'widget_copyright', $instance[ 'copyright' ] );
          $copyright_link = apply_filters( 'widget_copyright_link', $instance[ 'copyright_link' ] );
          $copyright_text = apply_filters( 'widget_copyright_text', $instance[ 'copyright_text' ] );
          $facebook = apply_filters( 'widget_facebook', $instance[ 'facebook' ] );
          $twitter = apply_filters( 'widget_twitter', $instance[ 'twitter' ] );
          $pinterest = apply_filters( 'widget_pinterest', $instance[ 'pinterest' ] );
          $instagram = apply_filters( 'widget_instagram', $instance[ 'instagram' ] );
          $youtube = apply_filters( 'widget_youtube', $instance[ 'youtube' ] );

          echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>
          <!-- Widget Description -->
          <p><?php echo $description; ?></p>
          <!-- Widget Copyright -->
          <div class="copywrite-text mb-30">
              <p>&copy; <?php echo $copyright; ?> <a href="<?php echo $copyright_link; ?>"><?php echo $copyright_text; ?></a>.</p>
          </div>
          <!-- Widget Social Links -->
          <div class="footer-social-info">
              <a href="<?php echo $facebook; ?>" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>

              <a href="<?php echo $twitter; ?>" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>

              <a href="<?php echo $pinterest; ?>" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>

              <a href="<?php echo $instagram; ?>" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>

              <a href="<?php echo $youtube; ?>" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
          </div>

          <?php echo $args['after_widget'];

        }

        public function form( $instance ) {

          $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
          $description = ! empty( $instance['description'] ) ? $instance['description'] : '';
          $copyright = ! empty( $instance['copyright'] ) ? $instance['copyright'] : '';
          $copyright_link = ! empty( $instance['copyright_link'] ) ? $instance['copyright_link'] : '';
          $copyright_text = ! empty( $instance['copyright_text'] ) ? $instance['copyright_text'] : '';
          $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : '';
          $twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : '';
          $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : '';
          $pinterest = ! empty( $instance['pinterest'] ) ? $instance['pinterest'] : '';
          $instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : '';
          $youtube = ! empty( $instance['youtube'] ) ? $instance['youtube'] : '';
          ?>
            <!-- Title -->
              <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
                <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
              </p>
            <!-- Description -->
              <p>
                <label for="<?php echo $this->get_field_id( 'description' ); ?>">Description:</label>
                <input type="text" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" value="<?php echo esc_attr( $description ); ?>" />
              </p>
            <!-- Copyright -->
              <p>
                <label for="<?php echo $this->get_field_id( 'copyright' ); ?>">Copyright:</label>
                <input type="text" id="<?php echo $this->get_field_id( 'copyright' ); ?>" name="<?php echo $this->get_field_name( 'copyright' ); ?>" value="<?php echo esc_attr( $copyright ); ?>" />
              </p>
            <!-- Copyright link-->
                <p>
                  <label for="<?php echo $this->get_field_id( 'copyright_link' ); ?>">Copyright Link:</label>
                  <input type="text" id="<?php echo $this->get_field_id( 'copyright_link' ); ?>" name="<?php echo $this->get_field_name( 'copyright_link' ); ?>" value="<?php echo esc_attr( $copyright_link ); ?>" />
                </p>
            <!-- Copyright Text-->
                <p>
                    <label for="<?php echo $this->get_field_id( 'copyright_text' ); ?>">Copyright text:</label>
                    <input type="text" id="<?php echo $this->get_field_id( 'copyright_text' ); ?>" name="<?php echo $this->get_field_name( 'copyright_text' ); ?>" value="<?php echo esc_attr( $copyright_text ); ?>" />
                </p>
            <!-- Facebook -->
            <p>
              <label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Facebook link:</label>
              <input type="text" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo esc_attr( $facebook ); ?>" />
            </p>
            <!-- Twitter -->
            <p>
              <label for="<?php echo $this->get_field_id( 'twitter' ); ?>">Twitter link:</label>
              <input type="text" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo esc_attr( $twitter); ?>" />
            </p>
            <!-- Pinterest -->
            <p>
              <label for="<?php echo $this->get_field_id( 'pinterest' ); ?>">Pinterest link:</label>
              <input type="text" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo esc_attr( $pinterest); ?>" />
            </p>
            <!-- Instagram -->
            <p>
              <label for="<?php echo $this->get_field_id( 'instagram' ); ?>">Instagram link:</label>
              <input type="text" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo esc_attr( $instagram ); ?>" />
            </p>
            <!-- Youtube -->
            <p>
              <label for="<?php echo $this->get_field_id( 'youtube' ); ?>">Youtube link:</label>
              <input type="text" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo esc_attr( $youtube ); ?>" />
            </p>

          <?php

        }

        public function update( $new_instance, $old_instance ) {
          $instance = $old_instance;
          $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
          $instance[ 'description' ] = strip_tags( $new_instance[ 'description' ] );
          $instance[ 'copyright' ] = strip_tags( $new_instance[ 'copyright' ] );
          $instance[ 'copyright_link' ] = strip_tags( $new_instance[ 'copyright_link' ] );
          $instance[ 'copyright_text' ] = strip_tags( $new_instance[ 'copyright_text' ] );
          $instance[ 'facebook' ] = strip_tags( $new_instance[ 'facebook' ] );
          $instance[ 'twitter' ] = strip_tags( $new_instance[ 'twitter' ] );
          $instance[ 'pinterest' ] = strip_tags( $new_instance[ 'pinterest' ] );
          $instance[ 'instagram' ] = strip_tags( $new_instance[ 'instagram' ] );
          $instance[ 'youtube' ] = strip_tags( $new_instance[ 'youtube' ] );
          return $instance;
        }
    }


function uza_social_widget(){
    register_widget('Uza_WP_Widget_Social');
}
add_action('widgets_init', 'uza_social_widget');
