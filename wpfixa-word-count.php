<?php
/*
 * Plugin Name:       WPFixa Word Count
 * Plugin URI:        #
 * Description:       Word counter WordPress Plugin.
 * Version:           1.0
 * Requires at least: 5.0
 * Requires PHP:      7.4
 * Author:            Ibrahim Khalil
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpfixa-word-count
 * Domain Path:       /languages
 */

defined( 'ABSPATH' ) || exit;

/**
 * Word Count
 *
 * @param string $content
 * @return string
 */
function wpfwc_engine( $content ){
    $total_word_count = str_word_count( $content );
    $total_word_count = sprintf( __( "<p>Total word count: %s</p>", "wpfixa-word-count"), $total_word_count );
    $content .= $total_word_count;
    echo $content;
}
add_filter( 'the_content', 'wpfwc_engine' );