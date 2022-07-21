<?php
//Variables
$album_producer_color = block_value('hody-discog-album--producer-text-color');
?>
<span class="<?php block_field('className'); ?>" style="color: <?php echo $album_producer_color ?>"><?php rwmb_the_value('hody_discog_album_producer', true); ?></span>
