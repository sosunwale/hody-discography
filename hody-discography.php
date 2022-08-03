<?php
/**
 * @package HodyDiscography
 */
/*
Plugin Name: Hody Discography
Plugin URI: https://www.hodessy.com/plugins/hody-discography
Description: Adds an extensive music management system to your website.
Version: 1.0.1
Author: Stephen Osunwale
Author URI: https://www.hodessy.com
Text Domain: hody-discography
License: GPLv2 or later
*/
// Check that the file is not accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'We\'re sorry, but you can not directly access this file.' );
}

// Include load.php file -- this calls all post type file and code assets
if ( ! class_exists( 'HodyDiscography' ) ) :

    
    class HodyDiscography {

        private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {

        add_action( 'init', 'hody_album_register_post_type' );
        add_action( 'init', 'hody_discog_register_post_type' );
        add_action( 'init', 'hody_discog_video_register_post_type' );

        

		// Let's Initialize Everything
            if ( file_exists( plugin_dir_path( __FILE__ ) . 'load.php' ) ) {
            require_once( plugin_dir_path( __FILE__ ) . 'load.php' );
    };
        }


    }
/**
	 * Kicking this off by calling 'get_instance()' method
	 */
	HodyDiscography::get_instance();

endif;



//Include style
add_action( 'admin_enqueue_scripts', 'hody_discog_selectively_enqueue_admin_script' );
function hody_discog_selectively_enqueue_admin_script( $hook ) {
    //wp_enqueue_script( 'hody_event_admin_js', plugin_dir_url( __FILE__ ) . 'inc/admin.js', array(), '1.0' );
	wp_enqueue_style('hody_discog_admin_css', plugins_url('inc/admin.css',__FILE__ ));
}
/*
function enqueue() {
    wp_enqueue_style( 'hody-discog-playr_custom_style', plugins_url('inc/css/plyr-custom-style.css', __FILE__ ));
    wp_enqueue_style( 'hody-discog-block_styles', plugins_url('inc/css/block-styles.css', __FILE__ ));
    //wp_enqueue_script( 'hody-discog-block_script', plugins_url('inc/css/block-script.js', __FILE__ ));
}
*/
// Include frontend styles
add_action( 'wp_enqueue_scripts', 'hody_discog_enqueuing_scripts_styles' );
function hody_discog_enqueuing_scripts_styles(){
    if(shortcode_exists('album-tracklist-modern')) {
	// Enqueue Scripts and Styles Here
    //wp_enqueue_style( 'hody-discog-tracklist-shortcode-css', plugins_url('inc/css/shortcode-tracklist.css',__FILE__ ));
   // wp_enqueue_script( 'custom-js',  get_template_directory_uri().'/js/custom-js.js');
	};
    wp_enqueue_style( 'hody-discog-playr_custom_style', plugins_url('inc/css/plyr-custom-style.css',__FILE__ ));
}



//Add discography top menu
add_action('admin_menu', 'hody_bst_discog_add_menu');
function hody_bst_discog_add_menu() {  
        add_menu_page ('Discography', 'Discography', 'edit_pages', '/bst-discography/welcome.php', 'discography_page', 'dashicons-album', 7);
}


//Display dummy content on discography page
function discography_page() {
    ?>
   <!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"padding":{"top":"50px","right":"50px","bottom":"50px","left":"50px"}}},"backgroundColor":"cyan-bluish-gray"} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center has-cyan-bluish-gray-background-color has-background" style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Welcome</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
<h2 class="has-text-align-center has-primary-color has-text-color" style="text-transform:uppercase">Supercharge your track and album management</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"25px","bottom":"50px"}}}} -->
<div class="wp-block-buttons" style="margin-top:25px;margin-bottom:50px"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Enter Site</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

    <?php
}
?> 
<?php
/* Load gutenberg page templates from plugin 

public static function generate_template_slug_from_path( $path ) {
    $template_extension = '.html';

    return basename( $path, $template_extension );
}
*/
