<?php

/**
 * Enqueue scripts and styles.
 */
function basetheme_scripts()
{
   wp_enqueue_style('dragonstheme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), false);
   wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/dist/css/main.css', array(), filemtime(get_template_directory() . '/dist/css/main.css'), false);

   wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', array('jquery'), '1.1', true);

   wp_dequeue_style('wp-block-library');

   if (is_singular() && comments_open() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
   }

   /**************************************************
    * Passed data in JS
    **************************************************/
   $dataToBePassed = array(
      'themeUrl'   => get_stylesheet_directory_uri(),
      'ajaxUrl'   => admin_url('admin-ajax.php')
   );

   wp_localize_script('main', 'GlobalThemeData', $dataToBePassed);
}

add_action('wp_enqueue_scripts', 'basetheme_scripts');

// Dashboard custom style css
function admin_style()
{
   wp_register_style('admin_css', get_stylesheet_directory_uri() . '/dist/admin.css', false, '1.0.0');
   wp_enqueue_style('admin_css', get_stylesheet_directory_uri() . '/dist/admin.css', false, '1.0.0');
}
// add_action('admin_enqueue_scripts', 'admin_style');

// Add script signature

// This WordPress theme was made by north (https://madebynorth.com/)
function signature_javascript()
{
?>
   <script type="text/javascript">
      function sc_read_expand(param) {
         param.style.display = (param.style.display == "none") ? "block" : "none";
      }

      function sc_read_toggle(id, more, less) {
         el = document.getElementById("readlink" + id);
         el.innerHTML = (el.innerHTML == more) ? less : more;
         sc_read_expand(document.getElementById("read" + id));
      }
      console.log(`%cThis WordPress theme was made by north (madebynorth.com)`, 'background: #E8FB53; color: #000; padding: 5px 15px; font-size: 13px; font-weight: bold; line-height:1.2em; text-align: center; margin: 15px 0;');
   </script>
<?php
}

// add_action('wp_head', 'signature_javascript');
