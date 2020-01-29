<?php
/**
 * File: kfp-kata/include/plugin-init.php
 *
 * @package kfp_kata
 */

defined( 'ABSPATH' ) || die();

add_action( 'plugins_loaded', 'kfp_kata_init' );
/**
 * Inicializa el plugin
 *
 * @return void
 */
function kfp_kata_init() {
	$translation_path = 'kfp-kata/languages';
	load_plugin_textdomain( 'kfp-kata', false, $translation_path );
}
