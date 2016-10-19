<?php
/**
 * Plugin Name: Facebook oEmbed
 * Version: 1.1.1
 * Author: khromov
 * License: GPL2+
 *
 * @package WP Facebook oEmbed
 */

/**
 * Add oEmbed support for multiple Facebook post formats.
 *
 * @see https://core.trac.wordpress.org/ticket/34737 for more information.
 *
 * @since 1.0
 */
function khromov_wp_facebook_oembed() {

	$endpoints = array(
		'#https?://www\.facebook\.com/video.php.*#i'      => 'https://www.facebook.com/plugins/video/oembed.json/',
		'#https?://www\.facebook\.com/.*/videos/.*#i'     => 'https://www.facebook.com/plugins/video/oembed.json/',
		'#https?://www\.facebook\.com/.*/posts/.*#i'      => 'https://www.facebook.com/plugins/post/oembed.json/',
		'#https?://www\.facebook\.com/.*/activity/.*#i'   => 'https://www.facebook.com/plugins/post/oembed.json/',
		'#https?://www\.facebook\.com/photo(s/|.php).*#i' => 'https://www.facebook.com/plugins/post/oembed.json/',
		'#https?://www\.facebook\.com/permalink.php.*#i'  => 'https://www.facebook.com/plugins/post/oembed.json/',
		'#https?://www\.facebook\.com/media/.*#i'         => 'https://www.facebook.com/plugins/post/oembed.json/',
		'#https?://www\.facebook\.com/questions/.*#i'     => 'https://www.facebook.com/plugins/post/oembed.json/',
		'#https?://www\.facebook\.com/notes/.*#i'         => 'https://www.facebook.com/plugins/post/oembed.json/',
	);

	foreach ( $endpoints as $pattern => $endpoint ) {
		wp_oembed_add_provider( $pattern, $endpoint, true );
	}
}
add_action( 'init', 'khromov_wp_facebook_oembed' );
