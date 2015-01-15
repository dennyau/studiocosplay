<?php

// Core theme uris
$theme_dir = get_stylesheet_directory_uri();
$img_dir = $theme_dir . '/img/';
$js_dir = $theme_dir . '/js/';

/*
 * Helper Functions
 */
function theme_img($img_file) {
    $rt = '';
    if (! empty($img_file)) {
        $rt = $img_dir . $img_file;
    }
    return $rt;
}

function theme_js($js_file) {
    $rt = '';
    if (! empty($js_file)) {
        $rt = $js_dir . $js_file;
    }
    return $rt;
}

// Custom Page Titles
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Studio Cosplay' );
  }
  return $title . ' | Studio Cosplay';
}

// Custom Menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Widget Sidebars
register_sidebar(
    array(
        'id'            => 'homepage-recentposts-widgets',
        'name'          => 'Homepage Recent Posts slot',
        'description'   => 'Homepage Recent Posts slot',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    )
);
