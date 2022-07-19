<?php
add_action( 'init', 'hody_artist_register_post_type' );
function hody_artist_register_post_type() {
	$labels = [
		'name'                     => esc_html__( 'Artists', 'hodessy-discography' ),
		'singular_name'            => esc_html__( 'Artist', 'hodessy-discography' ),
		'add_new'                  => esc_html__( 'Add New', 'hodessy-discography' ),
		'add_new_item'             => esc_html__( 'Add new artist', 'hodessy-discography' ),
		'edit_item'                => esc_html__( 'Edit Artist', 'hodessy-discography' ),
		'new_item'                 => esc_html__( 'New Artist', 'hodessy-discography' ),
		'view_item'                => esc_html__( 'View Artist', 'hodessy-discography' ),
		'view_items'               => esc_html__( 'View Artists', 'hodessy-discography' ),
		'search_items'             => esc_html__( 'Search Artists', 'hodessy-discography' ),
		'not_found'                => esc_html__( 'No artists found', 'hodessy-discography' ),
		'not_found_in_trash'       => esc_html__( 'No artists found in Trash', 'hodessy-discography' ),
		'parent_item_colon'        => esc_html__( 'Parent Artist:', 'hodessy-discography' ),
		'all_items'                => esc_html__( 'Artists', 'hodessy-discography' ),
		'archives'                 => esc_html__( 'Artist Archives', 'hodessy-discography' ),
		'attributes'               => esc_html__( 'Artist Attributes', 'hodessy-discography' ),
		'insert_into_item'         => esc_html__( 'Insert into artist', 'hodessy-discography' ),
		'uploaded_to_this_item'    => esc_html__( 'Uploaded to this artist', 'hodessy-discography' ),
		'featured_image'           => esc_html__( 'Featured image', 'hodessy-discography' ),
		'set_featured_image'       => esc_html__( 'Set featured image', 'hodessy-discography' ),
		'remove_featured_image'    => esc_html__( 'Remove featured image', 'hodessy-discography' ),
		'use_featured_image'       => esc_html__( 'Use as featured image', 'hodessy-discography' ),
		'menu_name'                => esc_html__( 'Artists', 'hodessy-discography' ),
		'filter_items_list'        => esc_html__( 'Filter artists list', 'hodessy-discography' ),
		'filter_by_date'           => esc_html__( '', 'hodessy-discography' ),
		'items_list_navigation'    => esc_html__( 'Artists list navigation', 'hodessy-discography' ),
		'items_list'               => esc_html__( 'Artists list', 'hodessy-discography' ),
		'item_published'           => esc_html__( 'Artist published', 'hodessy-discography' ),
		'item_published_privately' => esc_html__( 'Artist published privately', 'hodessy-discography' ),
		'item_reverted_to_draft'   => esc_html__( 'Artist reverted to draft', 'hodessy-discography' ),
		'item_scheduled'           => esc_html__( 'Artist scheduled', 'hodessy-discography' ),
		'item_updated'             => esc_html__( 'Artist updated', 'hodessy-discography' ),
		'text_domain'              => esc_html__( 'hodessy-discography', 'hodessy-discography' ),
	];
	$args = [
		'label'               => esc_html__( 'Artists', 'hodessy-discography' ),
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

	register_post_type( 'artist', $args );
}

// Add meta custom fields for artist

add_filter( 'rwmb_meta_boxes', 'hody_artist_fields_register' );

function hody_artist_fields_register( $meta_boxes ) {
    $prefix = 'hody_discog_';

    $meta_boxes[] = [
        'title'      => __( 'Artist Details', 'hodessy-discography' ),
        'id'         => 'hody_discog_artist-details',
        'post_types' => ['artist'],
        'style'      => 'seamless',
        'fields'     => [
            [
                'name' => __( 'Artist Website', 'hodessy-discography' ),
                'id'   => $prefix . 'artist_website',
                'type' => 'url',
                'size' => 50,
            ],
            [
                'name'       => __( 'Artist Image', 'hodessy-discography' ),
                'id'         => $prefix . 'artist_image',
                'type'       => 'single_image',
                'image_size' => 'medium',
                'columns'    => 6,
            ],
        ],
    ];

    return $meta_boxes;
}