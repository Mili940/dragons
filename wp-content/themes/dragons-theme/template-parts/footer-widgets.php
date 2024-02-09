<?php

/**************************************************
 * Footer widgets file
 **************************************************/
global $theme_config;
$footer_areas = isset($theme_config['footer-areas']) ? $theme_config['footer-areas'] : 4;
$cols_settings = [
   "col-1" => [
      "classes" => "first-column"
   ],
   "col-4" => [
      "classes" => "last-column"
   ],
];
$general_cols_classes = "footer-column col-md-25 col-sm-50";
?>
<div class="site-footer-widgets-wrapper">
   <div class="container">
      <div class="site-footer-widgets-inner">
         <div class="row">
            <?php for ($i = 1; $i <= $footer_areas; $i++) :
               $settings_col = isset($cols_settings['col-' . $i]) ? $cols_settings['col-' . $i] : [];
               $classes = isset($settings_col['classes']) ? $settings_col['classes'] : '';
               if (is_active_sidebar('footer-' . $i)) :
            ?>
                  <div class="<?php echo $general_cols_classes ?> <?php echo 'footer-column-' . $i ?> <?php echo $classes ?>">
                     <?php dynamic_sidebar('footer-' . $i); ?>
                  </div>
            <?php endif;
            endfor; ?>
         </div>
      </div>
   </div>
</div>