<?php
add_action('customize_register', 'basetheme_register_maintenance');
/*
 * Register social media in customizer
 */

if (class_exists('WP_Customize_Control')) {
   class WP_Customize_All_Pages_Control extends WP_Customize_Control
   {
      public $type = 'all_pages';
      public $post_type = 'page';

      public function render_content()
      {

         $latest = new WP_Query(array(
            'post_type'   => $this->post_type,
            'orderby'     => 'date',
            'order'       => 'DESC'
         )); ?>
         <label>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <select <?php $this->link(); ?>>
               <option></option>
               <?php
               while ($latest->have_posts()) {
                  $latest->the_post();
                  echo "<option " . selected($this->value(), get_the_ID()) . " value='" . get_the_ID() . "'>" . the_title('', '', false) . "</option>";
               }
               ?>
            </select>
         </label>
<?php
      }
   }
}
function basetheme_register_maintenance($wp_customize)
{
   //maintenance analytics
   $wp_customize->add_section('maintenance_section', array(
      'title'      => __('Maintenance', 'dragonstheme'),
      'priority'   => 501,
   ));
   $wp_customize->add_setting('maintenance_enable', array(
      'default'   => false,
   ));
   $wp_customize->add_setting('maintenance_page', array());
   $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'maintenance_enable',  array(
      'label' => 'Enable Maintenance',
      'type'  => 'checkbox', // this indicates the type of control
      'section' => 'maintenance_section',
      'settings' => 'maintenance_enable'
   )));
   $wp_customize->add_control(new WP_Customize_All_Pages_Control(
      $wp_customize,
      'maintenance_page',
      array(
         'label'    => __('Maintenance page redirecion', 'dragonstheme'),
         'section'  => 'maintenance_section',
         'settings' => 'maintenance_page',
      )
   ));
}

function publishMaintenancePage()
{
   $maintenance_enable = get_theme_mod('maintenance_enable');
   $maintenance_page = get_theme_mod('maintenance_page');
   if ($maintenance_enable  && $maintenance_page) {
      $my_post = array(
         'ID'           => $maintenance_page,
         'post_status'   => 'publish'
      );
      wp_update_post($my_post);
   }
}
add_action('customize_save_after', 'publishMaintenancePage');

add_action('template_redirect', 'redirect_non_logged_users_to_specific_page');

function redirect_non_logged_users_to_specific_page()
{

   $maintenance_enable = get_theme_mod('maintenance_enable');
   $maintenance_page = get_theme_mod('maintenance_page');
   if ($maintenance_enable  && $maintenance_page && !is_user_logged_in() && $maintenance_page != get_the_ID()) {
      wp_redirect(get_the_permalink($maintenance_page), 301);
      exit;
   }
}

add_filter('wp_insert_post_data', 'mark_post_private', '99', 2);
function mark_post_private($data, $postarr)
{

   $maintenance_enable = get_theme_mod('maintenance_enable');
   $maintenance_page = get_theme_mod('maintenance_page');
   $teamplate = $postarr['page_template'];

   if ((!$maintenance_enable or !$maintenance_page) and $teamplate  == 'templates/maintenance.php') {
      $data['post_status'] = 'draft';
   }

   return $data;
}
