<header id="site-header" class="site-header">
   <div class="container">
      <div class="logo-menu-wrapper">
         <div class="site-logo-description">
            <div class="site-logo">
               <?php the_custom_logo(); ?>
            </div>
             
         </div>
         <!--#site-navigation menu animations: anim-left, anim-right, anim-top, anim-popup -->
         <nav id="site-navigation" class="main-navigation anim-left" role="navigation">
            <span class="hamburger menu-toggle">
               <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
               </span>
            </span>
            <div class="main-navigation-primary">
               <?php wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'menu_id'        => 'primary-menu',
                  'menu_class'     => 'main-header-menu'
               )); ?>
            </div>

         </nav><!-- #site-navigation -->
      </div>
   </div>
</header><!-- #site-header -->