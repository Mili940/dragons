<?php

/**
 * Example template part
 */
$featured_img_url = get_the_post_thumbnail_url();
?>

<section class="maintenance-section bg-cover bg-center w-full" <?php echo $featured_img_url ?  'style="background-image: url(' . $featured_img_url . ')"' : ''; ?>>
   <div class="container">
      <header class="entry-header">
         <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
      </header><!-- .entry-header -->

      <div class="entry-content">
         <?php the_content(); ?>
      </div><!-- .entry-content -->

   </div>
</section><!-- #post-<?php the_ID(); ?> -->