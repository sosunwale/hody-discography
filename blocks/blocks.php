<?php
//Register a Block
add_action( 'enqueue_block_editor_assets', 'hody_discography_block_script_register' );
function hody_discography_block_script_register() {
   wp_enqueue_script( 'hody-discog-cta-block',  plugin_dir_url(__FILE__).'/hody-discog-cta-block/hody-discog-cta-block.js', array('wp-blocks', 'wp-i18n', 'wp-editor'), true,false);

}

// Register Global List Tracks Block 
use function Genesis\CustomBlocks\add_block;

add_action( 'genesis_custom_blocks_add_blocks', 'hody_discog_add_global_track_list_block' );
function hody_discog_add_global_track_list_block() {

    add_block(
        'hody-discog-list-tracks', 
        array( 
            'title'    => 'Tracks List', 
            'category' => array (
                'icon'  => null,
                'slug'  =>  'discography',
                'title' =>  'Discography',
            ), 
            'icon'     => 'audiotrack', 
            'keywords' => array( 'music', 'tracks list', 'track' ),
            'displayModal'  => true, 
            'fields'   => array( 
                'hody-discog-number-of-tracks' => array( 
                    'label'   => 'Tracks to show',
                    'location' => 'inspector',
                    'control' => 'range', 
                    'type'    => 'integer',
                    'step'    => 1,
                    "min"     => 0,
                    "max"     => 100,
                    'width'   => '100', 
                ), 
                'hody-discog-show-hide-list-tracks-stream-icons' => array( 
                    'label'   => 'Show/Hide Streaming icons',
                    'location' => 'inspector', 
                    'control' => 'toggle',
                    'type'    => 'boolean', 
                    'width'   => '100', 
                ),
                'hody-discog-track-stream-icon-color' => array( 
                    'label'   => 'Icon Color',
                    'location' => 'editor', 
                    'control' => 'color',
                    'default'    => '#ffffff',
                    'type'      => 'string',
                    'order'     => 2, 
                    'width'   => '100', 
                ),
            ), 
        ) 
    ); 
}


/* Register Album Tracklst Relationship Block 
*   Like the above, we are using genesis custom blocks to generate a query showing tracks conntected to albums
*   from Metabox relationships.
*
*/

add_action( 'genesis_custom_blocks_add_blocks', 'hody_discog_add_album_tracklist_relationship_block' );
function hody_discog_add_album_tracklist_relationship_block() {

    add_block(
        'hody-discog-album-tracklist', 
        array( 
            'title'    => 'Album Tracklist', 
            'category' => 'discography', 
            'icon'     => 'audiotrack', 
            'keywords' => array( 'music', 'tracklist', 'related' ),
            'displayModal'  => true, 
            'fields'   => array( 
                'hody-discog-album-tracklist--show-hide-list-tracks-stream-icons' => array( 
                    'label'   => 'Show/Hide Streaming icons',
                    'location' => 'inspector', 
                    'control' => 'toggle',
                    'type'    => 'boolean', 
                    'width'   => '100', 
                ),
                'hody-discog-album-tracklist--stream-icon-color' => array( 
                    'label'   => 'Icon Color',
                    'location' => 'editor', 
                    'control' => 'color',
                    'default'    => '#ffffff',
                    'type'      => 'string',
                    'order'     => 2, 
                    'width'   => '100', 
                ),
                'hody-discog-album-tracklist--inherit-query' => array( 
                    'label'   => 'Inherit query from template',
                    'location' => 'inspector', 
                    'control' => 'toggle',
                    'type'    => 'boolean', 
                    'width'   => '100', 
                ),
                'hody-discog-album-tracklist--album-id' => array( 
                    'label'   => 'Album Id',
                    'location' => 'inspector', 
                    'control' => 'text',
                    'type'      => 'string',
                    'order'     => 2, 
                    'width'   => '100', 
                ),
            ), 
        ) 
    ); 
}

/* Register Related Tracks track list block
*/

