<?php

/**************************************************
 * All theme shortcodes
 **************************************************/
/**************************************************
 * Example:
 * function custom_shortcode( $atts ) {}
 * add_shortcode( '', 'custom_shortcode' );
 **************************************************/
add_shortcode('social-media', 'get_theme_social');

// Read more into text editor
/**
 * EXAMPLE: Paste this into wysiwyg editor
 * [read more]
 *  Hidden text 
 * [/read]
 * 
 */
add_shortcode('read', 'read_main');
function read_main($atts, $content = null)
{
   $more_string = 'Read More...';
   $less_string =  'Read Less';
   if(isset($atts["less"]) and $atts["less"] and $atts["less"] != ""){
      $less_string = $atts["less"];
   }
   if(isset($atts["more"]) and $atts["more"] and $atts["more"] != ""){
      $more_string = $atts["more"];
   }


   mt_srand((float)microtime() * 1000000);
   $rnum = mt_rand();

   $new_string = '<div class="read_div" id="read' . $rnum . '" style="display: none;">' . do_shortcode($content) . '</div>';
   $new_string .= '<span><a onclick="sc_read_toggle(' . $rnum . ', \'' . $more_string . '\', \'' . $less_string . '\'); return false;" class="read-link" id="readlink' . $rnum . '"  href="#">' . $more_string . '</a></span>' . "\n";

   return $new_string;
}
