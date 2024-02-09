<?php

/**************************************************
 * Include Config
 **************************************************/
require get_template_directory() . '/includes/ThemeConfig.php';
/**************************************************
 * Include Base Theme
 **************************************************/
require get_template_directory() . '/includes/theme.php';
/**************************************************
 * Include Theme functions
 **************************************************/
require get_template_directory() . '/includes/core/index.php';
/**************************************************
 * Init  Custom Post Type
 **************************************************/
require get_template_directory() . '/includes/development/cpt/index.php';
/**************************************************
 * Init all development files 
 **************************************************/
require get_template_directory() . '/includes/development/index.php';

