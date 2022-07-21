<?php
//Variables
$album_date_color = block_value('hody-discog-album--release-date-text-color');
$album_releaseDate = rwmb_meta('hody_discog_album_release_date');
$album_releaseDateFormat = block_value('hody-discog-album--release-dateFormat'); ;
?>
<span class="<?php block_field('className'); ?>" style="color: <?php echo $album_date_color ?>"><?php rwmb_the_value('hody_discog_album_release_date', ['format' => $album_releaseDateFormat]); ?></span>
