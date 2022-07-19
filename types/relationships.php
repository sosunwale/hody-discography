<?php
// Track to Album relationship -reciprocal

add_action( 'mb_relationships_init', 'hody_track_to_album_relationship' );

function hody_track_to_album_relationship() {
    MB_Relationships_API::register( [
        'id'   => 'tracks-to-album',
        'from' => [
            'object_type' => 'post',
            'post_type'   => 'track',
            'admin_column' => [
                'position' => 'after title',
                'title'    => 'Album',
                'link'     => 'edit',
            ],
            'meta_box'    => [
                'context' => 'normal',
                'style'   => 'seamless',
                'class'   => 'HodyTrackInformationC',
            ],
            'field'       => [
                'add_button' => 'Add more track',
                'before'     => 'You can drag tracks and arrange them in your desired order',
            ],
        ],
        'to'   => [
            'object_type' => 'post',
            'post_type'   => 'album',
            'meta_box'    => [
                'context'  => 'normal',
                'priority' => 'high',
                'style'    => 'seamless',
            ],
            'field'       => [
                'placeholder' => 'Choose an Album',
                'max_clone' => 1,
            ],
        ],
    ] );
}
/*
$args = [
    'post_type' => 'tracks',
    'nopaging' => true,
    'relationship' => [
        'id' => 'tracks-to-album',
        'from' => get_the_ID(),
    ],
];
$inctracks = new WP_Query( $args );

#######

global $wp_query, $track;

MB_Relationships_API::each_connected( [
    'id'   => 'tracks-to-album',
    'from' => $wp_query->track, // 'from' or 'to'.
] );

while ( have_posts() ) : the_post();

    // Display connected tracks
    foreach ( $post->connected as $p ) :
        echo $p->post_title;
        // More core here...
    endforeach;

endwhile;


*/
// >> Create Shortcode to Display Tracks Post Types
add_shortcode( 'track-list', 'hody_discog_create_shortcode_tracks' ); 
function hody_discog_create_shortcode_tracks(){
 
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
 
    $query = new WP_Query($args);
 
    if($query->have_posts()) :
 
        while($query->have_posts()) :
 
            $query->the_post() ;
                     
        $result .= '<div class="track-item">';
        $result .= '<div class="track-name">' . get_the_title() . '</div>';
        $result .= '<div class="track-short-info">' . get_the_content() . '</div>'; 
        $result .= '</div>';
 
        endwhile;
 
        wp_reset_postdata();
 
    endif;    
 
    return $result;            
}
 

