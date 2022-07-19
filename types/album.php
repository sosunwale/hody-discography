<?php
add_action( 'init', 'hody_album_register_post_type' );
function hody_album_register_post_type() {
	$labels = [
		'name'                     => esc_html__( 'Albums', 'hodessy-discography' ),
		'singular_name'            => esc_html__( 'Album', 'hodessy-discography' ),
		'add_new'                  => esc_html__( 'Add New', 'hodessy-discography' ),
		'add_new_item'             => esc_html__( 'Add new album', 'hodessy-discography' ),
		'edit_item'                => esc_html__( 'Edit Album', 'hodessy-discography' ),
		'new_item'                 => esc_html__( 'New Album', 'hodessy-discography' ),
		'view_item'                => esc_html__( 'View Album', 'hodessy-discography' ),
		'view_items'               => esc_html__( 'View Albums', 'hodessy-discography' ),
		'search_items'             => esc_html__( 'Search Albums', 'hodessy-discography' ),
		'not_found'                => esc_html__( 'No albums found', 'hodessy-discography' ),
		'not_found_in_trash'       => esc_html__( 'No albums found in Trash', 'hodessy-discography' ),
		'parent_item_colon'        => esc_html__( 'Parent Album:', 'hodessy-discography' ),
		'all_items'                => esc_html__( 'Albums', 'hodessy-discography' ),
		'archives'                 => esc_html__( 'Album Archives', 'hodessy-discography' ),
		'attributes'               => esc_html__( 'Album Attributes', 'hodessy-discography' ),
		'insert_into_item'         => esc_html__( 'Insert into album', 'hodessy-discography' ),
		'uploaded_to_this_item'    => esc_html__( 'Uploaded to this album', 'hodessy-discography' ),
		'featured_image'           => esc_html__( 'Featured image', 'hodessy-discography' ),
		'set_featured_image'       => esc_html__( 'Set featured image', 'hodessy-discography' ),
		'remove_featured_image'    => esc_html__( 'Remove featured image', 'hodessy-discography' ),
		'use_featured_image'       => esc_html__( 'Use as featured image', 'hodessy-discography' ),
		'menu_name'                => esc_html__( 'Albums', 'hodessy-discography' ),
		'filter_items_list'        => esc_html__( 'Filter albums list', 'hodessy-discography' ),
		'filter_by_date'           => esc_html__( '', 'hodessy-discography' ),
		'items_list_navigation'    => esc_html__( 'Albums list navigation', 'hodessy-discography' ),
		'items_list'               => esc_html__( 'Albums list', 'hodessy-discography' ),
		'item_published'           => esc_html__( 'Album published', 'hodessy-discography' ),
		'item_published_privately' => esc_html__( 'Album published privately', 'hodessy-discography' ),
		'item_reverted_to_draft'   => esc_html__( 'Album reverted to draft', 'hodessy-discography' ),
		'item_scheduled'           => esc_html__( 'Album scheduled', 'hodessy-discography' ),
		'item_updated'             => esc_html__( 'Album updated', 'hodessy-discography' ),
		'text_domain'              => esc_html__( 'hodessy-discography', 'hodessy-discography' ),
	];
	$args = [
		'label'               => esc_html__( 'Albums', 'hodessy-discography' ),
		'labels'              => $labels,
		'description'         => '',
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
		'delete_with_user'    => true,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => 'bst-discography/welcome.php',
		'menu_icon'           => 'dashicons-admin-generic',
		'capability_type'     => 'post',
		'supports'            => ['title', 'thumbnail', 'comments'],
		'taxonomies'          => [],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'album', $args );
}

// Add album Fields

add_filter( 'rwmb_meta_boxes', 'hody_album_fields_register' );

function hody_album_fields_register( $meta_boxes ) {
    $prefix = 'hody_discog_';

    $meta_boxes[] = [
        'title'      => __( 'Album Details', 'hodessy-discography' ),
        'id'         => 'hody-discog-album-details',
        'post_types' => ['album'],
        'style'      => 'seamless',
        'fields'     => [
            [
                'name'       => __( 'Album Cover Image', 'hodessy-discography' ),
                'id'         => $prefix . 'album_cover_image',
                'type'       => 'single_image',
                'image_size' => 'medium',
            ],
            [
                'name' => __( 'Album Introduction', 'hodessy-discography' ),
                'id'   => $prefix . 'album_introduction',
                'type' => 'textarea',
            ],
			[
                'name' => __( 'Producer', 'hodessy-discography' ),
                'id'   => $prefix . 'album_producer',
                'type' => 'text',
            ],
			[
                'name' => __( 'Release Date', 'hodessy-discography' ),
                'id'   => $prefix . 'album_release_date',
                'type' => 'date',
            ],
			[
                'name'    => __( 'Select your streaming service', 'hodessy-discography' ),
                'id'      => $prefix . 'album_platforms',
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
                'id'      => $prefix . 'album_spotify_url',
                'type'    => 'text',
                'columns' => 3,
                'visible' => [
                    'when'     => [['album_platforms', 'contains', 'spotify']],
                    'relation' => 'and',
                ],
            ],
            [
                'name'    => __( 'SoundCloud URL ', 'hodessy-discography' ),
                'id'      => $prefix . 'album_soundcloud_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['album_platforms', 'contains', 'soundcloud']],
                    'relation' => 'and',
                ],
            ],
            [
                'name'    => __( 'Youtube URL', 'hodessy-discography' ),
                'id'      => $prefix . 'album_youtube_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['album_platforms', 'contains', 'youtube']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'iTunes URL', 'hodessy-discography' ),
                'id'      => $prefix . 'album_itunes_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['album_platforms', 'contains', 'itunes']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'AudioMack URL', 'hodessy-discography' ),
                'id'      => $prefix . 'album_audiomack_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['album_platforms', 'contains', 'audiomack']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'BoomPlay URL', 'hodessy-discography' ),
                'id'      => $prefix . 'album_boomplay_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['album_platforms', 'contains', 'boomplay']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'Deezer URL', 'hodessy-discography' ),
                'id'      => $prefix . 'album_deezer_url',
                'type'    => 'url',
                'columns' => 3,
                'visible' => [
                    'when'     => [['album_platforms', 'contains', 'deezer']],
                    'relation' => 'or',
                ],
            ]
        ],
    ];

    return $meta_boxes;
}