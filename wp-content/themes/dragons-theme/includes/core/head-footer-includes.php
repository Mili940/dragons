<?php



function custom_head()
{
   global $theme_config;
   $favicon = get_site_icon_url();
   load_analytics('analytics_head_top');
?>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <?php if (isset($theme_config)) : ?>
      <meta name="theme-color" content="<?php echo $theme_config['theme-color'] ?>">
   <?php endif; ?>
   <?php if ($favicon) : ?>
      <link rel="shortcut icon" type="image/png" href="<?php echo $favicon ?>" />
   <?php else : ?>
      <link rel="shortcut icon" type="image/png" href="<?php echo  get_template_directory_uri() . "/assets/images/default-img.png"; ?>" />
   <?php endif; ?>
<?php
}
add_action('wp_head', 'custom_head', 1);

function custom_head_bottom()
{
   load_analytics('analytics_head_bottom');
}
add_action('wp_head', 'custom_head_bottom', 99999);
