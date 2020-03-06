<?php


    class Uza_WP_Widget_Info extends WP_Widget {
      /**
      * To create the example widget all four methods will be
      * nested inside this single instance of the WP_Widget class.
      **/

      public function __construct() {
         $widget_options = array(
           'classname' => 'info_widget',
           'description' => 'This is an Info Widget',
         );
         parent::__construct( 'info_widget', 'Info Widget', $widget_options );
       }

       public function widget( $args, $instance ) {

          $title = apply_filters( 'widget_title', $instance[ 'title' ] );
          $phone_number = apply_filters( 'widget_phone_number', $instance[ 'phone_number' ] );
          $address = apply_filters( 'widget_address', $instance[ 'address' ] );
          $email = apply_filters( 'widget_email', $instance[ 'email' ] );
          $work_time = apply_filters( 'widget_work_time', $instance[ 'work_time' ] );
          $work_time_text = apply_filters( 'work_time_text', $instance[ 'work_time_text' ] );

          echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>
          <!-- Widget Info -->
            <div class="footer-content mb-15">
                <h3><?php echo $phone_number; ?></h3>
                 <p><?php echo $address; ?><br> <?php echo $email; ?></p>
            </div>
            <p class="mb-0"><?php echo $work_time; ?> <br> <?php echo $work_time_text; ?></p>

          <?php echo $args['after_widget'];

        }

        public function form( $instance ) {

          $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
          $phone_number = ! empty( $instance['phone_number'] ) ? $instance['phone_number'] : '';
          $address = ! empty( $instance['address'] ) ? $instance['address'] : '';
          $email = ! empty( $instance['email'] ) ? $instance['email'] : '';
          $work_time = ! empty( $instance['work_time'] ) ? $instance['work_time'] : '';
          $work_time_text = ! empty( $instance['work_time_text'] ) ? $instance['work_time_text'] : '';
          ?>
            <!-- Title -->
              <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
                <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
              </p>
            <!-- Phone Number -->
              <p>
                <label for="<?php echo $this->get_field_id( 'phone_number' ); ?>">Phone Number:</label>
                <input type="text" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'phone_number' ); ?>" value="<?php echo esc_attr( $phone_number ); ?>" />
              </p>
            <!-- Address -->
              <p>
                <label for="<?php echo $this->get_field_id( 'address' ); ?>">Address:</label>
                <input type="text" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" value="<?php echo esc_attr( $address ); ?>" />
              </p>
            <!-- Email -->
                <p>
                  <label for="<?php echo $this->get_field_id( 'email' ); ?>">Email:</label>
                  <input type="text" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo esc_attr( $email ); ?>" />
                </p>
            <!-- Work time -->
                <p>
                    <label for="<?php echo $this->get_field_id( 'copyright_text' ); ?>">Work time:</label>
                    <input type="text" id="<?php echo $this->get_field_id( 'work_time' ); ?>" name="<?php echo $this->get_field_name( 'work_time' ); ?>" value="<?php echo esc_attr( $work_time ); ?>" />
                </p>
            <!-- Work Time Text -->
            <p>
              <label for="<?php echo $this->get_field_id( 'work_time_text' ); ?>">Any text:</label>
              <input type="text" id="<?php echo $this->get_field_id( 'work_time_text' ); ?>" name="<?php echo $this->get_field_name( 'work_time_text' ); ?>" value="<?php echo esc_attr( $work_time_text ); ?>" />
            </p>

          <?php

        }

        public function update( $new_instance, $old_instance ) {
          $instance = $old_instance;
          $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
          $instance[ 'phone_number' ] = strip_tags( $new_instance[ 'phone_number' ] );
          $instance[ 'address' ] = strip_tags( $new_instance[ 'address' ] );
          $instance[ 'email' ] = strip_tags( $new_instance[ 'email' ] );
          $instance[ 'work_time' ] = strip_tags( $new_instance[ 'work_time' ] );
          $instance[ 'work_time_text' ] = strip_tags( $new_instance[ 'work_time_text' ] );
          return $instance;
        }
    }


function uza_info_widget(){
    register_widget('Uza_WP_Widget_Info');
}
add_action('widgets_init', 'uza_info_widget');
