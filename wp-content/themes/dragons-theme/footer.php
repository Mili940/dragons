<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DragonsTheme
 */

?>
</div><!-- #content -->
<footer id="site-footer" class="site-footer">
   <div class="site-footer-wrapper">
      <?php get_template_part('template-parts/footer', 'widgets'); ?>
   </div>
</footer><!-- #site-footer -->
</div><!-- #page -->

<?php
   wp_footer();
   load_analytics('analytics_body_bottom');
?>

</body>

</html>