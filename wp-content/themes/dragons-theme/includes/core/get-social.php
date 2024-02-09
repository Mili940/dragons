<?php

/**************************************************
 * Call social media from customizer
 **************************************************/
function get_theme_social()
{

    $socials =  [
        [
            'label' => 'Facebook',
            'img' => 'theme_fb_media_img',
            'url' => 'theme_fb_media_url',
            'basetheme_url' => 'https://www.facebook.com/',
            'basetheme_icon' => '<i class="icon-Facebook"></i>',
        ],
        [
            'label' => 'Instagram',
            'img' => 'theme_insta_media_img',
            'url' => 'theme_insta_media_url',
            'basetheme_url' => 'https://www.instagram.com/',
            'basetheme_icon' => '<i class="icon-Instagram"></i>',
        ],
        [
            'label' => 'Twitter',
            'img' => 'theme_tw_media_img',
            'url' => 'theme_tw_media_url',
            'basetheme_url' => 'https://twitter.com/',
            'basetheme_icon' => '<i class="icon-Twitter"></i>',
        ],
        [
            'label' => 'LinkedIn',
            'img' => 'theme_in_media_img',
            'url' => 'theme_in_media_url',
            'basetheme_url' => 'https://www.linkedin.com/',
            'basetheme_icon' => '<i class="icon-LinkedIn"></i>',
        ],
        [
            'label' => 'YouTube',
            'img' => 'theme_yt_media_img',
            'url' => 'theme_yt_media_url',
            'basetheme_url' => 'https://www.youtube.com/',
            'basetheme_icon' => '<i class="icon-YouTube"></i>',
        ],
        [
            'label' => 'Google',
            'img' => 'theme_g_media_img',
            'url' => 'theme_g_media_url',
            'basetheme_url' => 'https://www.google.com/',
            'basetheme_icon' => '<i class="icon-Google"></i>',
        ],
        [
            'label' => 'Snapchat',
            'img' => 'theme_snap_media_img',
            'url' => 'theme_snap_media_url',
            'basetheme_url' => 'https://www.snapchat.com/',
            'basetheme_icon' => '<i class="icon-Snapchat"></i>',
        ],
        [
            'label' => 'Tumblr',
            'img' => 'theme_tumblr_media_img',
            'url' => 'theme_tumblr_media_url',
            'basetheme_url' => 'https://www.tumblr.com/',
            'basetheme_icon' => '<i class="icon-Tumblr"></i>',
        ],
        [
            'label' => 'Pinterest',
            'img' => 'theme_pinterest_media_img',
            'url' => 'theme_pinterest_media_url',
            'basetheme_url' => 'https://www.pinterest.com/',
            'basetheme_icon' => '<i class="icon-Pinterest"></i>',
        ],
        [
            'label' => 'Reddit',
            'img' => 'theme_reddit_media_img',
            'url' => 'theme_reddit_media_url',
            'basetheme_url' => 'https://www.reddit.com/',
            'basetheme_icon' => '<i class="icon-Reddit"></i>',
        ],
        [
            'label' => 'Behance',
            'img' => 'theme_behance_media_img',
            'url' => 'theme_behance_media_url',
            'basetheme_url' => 'https://www.behance.net/',
            'basetheme_icon' => '<i class="icon-Behance"></i>',
        ],
        [
            'label' => 'Xing',
            'img' => 'theme_xing_media_img',
            'url' => 'theme_xing_media_url',
            'basetheme_url' => 'https://www.xing.com/',
            'basetheme_icon' => '<i class="icon-Xing"></i>',
        ],
    ];

    $string = '';
    $string .= '<div class="social-wrapper">';
    $string .= '<ul class="social-list">';

    foreach ($socials as $key => $social) {
        if (get_theme_mod($social['url'])) {
            $url = get_theme_mod($social['url']);
            $basetheme_url = $social['basetheme_url'];

            if ($url != $basetheme_url and $url != '') {
                $img = get_theme_mod($social['img']);
                $default_icon = $social['basetheme_icon'];
                $label = $social['label'];

                $icon =  $img and $img != '' and $img != null ? '<img src="' . $img . '" alt="' . $label . '" />' : $default_icon;

                $string .= '<li class="social-item social-item-' . strtolower($social['label']) . '">';
                $string .= '<a class="social-link" href="' . $url . '">';
                $string .= '<span class="social-icon">';
                if ($img) {
                    $string .= '<img class="convert-svg" src="' . $img . '" alt="' . $label . '" />';
                } else {
                    $string .= $default_icon;
                }
                $string .= '</span>';
                $string .= '</a>';
                $string .= '</li>';
            }
        }
    }
    $string .= '</ul>';
    $string .= '</div>';
    return $string;
}
function the_theme_social()
{
    echo get_theme_social();
}
