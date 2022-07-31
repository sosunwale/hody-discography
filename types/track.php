<?php
// Prevent loading this file directly.
defined( 'ABSPATH' ) || die;

//Create Track Post type
// add_action( 'init', 'hody_discog_register_post_type' );
function hody_discog_register_post_type() {
	$labels = [
		'name'                     => esc_html__( 'Tracks', 'hodessy-discography' ),
		'singular_name'            => esc_html__( 'Track', 'hodessy-discography' ),
		'add_new'                  => esc_html__( 'Add New', 'hodessy-discography' ),
		'add_new_item'             => esc_html__( 'Add new track', 'hodessy-discography' ),
		'edit_item'                => esc_html__( 'Edit Track', 'hodessy-discography' ),
		'new_item'                 => esc_html__( 'New Track', 'hodessy-discography' ),
		'view_item'                => esc_html__( 'View Track', 'hodessy-discography' ),
		'view_items'               => esc_html__( 'View Tracks', 'hodessy-discography' ),
		'search_items'             => esc_html__( 'Search Tracks', 'hodessy-discography' ),
		'not_found'                => esc_html__( 'No tracks found', 'hodessy-discography' ),
		'not_found_in_trash'       => esc_html__( 'No tracks found in Trash', 'hodessy-discography' ),
		'parent_item_colon'        => esc_html__( 'Parent Track:', 'hodessy-discography' ),
		'all_items'                => esc_html__( 'Tracks', 'hodessy-discography' ),
		'archives'                 => esc_html__( 'Track Archives', 'hodessy-discography' ),
		'attributes'               => esc_html__( 'Track Attributes', 'hodessy-discography' ),
		'insert_into_item'         => esc_html__( 'Insert into track', 'hodessy-discography' ),
		'uploaded_to_this_item'    => esc_html__( 'Uploaded to this track', 'hodessy-discography' ),
		'featured_image'           => esc_html__( 'Featured image', 'hodessy-discography' ),
		'set_featured_image'       => esc_html__( 'Set featured image', 'hodessy-discography' ),
		'remove_featured_image'    => esc_html__( 'Remove featured image', 'hodessy-discography' ),
		'use_featured_image'       => esc_html__( 'Use as featured image', 'hodessy-discography' ),
		'menu_name'                => esc_html__( 'Tracks', 'hodessy-discography' ),
		'filter_items_list'        => esc_html__( 'Filter tracks list', 'hodessy-discography' ),
		'filter_by_date'           => esc_html__( '', 'hodessy-discography' ),
		'items_list_navigation'    => esc_html__( 'Tracks list navigation', 'hodessy-discography' ),
		'items_list'               => esc_html__( 'Tracks list', 'hodessy-discography' ),
		'item_published'           => esc_html__( 'Track published', 'hodessy-discography' ),
		'item_published_privately' => esc_html__( 'Track published privately', 'hodessy-discography' ),
		'item_reverted_to_draft'   => esc_html__( 'Track reverted to draft', 'hodessy-discography' ),
		'item_scheduled'           => esc_html__( 'Track scheduled', 'hodessy-discography' ),
		'item_updated'             => esc_html__( 'Track updated', 'hodessy-discography' ),
		'text_domain'              => esc_html__( 'hodessy-discography', 'hodessy-discography' ),
	];
	$args = [
		'label'               => esc_html__( 'Tracks', 'hodessy-discography' ),
		'labels'              => $labels,
		'description'         => 'Easily manage your music tracks and albums.',
		'public'              => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'query_var'           => true,
		'can_export'          => true,
		'delete_with_user'    => false,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => 'bst-discography/welcome.php',
		'menu_icon'           => 'dashicons-album',
		'capability_type'     => 'post',
		'supports'            => ['title', 'editor', 'thumbnail', 'comments'],
		'taxonomies'          => ['post_tag'],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'track', $args );
}

//Register track fields

add_filter( 'rwmb_meta_boxes', 'hody_discog_fields_register' );

