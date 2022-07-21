<?php
//Variables
$single_track_audio = rwmb_meta('hody_discog_track_sample_audio');
?>
<span class="<?php block_field('className'); ?>">
<audio id="single-track-player" controls src="<?php echo $single_track_audio; ?>"></audio>
</span>
<script>
  const player = new Plyr('#single-track-player');
</script>
