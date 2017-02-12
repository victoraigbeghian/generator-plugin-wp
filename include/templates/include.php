<?php
/**
 * <%= includename %>
 *
 * @since <%= version %>
 * @package <%= pluginname %>
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * <%= includename %>.
 *
 * @since <%= version %>
 */
class <%= classname %> {
	/**
	 * Parent plugin class
	 *
	 * @var   <%= mainclassname %>
	 * @since <%= version %>
	 */
	protected $plugin = null;

	/**
	 * Constructor
	 *
	 * @since  <%= version %>
	 * @param  <%= mainclassname %> $plugin Main plugin object.
	 * @return void
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();
	}

	/**
	 * Initiate our hooks
	 *
	 * @since  <%= version %>
	 * @return void
	 */
	public function hooks() {
	}
}
