<?php

/**
 * Block Name: Post
 *
 * This is the template that displays the post block.
 */

$title =  get_field('title');
$body =  get_field('body');
$summary =  get_field('summary');
$link = get_field('link');
$image = get_field('image');
$image_position = get_field('position_image');
$text_color = get_field('text_color');
$link_bg_color = get_field('link_bg_color');

$bg_color_1 = get_field('bg_color_1');
$bg_color_2 = get_field('bg_color_2');

?>

<section class="text-image" style="background: linear-gradient(to right bottom, <?php echo $bg_color_1 ?>, <?php echo $bg_color_2 ? $bg_color_2 : $bg_color_1 ?>);">
    <div class="container" style="color: <?php echo $text_color ?>; ">
        <div class="text-image--wrapper image-position-<?php echo $image_position ? 'left' : 'right' ?>">

            <div class="text-image--content">
                <?php if ($title) : ?>
                    <div class="title">
                        <h2><?php echo $title ?></h2>
                    </div>
                <?php endif; ?>

                <?php if ($summary) : ?>
                    <div class="summary-text">
                        <?php echo $summary ?>
                    </div>
                <?php endif; ?>

                <?php if ($body) : ?>
                    <div class="body-text"><?php echo $body ?></div>
                <?php endif; ?>

                <?php if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <div>
                        <a class="btn" style="background: <?php echo $link_bg_color ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="text-image--image">
                <figure>
                    <?php echo wp_get_attachment_image($image["id"], "full"); ?>
                </figure>
            </div>
        </div>
    </div>
</section>