<?php
add_action('customize_register', 'basetheme_register_google_analytics');
/*
 * Register social media in customizer
 */
function basetheme_register_google_analytics($wp_customize)
{
   //Google analytics
   $wp_customize->add_section('google_analytics', array(
      'title'      => __('Analytics', 'dragonstheme'),
      'description'    => __('Enter your analytics code', 'dragonstheme'),
      'priority'   => 501,
   ));
   $analytic_fieldas = [
      'analytics_head_top' => __('Head top', 'dragonstheme'),
      'analytics_head_bottom' => __('Head bottom', 'dragonstheme'),
      'analytics_body_top' => __('Body top', 'dragonstheme'),
      'analytics_body_bottom' => __('Body bottom', 'dragonstheme'),
   ];
   foreach ($analytic_fieldas as $key => $value) {
      $wp_customize->add_setting($key, array(
         'default'   => '',
         'sanitize_callback' => 'textarea_sanitize',
      ));
      $wp_customize->add_control(new WP_Customize_Control($wp_customize, $key, array(
         'label'    => $value,
         'section'  => 'google_analytics',
         'settings' => $key,
         'type'     => 'textarea',
      )));
   }
}

function load_analytics($position)
{
   $data = [];
   $script = [
      'async' => [],
      'type' => [],
      'defer' => [],
      'charset' => [],
      'href' => []
   ];
   $noscript = [
      'async' => [],
      'type' => [],
      'defer' => [],
      'charset' => [],
      'href' => []
   ];
   $iframe = [
      'src' => array(),
      'height' => array(),
      'width' => array(),
      'style' => array()
   ];
   if ($position == 'analytics_body_bottom' or $position == 'analytics_body_top') {
      $data['script'] = $script;
      $data['noscript'] = $noscript;
      $data['iframe'] = $iframe;
   } elseif ($position == 'analytics_head_bottom' or $position == 'analytics_head_top') {
      $data['script'] = $script;
      $data['noscript'] = $noscript;
   }

   if ($position != null) {
      echo wp_kses(get_theme_mod($position),  $data);
   }
}
