<?php
/*
Plugin Name: My Test Plugin
Description: Test用のプラグインだよ
Version: 1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 必要な定数を定義しておく
 */
if ( ! defined( 'MY_PLUGIN_VERSION' ) ) {
	define( 'MY_PLUGIN_VERSION', '1.0' );
}
if ( ! defined( 'MY_PLUGIN_PATH' ) ) {
	define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'MY_PLUGIN_URL' ) ) {
	define( 'MY_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
}

/**
 * スクリプト スタイルシートの読み込み
 */
add_action( 'wp_enqueue_scripts', function() {

	/** JS */
	wp_enqueue_script(
		'my-test-script',
		MY_PLUGIN_URL.'assets/my_script.js',
		array(),
		MY_PLUGIN_VERSION,
		true
	);

	/** CSS */
	wp_enqueue_style(
		'my-test-style',
		MY_PLUGIN_URL.'assets/my_style.css',
		array(),
		MY_PLUGIN_VERSION
	);
});
