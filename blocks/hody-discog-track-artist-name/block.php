<?php
//Variables
$artist_name_transform = block_value('hody-discog-track--artist-name-fontcase');
$artist_name_color = block_value('hody-discog-track--artist-name-color');
?>
<h5 style="text-transform:<?php echo $artist_name_transform ?>; color: <?php echo $artist_name_color ?>"><?php rwmb_the_value('hody_discog_track_artist') ?></h5>