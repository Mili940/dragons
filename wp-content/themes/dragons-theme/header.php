<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DragonsTheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <?php
   wp_head();
   ?>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
   <?php load_analytics('analytics_body_top') ?>
   <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'dragonstheme'); ?></a>

      <?php get_template_part('template-parts/header', 'main'); ?>

      <div id="content" class="site-content">