<?php
global $theme_config;
/**************************************************
 * All theme options and functions
 *
 * Disable gutenberg for posts
 **************************************************/
// add_filter('use_block_editor_for_post', '__return_false', 10);
// /**************************************************
//  * Disable gutenberg for post types
//  **************************************************/
// add_filter('use_block_editor_for_post_type', '__return_false', 10);
/**************************************************
 * Disable gutenberg style in Front
 **************************************************/
function wps_deregister_styles()
{
   wp_dequeue_style('wp-block-library');
}
add_action('wp_print_styles', 'wps_deregister_styles', 100);
/**************************************************
 * Get social media
 **************************************************/
require get_template_directory() . '/includes/core/get-social.php';

/**************************************************
 * Theme paginations
 **************************************************/
require get_template_directory() . '/includes/core/get-pagination.php';
/**************************************************
 * Trim archive title
 **************************************************/
require get_template_directory() . '/includes/core/trim-archive-title.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/core/custom-header.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/core/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
   require get_template_directory() . '/includes/core/jetpack.php';
}
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/core/template-functions.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/core/template-tags.php';
/**************************************************
 * Disable Emojis
 **************************************************/
require get_template_directory() . '/includes/core/disable-emojis.php';
/**************************************************
 * Browser Detection
 **************************************************/
require get_template_directory() . '/includes/core/browser-detection.php';
/**************************************************
 * SVG Logo in Customizer
 **************************************************/
require get_template_directory() . '/includes/core/svg-logo.php';
/**************************************************
 * Customizer Socila media
 **************************************************/
require get_template_directory() . '/includes/core/social.php';
/**************************************************
 * Customizer Google analytics
 **************************************************/
require get_template_directory() . '/includes/core/google-analytics.php';
/**************************************************
 * Theme SVG upload fix
 **************************************************/
require get_template_directory() . '/includes/core/svg-upload.php';
/**************************************************
 * Theme sanitize functions
 **************************************************/
require get_template_directory() . '/includes/core/sanitize.php';
/**************************************************
 * Create test page on switch theme
 **************************************************/
require get_template_directory() . '/includes/core/test-page.php';
/**************************************************
 * Head and Footer hooks
 **************************************************/
require get_template_directory() . '/includes/core/head-footer-includes.php';
/**************************************************
 * Disable comments
 **************************************************/
require get_template_directory() . '/includes/core/disable-comments.php';
/**************************************************
 * Customizer Maintenance
 **************************************************/
if ($theme_config and $theme_config['enable_maintenance']) {
   require get_template_directory() . '/includes/core/maintenance.php';
} else {
   add_filter('theme_page_templates',  function ($page_templates) {
      unset($page_templates['templates/maintenance.php']);
      return $page_templates;
   });
}
