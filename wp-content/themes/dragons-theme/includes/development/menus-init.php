<?php

function navigations_init()
{
   // This theme uses wp_nav_menu() in one location.
   register_nav_menus(array(
      'primary' => esc_html__('Primary', 'dragonstheme'), // This navigation has not been deleted
   ));
}
add_action('after_setup_theme', 'navigations_init');
