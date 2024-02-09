<?php

/**
 * Template Name: Maintenance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php if (isset($theme_config)) : ?>
      <meta name="theme-color" content="<?php echo $theme_config['theme-color'] ?>">
   <?php endif; ?>
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <link rel="shortcut icon" type="image/png" href="<?php echo get_theme_mod('favicon_image'); ?>" />
   <?php wp_head(); ?>
   <meta name="robots" content="noindex">
   <meta name="googlebot" content="noindex">
</head>

<body <?php body_class(); ?>>
   <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'dragonstheme'); ?></a>
      <div id="content" class="site-content">
         <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

               <?php while (have_posts()) : the_post(); ?>

                  <?php get_template_part('template-parts/content', 'maintenance'); ?>

               <?php endwhile; // End of the loop. 
               ?>

            </main><!-- #main -->

         </div><!-- #primary -->
      </div><!-- #content -->

      <?php wp_footer(); ?>

</body>

</html>