<?php

/**
 * Plugin Name:       Gutenberg block
 * Plugin URI:        https://www.github.com/miguelcalderons
 * Description:       This is a plugin to add a custom gutenberg block.
 * Version:           1.0.0
 * Author:            Miguel Calderón
 * Author URI:        https://www.github.com/miguelcalderons
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gutenberg-block
 */

function addEnqueues() {
	wp_register_script(
		'custom-block',
		plugins_url( 'build/index.js', __FILE__ ),
		array( 'wp-blocks', 'wp-element', 'wp-editor' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'build/index.js' )
	);

	wp_register_style(
		'custom-block-editor-style',
		plugins_url( 'src/editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'src/styles/editor.css' )
	);

	wp_register_style(
		'custom-block-frontend-style',
		plugins_url( 'src/style.css', __FILE__ ),
		array( ),
		filemtime( plugin_dir_path( __FILE__ ) . 'src/styles/style.css' )
	);

	register_block_type( 'gutenberg-block/test-block', array(
		'editor_script' => 'custom-block',
		'editor_style' => 'custom-block-editor-style',
		'style' => 'custom-block-frontend-style',
	) );

}

add_action('init', 'addEnqueues');
