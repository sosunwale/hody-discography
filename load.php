<?php
// Prevent loading this file directly.
defined( 'ABSPATH' ) || die;

// Load Metabox plugins and Prerequisites

include_once  __DIR__ . '/vendor/meta-box/meta-box/meta-box.php';
//include_once  __DIR__ . '/vendor/meta-box/meta-box-group/meta-box-group.php';
//include_once  __DIR__ . '/vendor/meta-box/mb-custom-table/mb-custom-table.php';
include_once  __DIR__ . '/vendor/meta-box/mb-relationships/mb-relationships.php';
include_once  __DIR__ . '/vendor/meta-box/meta-box-conditional-logic/meta-box-conditional-logic.php';
include_once  __DIR__ . '/vendor/meta-box/meta-box-columns/meta-box-columns.php';
//include_once  __DIR__ . '/vendor/meta-box/mb-blocks/mb-blocks.php';
include_once  __DIR__ . '/vendor/crocoblock/jet-engine/jet-engine.php';

//Load custom plugins from wp dirctory
include_once  __DIR__ . '/vendor/wp/display-a-meta-field-as-block/meta-field-block.php';
include_once  __DIR__ . '/vendor/studiopress/genesis-custom-blocks/genesis-custom-blocks.php';

// Load Post type and Taxes

include_once  __DIR__ . '/types/relationships.php';
include_once  __DIR__ . '/types/track.php';
include_once  __DIR__ . '/types/album.php';
//include_once  __DIR__ . '/types/artist.php';
include_once  __DIR__ . '/types/music-video.php';

//Shortcodes & Blocks
include_once  __DIR__ . '/shortcodes/shortcodes.php';
include_once  __DIR__ . '/blocks/blocks.php';


//Enqueue 3rd party scripts
//Plyr - https://plyr.io/ | https://github.com/sampotts/plyr

/**
 * Never worry about cache again!
 */
function hody_discog_load_scripts($hook) {
 
    // create my own version codes
    $hody_discog__plyr_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'inc/js/plyr.min.js' ));
   // $hody_discog__plyri_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'inc/js/initi.js' ));
    $hody_discog_plyr_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'inc/css/player.css' ));
     
    // 
    wp_enqueue_script( 'plyr_js', plugins_url( 'inc/js/plyr.min.js', __FILE__ ), array(), $hody_discog__plyr_js_ver );
    //wp_enqueue_script( 'plyr_js_init', plugins_url( 'inc/js/initi.js', __FILE__ ), array(), $hody_discog__plyri_js_ver );
    wp_register_style( 'player_style_css',    plugins_url( 'inc/css/plyr.css',    __FILE__ ), false,   $hody_discog_plyr_css_ver );
    wp_enqueue_style ( 'player_style_css' );
 
}
add_action('wp_enqueue_scripts', 'hody_discog_load_scripts');

// Change Studiopress Custom blocks folder

 add_filter( 'genesis_custom_blocks_template_path', 'hody_discog_SP_block_get_alternate_template_path' );
 function hody_discog_SP_block_get_alternate_template_path( $path ) {
    unset( $path );
    return __DIR__;
}
