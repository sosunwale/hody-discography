<?php
add_action( 'init', 'hody_discog_video_register_post_type' );
function hody_discog_video_register_post_type() {
	$labels = [
		'name'                     => esc_html__( 'Videos', 'hodessy-discography' ),
		'singular_name'            => esc_html__( 'Video', 'hodessy-discography' ),
		'add_new'                  => esc_html__( 'Add New', 'hodessy-discography' ),
		'add_new_item'             => esc_html__( 'Add new video', 'hodessy-discography' ),
		'edit_item'                => esc_html__( 'Edit Video', 'hodessy-discography' ),
		'new_item'                 => esc_html__( 'New Video', 'hodessy-discography' ),
		'view_item'                => esc_html__( 'View Video', 'hodessy-discography' ),
		'view_items'               => esc_html__( 'View Videos', 'hodessy-discography' ),
		'search_items'             => esc_html__( 'Search Videos', 'hodessy-discography' ),
		'not_found'                => esc_html__( 'No Videos found', 'hodessy-discography' ),
		'not_found_in_trash'       => esc_html__( 'No Videos found in Trash', 'hodessy-discography' ),
		'parent_item_colon'        => esc_html__( 'Parent Video:', 'hodessy-discography' ),
		'all_items'                => esc_html__( 'Videos', 'hodessy-discography' ),
		'archives'                 => esc_html__( 'Video Archives', 'hodessy-discography' ),
		'attributes'               => esc_html__( 'Video Attributes', 'hodessy-discography' ),
		'insert_into_item'         => esc_html__( 'Insert into video', 'hodessy-discography' ),
		'uploaded_to_this_item'    => esc_html__( 'Uploaded to this video', 'hodessy-discography' ),
		'featured_image'           => esc_html__( 'Featured image', 'hodessy-discography' ),
		'set_featured_image'       => esc_html__( 'Set featured image', 'hodessy-discography' ),
		'remove_featured_image'    => esc_html__( 'Remove featured image', 'hodessy-discography' ),
		'use_featured_image'       => esc_html__( 'Use as featured image', 'hodessy-discography' ),
		'menu_name'                => esc_html__( 'Videos', 'hodessy-discography' ),
		'filter_items_list'        => esc_html__( 'Filter Videos list', 'hodessy-discography' ),
		'filter_by_date'           => esc_html__( '', 'hodessy-discography' ),
		'items_list_navigation'    => esc_html__( 'Videos list navigation', 'hodessy-discography' ),
		'items_list'               => esc_html__( 'Videos list', 'hodessy-discography' ),
		'item_published'           => esc_html__( 'Video published', 'hodessy-discography' ),
		'item_published_privately' => esc_html__( 'Video published privately', 'hodessy-discography' ),
		'item_reverted_to_draft'   => esc_html__( 'Video reverted to draft', 'hodessy-discography' ),
		'item_scheduled'           => esc_html__( 'Video scheduled', 'hodessy-discography' ),
		'item_updated'             => esc_html__( 'Video updated', 'hodessy-discography' ),
		'text_domain'              => esc_html__( 'hodessy-discography', 'hodessy-discography' ),
	];
	$args = [
		'label'               => esc_html__( 'Videos', 'hodessy-discography' ),
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
		'delete_with_user'    => false,
		'has_archive'         => true,
		'rest_base'           => '',
		'show_in_menu'        => 'bst-discography/welcome.php',
		'menu_icon'           => 'dashicons-admin-generic',
		'capability_type'     => 'post',
		'supports'            => ['title', 'thumbnail'],
		'taxonomies'          => [],
		'rewrite'             => [
			'with_front' => false,
		],
	];

	register_post_type( 'discog-video', $args );
}

// Add meta custom fields for video

add_filter( 'rwmb_meta_boxes', 'hody_discog_video_fields_register' );

