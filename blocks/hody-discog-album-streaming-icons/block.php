<?php
?>
<style>
            .single-album-stream-icon-color a{
            color: <?php block_field( 'hody-discog-album--stream-icons-color' ); ?>
        }
        </style>
    <div class="album-streaming-services single-album-stream-icon-color">
    <?php if ( !empty ( rwmb_get_value( 'hody_discog_album_spotify_url'))) {  ?>
    <span class="icon-grid-item">
         <a  href="<?php rwmb_the_value( 'hody_discog_album_spotify_url' ); ?>" class="discog-icon discog-social-icon discog-social-icon-spotify" target="_blank">
         <span class="tooltip">Spotify</span>
         <i class="fab fa-spotify"></i>					</a>
     </span> <?php } ?>
     <?php if ( !empty ( rwmb_get_value( 'hody_discog_album_soundcloud_url'))) {  ?>
     <span class="icon-grid-item">
         <a href="<?php rwmb_the_value( 'hody_discog_album_soundcloud_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-soundcloud" target="_blank">
         <span class="tooltip">Soundcloud</span>
         <i class="fab fa-soundcloud"></i>					</a>
     </span> <?php } ?>
     <?php if ( !empty ( rwmb_get_value( 'hody_discog_album_youtube_url'))) {  ?>
     <span class="icon-grid-item">
         <a href="<?php rwmb_the_value( 'hody_discog_album_youtube_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-youtube" target="_blank">
         <span class="tooltip">Youtube</span>
         <i class="fab fa-youtube"></i>					</a>
     </span> <?php } ?>
     <?php if ( !empty ( rwmb_get_value( 'hody_discog_album_itunes_url'))) {  ?>
     <span class="icon-grid-item">
         <a href="<?php rwmb_the_value( 'hody_discog_album_itunes_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank">
         <span class="tooltip">Apple</span>
         <i class="fab fa-apple"></i>					</a>
     </span> <?php } ?>
     <?php if ( !empty ( rwmb_get_value( 'hody_discog_album_deezer_url'))) {  ?>
     <span class="icon-grid-item">
         <a href="<?php rwmb_the_value( 'hody_discog_album_deezer_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank">
         <span class="tooltip">Deezer</span>
         <i class="fab fa-deezer"></i>					</a>
     </span> <?php } ?>
     <?php if ( !empty ( rwmb_get_value( 'hody_discog_album_boomplay_url'))) {  ?>
     <span class="icon-grid-item">
         <a href="<?php rwmb_the_value( 'hody_discog_album_boomplay_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank">
         <span class="tooltip">BoomPlay</span>
         <i class="fab fa-b"></i>					</a>
     </span> <?php } ?>
     <?php if ( !empty ( rwmb_get_value( 'hody_discog_album_audiomack_url'))) {  ?>
     <span class="icon-grid-item">
         <a href="<?php rwmb_the_value( 'hody_discog_album_audiomack_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank">
         <span class="tooltip">AudioMack</span>
         <i class="fab fa-a"></i>					</a>
     </span> <?php } ?>
     
</div>