add_action( 'genesis_custom_blocks_add_blocks', 'hody_discog_add_track__related_tracks' );
function hody_discog_add_track__related_tracks() {

    add_block(
        'hody-discog-track-related-tracks', 
        array( 
            'title'    => 'Related Tracks', 
            'category' => 'discography', 
            'icon'     => 'audiotrack', 
            'keywords' => array( 'music', 'tracklist', 'related' ),
            'displayModal'  => true, 
            'fields'   => array( 
                'hody-discog-track--related-tracks--show-hide-list-tracks-stream-icons' => array( 
                    'label'   => 'Show/Hide Streaming icons',
                    'location' => 'inspector', 
                    'control' => 'toggle',
                    'type'    => 'boolean', 
                    'width'   => '100', 
                ),
                'hody-discog-track--related-tracks--stream-icon-color' => array( 
                    'label'   => 'Icon Color',
                    'location' => 'editor', 
                    'control' => 'color',
                    'default'    => '#ffffff',
                    'type'      => 'string',
                    'order'     => 2, 
                    'width'   => '100', 
                ),
                'hody-discog-track--related-tracks--inherit-query' => array( 
                    'label'   => 'Inherit query from template',
                    'location' => 'inspector', 
                    'control' => 'toggle',
                    'type'    => 'boolean', 
                    'width'   => '100', 
                ),
                'hody-discog-track--related-tracks--track-id' => array( 
                    'label'   => 'Track Id',
                    'location' => 'inspector', 
                    'control' => 'text',
                    'type'      => 'string',
                    'order'     => 2, 
                    'width'   => '100', 
                ),
            ), 
        ) 
    ); 
}

/* Register Track Streaming Icons
*/

add_action( 'genesis_custom_blocks_add_blocks', 'hody_discog_add_track__single_blocks' );
function hody_discog_add_track__single_blocks() {

    add_block(
        'hody-discog-track-streaming-icons', 
        array( 
            'title'    => 'Track Streams', 
            'category' => 'discography', 
            'icon'     => 'radio_button_checked', 
            'keywords' => array( 'music', 'tracklist', 'related' ),
            'displayModal'  => false, 
            'fields'   => array( 
                'hody-discog-track--stream-icons-color' => array( 
                    'label'   => 'Icon Color',
                    'location' => 'inspector', 
                    'control' => 'color',
                    'default'    => '#ffffff',
                    'type'      => 'string',
                    'order'     => 2, 
                    'width'   => '100', 
                ),
            ),

        )
            );

    add_block(
        'hody-discog-track-related-album-title', 
            array( 
                'title'    => 'Related Album Title', 
                'category' => 'discography', 
                'icon'     => 'title', 
                'keywords' => array( 'album', 'title', 'heading' ),
                'displayModal'  => true, 
                'fields'   => array( 
                    'hody-discog-track--album-title-prefix' => array( 
                        'label'   => 'Prefix',
                        'location' => 'editor', 
                        'control' => 'text',
                        'type'      => 'string',
                        'order'     => 2, 
                        'width'   => '50', 
                        ),

                    'hody-discog-track--album-title-suffix' => array( 
                        'label'   => 'Suffix',
                        'location' => 'editor', 
                        'control' => 'text',
                        'type'      => 'string',
                        'order'     => 2, 
                        'width'   => '50', 
                        ),
                    ),
        
                )
            );

            add_block(
                'hody-discog-track--artist', 
                    array( 
                        'title'    => 'Track Artist', 
                        'category' => 'discography', 
                        'icon'     => 'account_circle', 
                        'keywords' => array( 'artist', 'title', 'heading' ),
                        'displayModal'  => true, 
                        'fields'   => array( 
                            'hody-discog-track--artist-name-color' => array( 
                                'label'   => 'Color',
                                'location' => 'inspector', 
                                'control' => 'color',
                                'default'    => '#ffffff',
                                'type'      => 'string',
                                'order'     => 2, 
                                'width'   => '100', 
                                ),
        
                            'hody-discog-track--artist-name-fontcase' => array( 
                                'label'   => 'Font Transform',
                                'location' => 'editor', 
                                'control' => 'text',
                                'type'      => 'string',
                                'order'     => 2, 
                                'width'   => '100', 
                                ),
                            ),
                
                        )
                    );
        }
?> 