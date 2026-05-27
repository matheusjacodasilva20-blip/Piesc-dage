<?php

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Charity and Nonprofit for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'charity_and_nonprofit_register_required_plugins', 0);
function charity_and_nonprofit_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'charity-and-nonprofit',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}


function charity_and_nonprofit_pattern_styles()
{
	wp_enqueue_style('charity-and-nonprofit-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('charity-and-nonprofit-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'charity_and_nonprofit_pattern_styles');


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// Register customer Charity and Nonprofit pattern categories
function charity_and_nonprofit_register_block_pattern_categories()
{
	register_block_pattern_category(
		'header',
		array(
			'label'       => __('Header', 'charity-and-nonprofit'),
			'description' => __('Header patterns', 'charity-and-nonprofit'),
		)
	);
	register_block_pattern_category(
		'call_to_action',
		array(
			'label'       => __('Call To Action', 'charity-and-nonprofit'),
			'description' => __('Call to action patterns', 'charity-and-nonprofit'),
		)
	);
	register_block_pattern_category(
		'content',
		array(
			'label'       => __('Content', 'charity-and-nonprofit'),
			'description' => __('Charity and Nonprofit content patterns', 'charity-and-nonprofit'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'charity-and-nonprofit'),
			'description' => __('Team patterns', 'charity-and-nonprofit'),
		)
	);
	register_block_pattern_category(
		'banners',
		array(
			'label'       => __('Banners', 'charity-and-nonprofit'),
			'description' => __('Banner patterns', 'charity-and-nonprofit'),
		)
	);
	register_block_pattern_category(
		'contact',
		array(
			'label'       => __('Contact', 'charity-and-nonprofit'),
			'description' => __('Contact patterns', 'charity-and-nonprofit'),
		)
	);
	register_block_pattern_category(
		'layouts',
		array(
			'label'       => __('Layouts', 'charity-and-nonprofit'),
			'description' => __('layout patterns', 'charity-and-nonprofit'),
		)
	);
	register_block_pattern_category(
		'testimonials',
		array(
			'label'       => __('Testimonial', 'charity-and-nonprofit'),
			'description' => __('Testimonial and review patterns', 'charity-and-nonprofit'),
		)
	);

}

add_action('init', 'charity_and_nonprofit_register_block_pattern_categories');

