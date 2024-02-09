<?php

add_action('after_switch_theme', 'create_test_page');

function create_test_page()
{
   if (get_page_by_title('Test page') == NULL or !get_page_by_title('Test page')) {
      $content = file_get_contents("test-page.txt", true);
      $user_id = get_current_user_id();
      $createPage = array(
         'post_title'    => "Test page",
         'post_content'  => apply_filters('the_content', $content),
         'post_status'   => 'publish',
         'post_author'   => $user_id,
         'post_type'     => 'page',
         'post_name'     => "Test page"
      );
      wp_insert_post($createPage);
   }
}
