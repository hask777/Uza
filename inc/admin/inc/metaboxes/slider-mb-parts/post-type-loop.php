<?php

pr($slider_data);
$post_types = get_post_types( $args, $output, $operator );
?>
  <select class="" name="post_type_1">
    <?
      foreach ( $post_types as $post_type ) {
        $post_name = $post_type->name;
        ?>
          <option <?php selected( $post_type->name ); ?> value="<?php echo $post_type->name; ?>" ><?php echo $post_type->name; ?></option>
        <?
      }
    ?>
  </select>
<?
 pr($slider_data['post_type_1']);
