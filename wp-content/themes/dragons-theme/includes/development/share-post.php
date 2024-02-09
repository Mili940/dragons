<?php

/**************************************************
 * Share posts on social media
 **************************************************/
function the_share_post_links()
{
?>
   <div class="share-buttons">
      <div class="share-links-wrapper">
         <!-- Facebook -->
         <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" title="<?php _e('Share on Facebook', 'dragonstheme') ?>" target="_blank" class="btn btn-facebook">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/facebook.svg" alt="<?php _e('Share on Facebook', 'dragonstheme') ?>">
         </a>
         <!-- Twitter -->
         <a href="https://twitter.com/share?text=<?php the_title(); ?>&url=<?php echo get_the_permalink(); ?>" title="<?php _e('Share on Twitter', 'dragonstheme') ?>" target="_blank" class="btn btn-twitter">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/twitter.svg" alt="<?php _e('Share on Twitter', 'dragonstheme') ?>">
         </a>
         <!-- LinkedIn -->
         <a href="https://www.linkedin.com/sharing/share-offsite?url=<?php echo urlencode(get_the_permalink()); ?>" title="<?php _e('Share on LinkedIn', 'dragonstheme') ?>" target="_blank" class="btn btn-linkedin">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/linkedin.svg" alt="<?php _e('Share on LinkedIn', 'dragonstheme') ?>">
         </a>
         <!-- Pinterest -->
         <a href="http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink(); ?>&description=<?php the_title(); ?>" class="btn btn-pinterest" title="<?php _e('Share on Pinterest', 'dragonstheme') ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/pinterest.svg" alt="<?php _e('Share on Pinterest', 'dragonstheme') ?>">
         </a>
         <!-- Xing -->
         <a href="https://www.xing.com/spi/shares/new?url=<?php echo urlencode(get_the_permalink()) ?>" class="btn btn-xing" title="<?php _e('Share on Xing', 'dragonstheme') ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/xing.svg" alt="<?php _e('Share on Xing', 'dragonstheme') ?>">
         </a>
         <!-- Email -->
         <a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_title(); ?> <?php echo get_the_permalink(); ?>" class="btn btn-email" title="<?php _e('Share on Email', 'dragonstheme') ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-svgs/envelope.svg" alt="<?php _e('Share on Email', 'dragonstheme') ?>">
         </a>
      </div>
   </div>
<?php
}