function hody_discog_video_fields_register( $meta_boxes ) {
    $prefix = 'hody_discog_';

    $meta_boxes[] = [
        'title'      => __( 'Video Details', 'hodessy-discography' ),
        'id'         => 'hody_discog_video-details',
        'post_types' => ['discog-video'],
        'style'      => 'seamless',
        'fields'     => [
            [
                'name' => __( 'Video Published Date', 'hodessy-discography' ),
                'id'   => $prefix . 'video_published_date',
                'type' => 'date',
                'size' => 50,
            ],
			[
                'name'    => __( 'Video Hosting Type', 'hodessy-discography' ),
                'id'      => $prefix . 'video_hosting_type',
                'type'    => 'radio',
                'options' => [
                    'youtube-vimeo' => __( 'Youtube/Vimeo', 'hodessy-discography' ),
                    'selfhosted'    => __( 'Self Hosted (mp4 links)', 'hodessy-discography' ),
                ],
                'std'     => 'youtube-vimeo',
            ],
            [
                'name'                 => __( 'Video Source/Publisher URL', 'hodessy-discography' ),
                'id'                   => $prefix . 'video_source',
                'type'                 => 'url',
                'visible'              => [
                    'when'     => [['video_hosting_type', '=', 'youtube-vimeo']],
                    'relation' => 'or',
                ],
            ],
             [
                'name'                 => __( 'Youtube/Vimeo Watch URL', 'hodessy-discography' ),
                'id'                   => $prefix . 'video_url',
                'type'                 => 'oembed',
                'not_available_string' => 'Can not find video',
                'visible'              => [
                    'when'     => [['video_hosting_type', '=', 'youtube-vimeo']],
                    'relation' => 'or',
                ],
            ],
            [
                'type'    => 'heading',
                'name'    => __( 'Add Video Details', 'hodessy-discography' ),
                'visible' => [
                    'when'     => [['video_hosting_type', '=', 'selfhosted']],
                    'relation' => 'or',
                ],
            ],
            
            [
                'name'              => __( 'Video File/Link', 'hodessy-discography' ),
                'id'                => $prefix . 'video_file_link',
                'type'              => 'group',
				'desc'              => __( 'Only add link to MP4 Videos. Other formats will not work.', 'hodessy-discography' ),
                'clone'             => true,
                'clone_as_multiple' => true,
				'add_button'        => __( '+ additional video size', 'hodessy-discography' ),
                'fields'            => [
                    [
                        'name'    => __( 'Upload/Link Video', 'hodessy-discography' ),
                        'id'      => 'video_link',
                        'type'    => 'file_input',
                        'columns' => 5,
                    ],
                    [
                        'name'    => __( 'Video Size', 'hodessy-discography' ),
                        'id'      => 'video_size',
                        'type'    => 'radio',
						'columns' => 5,
                        'options' => [
                            '575p'  => __( '575p', 'hodessy-discography' ),
                            '720p'  => __( '720p', 'hodessy-discography' ),
                            '1080p' => __( '1080p', 'hodessy-discography' ),
                            '2k'    => __( '2k', 'hodessy-discography' ),
                        ],
                        'std'     => '575p',
                        'inline'  => true,
                    ],
                ],
                'visible'           => [
                    'when'     => [['video_hosting_type', '=', 'selfhosted']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'    => __( 'Upload/Link Caption File (English)', 'hodessy-discography' ),
                'id'      => $prefix . 'video_caption_file_english',
                'type'    => 'file_input',
                'desc'    => __( 'upload caption in .vvt format', 'hodessy-discography' ),
                'visible' => [
                    'when'     => [['video_hosting_type', '=', 'selfhosted']],
                    'relation' => 'or',
                ],
            ],
            [
                'name'              => __( 'Additional Caption Files', 'hodessy-discography' ),
                'id'                => $prefix . 'additional_video_caption_files',
                'type'              => 'group',
                'clone'             => true,
                'clone_as_multiple' => true,
                'add_button'        => __( 'Add another language', 'hodessy-discography' ),
                'fields'            => [
                    [
                        'name'    => __( 'Language', 'hodessy-discography' ),
                        'id'      => $prefix . 'language',
                        'type'    => 'select',
                        'options' => [
                            'french' => __( 'French', 'hodessy-discography' ),
                            'yoruba' => __( 'Yoruba', 'hodessy-discography' ),
                            'igbo'   => __( 'Igbo', 'hodessy-discography' ),
                            'hausa'  => __( 'Hausa', 'hodessy-discography' ),
                        ],
                    ],
                    [
                        'name' => __( 'Upload/Link Caption File', 'hodessy-discography' ),
                        'id'   => $prefix . 'uploadlink_caption_file',
                        'type' => 'file_input',
                        'desc' => __( 'upload caption in .vvt format', 'hodessy-discography' ),
                    ],
                ],
                'visible'           => [
                    'when'     => [['video_hosting_type', '=', 'selfhosted']],
                    'relation' => 'or',
                ],
            ],
        ],
    ];

    return $meta_boxes;
}