<?php

// create shortcode to list all album tracks 
add_shortcode( 'related-tracks-modern', 'hody_discog_album_related_tracks_list2' );
function hody_discog_album_related_tracks_list2() {
    ob_start();
    $args = array(
        'post_type'      => 'track',
        'posts_per_page' => '',
        'publish_status' => 'published',
        'relationship' => [
            'id'   => 'tracks-to-album',
            'from' => get_the_ID(), // You can pass object ID or full object
            'sibling' => true,
        ],
     );
     // The Query > The Loop
    $sibling_track = new WP_Query($args);
    ?>
    
        <ol class="tracklist-mordern-wrapper">
            <?php while ( $sibling_track->have_posts() ) : $sibling_track->the_post(); ?>
                
            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="track-item">
                <?php //We List Our Custom Value and Divs here ?>

                    <div class="track-poster-num"><h3><a class="track-list-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
                    <?php //$trackruntime = number_format( rwmb_the_value( 'hody_discog_track_runtime' )) ?>
                    <div class="track-runtime"> 
                    <?php  if ( !empty ( rwmb_get_value( 'hody_discog_track_runtime'))) {  ?>
                        <span> <?php number_format( rwmb_the_value( 'hody_discog_track_runtime' ))  ?> </span><?php } ?>
                        <?php  if ( !empty ( rwmb_get_value( 'hody_discog_track_sample_audio'))) {  ?>
                        <audio playsinline class="sample-track"  src="<?php rwmb_the_value( 'hody_discog_track_sample_audio' ); ?>" data-plyr-config='{ "title": "sample", "autopause": true, }'></audio>
                        <?php } ?>
                    </div>
                    <div class="track-streaming-services">
                        <?php if ( !empty ( rwmb_get_value( 'hody_discog_track_spotify_url'))) {  ?>
                        <span class="icon-grid-item">
	 				        <a  href="<?php rwmb_the_value( 'hody_discog_track_spotify_url' ); ?>" class="discog-icon discog-social-icon discog-social-icon-spotify" target="_blank">
	 					    <span class="tooltip">Spotify</span>
	 					    <i class="fab fa-spotify"></i>					</a>
	 			        </span> <?php } ?>
                         <?php if ( !empty ( rwmb_get_value( 'hody_discog_track_soundcloud_url'))) {  ?>
	 					<span class="icon-grid-item">
	 				        <a href="<?php rwmb_the_value( 'hody_discog_track_soundcloud_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-soundcloud" target="_blank">
	 					    <span class="tooltip">Soundcloud</span>
	 					    <i class="fab fa-soundcloud"></i>					</a>
	 			        </span> <?php } ?>
                         <?php if ( !empty ( rwmb_get_value( 'hody_discog_track_youtube_url'))) {  ?>
	 					<span class="icon-grid-item">
	 				        <a href="<?php rwmb_the_value( 'hody_discog_track_youtube_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-youtube" target="_blank">
	 					    <span class="tooltip">Youtube</span>
	 					    <i class="fab fa-youtube"></i>					</a>
	 			        </span> <?php } ?>
                         <?php if ( !empty ( rwmb_get_value( 'hody_discog_track_itunes_url'))) {  ?>
	 					<span class="icon-grid-item">
	 				        <a href="<?php rwmb_the_value( 'hody_discog_track_itunes_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank">
	 					    <span class="tooltip">Apple</span>
	 					    <i class="fab fa-apple"></i>					</a>
	 			        </span> <?php } ?>
                         <?php if ( !empty ( rwmb_get_value( 'hody_discog_track_deezer_url'))) {  ?>
     					<span class="icon-grid-item">
	 				        <a href="<?php rwmb_the_value( 'hody_discog_track_deezer_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank">
	 					    <span class="tooltip">Deezer</span>
	 					    <i class="fab fa-deezer"></i>					</a>
	 			        </span> <?php } ?>
                         <?php if ( !empty ( rwmb_get_value( 'hody_discog_track_boomplay_url'))) {  ?>
     					<span class="icon-grid-item">
	 				        <a href="<?php rwmb_the_value( 'hody_discog_track_boomplay_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank">
	 					    <span class="tooltip">BoomPlay</span>
	 					    <i class="fab fa-b"></i>					</a>
	 			        </span> <?php } ?>
                         <?php if ( !empty ( rwmb_get_value( 'hody_discog_track_audiomack_url'))) {  ?>
     					<span class="icon-grid-item">
	 				        <a href="<?php rwmb_the_value( 'hody_discog_track_audiomack_url' ) ?>" class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank">
	 					    <span class="tooltip">AudioMack</span>
	 					    <i class="fab fa-a"></i>					</a>
	 			        </span> <?php } ?>
                    </div>


                </div>
            </li>
                
            <?php endwhile;
            wp_reset_postdata(); ?>
            
            <script type="text/javascript">const players = Plyr.setup('.sample-track');</script>
        </ol>
    <?php $tracklist_modern = ob_get_clean();
    return $tracklist_modern;

}
?>