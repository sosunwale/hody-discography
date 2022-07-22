<?php
/**
 * BlockTypesController class.
 *
 * @internal
 */
class BlockTemplatesController {

	/**
	 * Holds the path for the directory where the block templates will be kept.
	 *
	 * @var string
	 */
	private $templates_directory;

	/**
	 * Holds the path for the directory where the block template parts will be kept.
	 *
	 * @var string
	 */
	private $template_parts_directory;

	/**
	 * Directory name of the block template directory.
	 *
	 * @var string
	 */
	const TEMPLATES_DIR_NAME = 'templates';

	/**
	 * Directory name of the block template parts directory.
	 *
	 * @var string
	 */
	const TEMPLATE_PARTS_DIR_NAME = 'block-template-parts';

	/**
	 * Constructor.
	 */
	public function __construct() {
		// This feature is gated for WooCommerce versions 6.0.0 and above.
		
			$this->templates_directory      = plugin_dir_path( __DIR__ ) . 'templates/' . self::TEMPLATES_DIR_NAME;
			$this->template_parts_directory = plugin_dir_path( __DIR__ ) . 'templates/' . self::TEMPLATE_PARTS_DIR_NAME;
			$this->init();
		
	}

	/**
	 * Initialization method.
	 */
	protected function init() {
		add_action( 'template_redirect', array( $this, 'render_block_template' ) );
		add_filter( 'pre_get_block_file_template', array( $this, 'maybe_return_blocks_template' ), 10, 3 );
		add_filter( 'get_block_templates', array( $this, 'add_block_templates' ), 10, 3 );
	}

}