add_shortcode( 'related-track-list', 'hody_discog_create_shortcode_related_tracks' );
function hody_discog_create_shortcode_related_tracks() {
$connected = new WP_Query( [
    'relationship' => [
        'id'   => 'tracks-to-album',
        'from' => get_the_ID(), // You can pass object ID or full object
        'sibling' => true,
    ],
    'nopaging'     => true,
] );
while ( $connected->have_posts() ) : $connected->the_post();
    
    $result .= '<div class="track-item">';
    $result .= '<div class="track-poster-num">' . get_the_post_thumbnail( $page->ID, array (60) ) . '<h3>' . get_the_title() . '</h3></div>';
    //$result .= '<div class="track-name"><h3>' . get_the_title() . '</h3></div>';
    //$result .= '<div class="track-runtime">' . rwmb_meta( 'hody_discog_track_runtime' ) . '</div>';    
    $trackruntime = rwmb_meta( 'hody_discog_track_runtime' );
    $result .= '<div class="track-runtime">' . number_format( $trackruntime, 2 )  . '</div>'; 
    $result .= '<div class="track-streaming-services">';
    $result .= '<span class="icon-grid-item">';
	$result .= 				'<a  href="'. rwmb_meta( 'hody_discog_track_spotify_url' ) .'" class="discog-icon discog-social-icon discog-social-icon-spotify" target="_blank">';
	$result .= 					'<span class="tooltip">Spotify</span>';
	$result .= 					'<i class="fab fa-spotify"></i>					</a>';
	$result .= 			'</span>';
	$result .= 						'<span class="icon-grid-item">';
	$result .= 				'<a class="discog-icon discog-social-icon discog-social-icon-soundcloud" target="_blank" href="'. rwmb_meta( 'hody_discog_track_soundcloud_url' ) .'">';
	$result .= 					'<span class="tooltip">Soundcloud</span>';
	$result .= 					'<i class="fab fa-soundcloud"></i>					</a>';
	$result .= 			'</span>';
	$result .= 						'<span class="icon-grid-item">';
	$result .= 				'<a class="discog-icon discog-social-icon discog-social-icon-youtube" target="_blank" href="'. rwmb_meta( 'hody_discog_track_youtube_url' ) .'">';
	$result .= 					'<span class="tooltip">Youtube</span>';
	$result .= 					'<i class="fab fa-youtube"></i>					</a>';
	$result .= 			'</span>';
	$result .= 						'<span class="icon-grid-item">';
	$result .= 				'<a class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank" href="'. rwmb_meta( 'hody_discog_track_itunes_url' ) .'">';
	$result .= 					'<span class="tooltip">Apple</span>';
	$result .= 					'<i class="fab fa-apple"></i>					</a>';
	$result .= 			'</span>';
    $result .= 						'<span class="icon-grid-item">';
	$result .= 				'<a class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank" href="'. rwmb_meta( 'hody_discog_track_deezer_url' ) .'">';
	$result .= 					'<span class="tooltip">Deezer</span>';
	$result .= 					'<i class="fab fa-deezer"></i>					</a>';
	$result .= 			'</span>';
    $result .= 						'<span class="icon-grid-item">';
	$result .= 				'<a class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank" href="'. rwmb_meta( 'hody_discog_track_boomplay_url' ) .'">';
	$result .= 					'<span class="tooltip">BoomPlay</span>';
	$result .= 					'<i class="fab fa-b"></i>					</a>';
	$result .= 			'</span>';
    $result .= 						'<span class="icon-grid-item">';
	$result .= 				'<a class="discog-icon discog-social-icon discog-social-icon-apple" target="_blank" href="'. rwmb_meta( 'hody_discog_track_audiomack_url' ) .'">';
	$result .= 					'<span class="tooltip">AudioMack</span>';
	$result .= 					'<i class="fab fa-a"></i>					</a>';
	$result .= 			'</span>';
    $result .= '</div>';
    $result .= '</div>';
  
   
  //  $result .= 
   //     '<div class="track-item">'
  //          . get_the_post_thumbnail( $page->ID, array (60) ) .
  //          '<h3>' . get_the_title() . '</h3>'
  //          . apply_filters( 'the_content', $page->post_content ) .
  //          '<div>'
  //      '<p>' . rwmb_the_value( 'hody_discog_track_runtime' ) . '</p>'
   //     '</div'
  //      '</div>'
  //      ;
      
endwhile;
wp_reset_postdata();
return  $result;            
}
 
 

// Add Track to Artist Relationship
/*
add_action( 'mb_relationships_init', 'hody_track_to_artist_relationship_register' );

function hody_track_to_artist_relationship_register() {
    MB_Relationships_API::register( [
        'id'         => 'hody-discog-track-to-artist',
        'reciprocal' => true,
        'from'       => [
            'object_type' => 'post',
            'post_type'   => 'track',
            'meta_box'    => [
                'title'   => 'Artist',
                'context' => 'normal',
                'style'   => 'seamless',
                'class'   => 'HodyTrackInformationB',
            ],
            'field'       => [
                'name' => 'Choose artist(s)',
            ],
        ],
        'to'         => [
            'object_type' => 'post',
            'post_type'   => 'artist',
            'field'       => [
                'placeholder' => 'Select an Artist',
                'add_button'  => 'Add featured artist(s)',
            ],
        ],
    ] );
}
*/