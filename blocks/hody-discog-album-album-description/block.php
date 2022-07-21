<?php
//Variables
$album_description_color = block_value('hody-discog-album--description-text-color');
?>
<p class="<?php block_field('className'); ?>" style="color: <?php echo $album_description_color ?>"><?php rwmb_the_value('hody_discog_album_introduction', true); ?></p>
