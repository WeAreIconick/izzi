<?php

/**
 * Set up Search Dialog functionality.
 *
 * Functionality originally based on prior art at https://github.com/bethinkstudio/search-dialog/
 *
 * @package SearchDialog
 */

namespace Izzi\SearchDialog;

/**
 * Handle addition of any enqueues for the front-end.
 *
 * @return void
 */
function enqueue_block_assets() {
	$asset_file = include( get_theme_file_path( 'build/search-dialog.asset.php' ) );
	wp_enqueue_script(
		'search-dialog',
		get_theme_file_uri( 'build/search-dialog.js' ),
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_block_assets' );

/**
 * Handle addition of any enqueues for the block editor only.
 *
 * @return void
 */
function enqueue_block_editor_assets() {
	$asset_file = include( get_theme_file_path( 'build/search-dialog-editor.asset.php' ) );
	wp_enqueue_script(
		'search-dialog-editor',
		get_theme_file_uri( 'build/search-dialog-editor.js' ),
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );



function register_block_type_args( $args, $block_type ) {
	if ( 'core/search' === $block_type ) {
		if ( ! isset( $args['attributes'] ) ) {
            $args['attributes'] = array();
        }
		$args['attributes']['search_dialog'] = array(
			'type'    => 'boolean',
			'default' => false,
		);
	}

	return $args;
}
add_filter( 'register_block_type_args', __NAMESPACE__ . '\register_block_type_args', 10, 2 );

/**
 * Filters the block being rendered in render_block(), before it's processed.
 *
 * @since 5.1.0
 * @since 5.9.0 The `$parent_block` parameter was added.
 *
 * @param array         $parsed_block {
 *     An associative array of the block being rendered. See WP_Block_Parser_Block.
 *
 *     @type string   $blockName    Name of block.
 *     @type array    $attrs        Attributes from block comment delimiters.
 *     @type array[]  $innerBlocks  List of inner blocks. An array of arrays that
 *                                  have the same structure as this one.
 *     @type string   $innerHTML    HTML from inside block comment delimiters.
 *     @type array    $innerContent List of string fragments and null markers where
 *                                  inner blocks were found.
 * }
 */
function render_block_data( $block ) {
	if ( 'core/search' !== $block['blockName'] ) {
		return $block;
	}
	// If our custom attribute isn't added, don't do anything.
	if ( empty( $block['attrs']['search_dialog'] ) ) {
		return $block;
	}

	// Do things to add the dialog here.
	$block['attrs']['className'] ??= '';
	$block['attrs']['className'] .= ' search_dialog__trigger';

	wp_enqueue_script( 'search-dialog' );
    wp_enqueue_style( 'dashicons' );
	add_action( 'wp_footer', __NAMESPACE__ . '\render_dialog' );

	return $block;
}
add_filter( 'render_block_data', __NAMESPACE__ . '\render_block_data' );

/**
 * This function will print the dialog to the page.
 *
 * It will generally be loaded onto the `wp_footer` action by the
 * `_render_block_data()` function and displayed via `view.js`
 */
function render_dialog() {
	?>
<dialog id="search_dialog" closedBy="any">
	<?php get_search_form(); ?>
</dialog>
	<?php
}