function hody_discog_fields_register( $meta_boxes ) {
    $prefix = 'hody_discog_';

    $meta_boxes[] = [
        'title'      => __( 'Track Details', 'hodessy-discography' ),
        'id'         => 'hody-discog-track-details',
        'post_types' => ['track'],
        'style'      => 'seamless',
        'class'      => 'HodyTrackInformation',
        'fields'     => [
            [
                'name'        => __( 'Sample Audio', 'hodessy-discography' ),
                'id'          => $prefix . 'track_sample_audio',
                'type'        => 'file_input',
                'desc'        => __( 'Upload only MP3 file format.', 'hodessy-discography' ),
                'placeholder' => __( 'https://yourdomain.com/file.mp3', 'hodessy-discography' ),
                'columns' => 6,
                'required'    => false,
            ],
            [
                'name'    => __( 'Artist(s)', 'hodessy-discography' ),
                'id'      => $prefix . 'track_artist',
                'type'    => 'text',
                'columns' => 6,
            ],
            [
                'name'    => __( 'Short Description', 'hodessy-discography' ),
                'id'      => $prefix . 'track_short_description',
                'type'    => 'textarea',
                'rows'    => 3,
                'columns' => 6,
            ],
			[
                'name'    => __( 'Run Tme', 'hodessy-discography' ),
                'id'      => $prefix . 'track_runtime',
                'type'    => 'number',
				'step' => 0.01,
                'min'         => 0,
                'placeholder' => 0.00,
                'rows'    => 3,
                'columns' => 6,
            ],
            [
                'name'             => __( 'Track Gallery', 'hodessy-discography' ),
                'id'               => $prefix . 'track_gallery',
                'type'             => 'image_advanced',
                'max_file_uploads' => 6,
                'image_size'       => 'medium',
                'columns'          => 7,
            ],
			[
                'name'    => __( 'Select your streaming service', 'hodessy-discography' ),
                'id'      => $prefix . 'track_platforms',
                'type'    => 'checkbox_list',
                'options' => [
                    'spotify'    => __( 'Spotify', 'hodessy-discography' ),
                    'soundcloud' => __( 'SoundCloud', 'hodessy-discography' ),
                    'youtube'    => __( 'Youtube', 'hodessy-discography' ),
                    'itunes'     => __( 'iTunes', 'hodessy-discography' ),
                    'audiomack'  => __( 'AudioMack', 'hodessy-discography' ),
                    'boomplay'   => __( 'BoomPlay', 'hodessy-discography' ),
                    'deezer'     => __( 'Deezer', 'hodessy-discography' ),
                ],
                'inline'  => true,
            ],
            [
                'name'    => __( 'Spotify URL', 'hodessy-discography' ),
                'id'      => $prefix . 'track_spotify_url',
                'type'    => 'text',
                'columns' => 3,
                'visible' => [
                    'when'     => [['track_platforms', 'contains', 'spotify']],
                    'relation' => 'and',
                ],
            ],
            [
                'name'    => __( 'SoundCloud URL ', 'hodessy-discography' ),
                'id'      => $prefix . 'track_soundcloud_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['track_platforms', 'contains', 'soundcloud']],
                    'relation' => 'and',
                ],
            ],
            [
                'name'    => __( 'Youtube URL', 'hodessy-discography' ),
                'id'      => $prefix . 'track_youtube_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['track_platforms', 'contains', 'youtube']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'iTunes URL', 'hodessy-discography' ),
                'id'      => $prefix . 'track_itunes_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['track_platforms', 'contains', 'itunes']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'AudioMack URL', 'hodessy-discography' ),
                'id'      => $prefix . 'track_audiomack_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['track_platforms', 'contains', 'audiomack']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'BoomPlay URL', 'hodessy-discography' ),
                'id'      => $prefix . 'track_boomplay_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['track_platforms', 'contains', 'boomplay']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'Deezer URL', 'hodessy-discography' ),
                'id'      => $prefix . 'track_deezer_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['track_platforms', 'contains', 'deezer']],
                    'relation' => 'or',
                ],
            ],
        ],
    ];

    return $meta_boxes;
}