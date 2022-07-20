<?php
$prefix = block_value( 'hody-discog-track--album-title-prefix' );
$suffix = block_value( 'hody-discog-track--album-title-suffix' );
?>
<h2>
<?php echo $prefix  ?>&nbsp;<?php echo do_shortcode( '[mb_relationships id="tracks-to-album" direction="from" mode="inline"]' );?>&nbsp;<?php echo $suffix  ?>
</h2>