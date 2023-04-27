<?php
/**
 * Plugin Name: Buzzsprout Embed
 * Plugin URI:
 * Description: Embed Buzzsprout podcast episodes
 * Version: 1.0
 * Author: Human Made Limited
 * Author URI: https://humanmade.com
 * License: GPL2
 */

wp_embed_register_handler(
	'buzzsprout',
	'#https?://(www\.)?buzzsprout\.com/(\d+)/(\d+)/?#i',
	function ( $matches ) {
		$embed = sprintf(
			'<div id="buzzsprout-player-%1$s"></div>' .
			'<script src="https://www.buzzsprout.com/%2$s/%1$s.js?container_id=buzzsprout-player-%1$s&amp;player=small" type="text/javascript" charset="utf-8"></script>',
			$matches[3],
			$matches[2]
		);

		return $embed;
	}
);
