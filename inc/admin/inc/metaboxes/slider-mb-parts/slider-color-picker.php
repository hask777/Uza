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
