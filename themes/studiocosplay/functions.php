<?php
// Environment flags
function is_live() {
    $rt = false;
    if (home_url() == 'https://www.studiocosplay.org') $rt = true;
    return $rt;
}

// Customzier
$here = dirname(__FILE__);
require_once $here . '/customizer/includes.php';

// Theme Capabilities activate
add_theme_support('post-thumbnails');

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
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>'
    )
);

// CDN hooks
function cdn($asset_uri) {
    $rt = '';
    if(! empty($asset_uri) ){
        $rt = $asset_uri;
    }

    if (is_live()) {
        $rt = '//cdn.studiocosplay.org' . $asset_uri;
    } elseif (home_url() == 'https://testing.studiocosplay.org') {
        $rt = '//cdn.testing.studiocosplay.org' . $asset_uri;
    }
    return $rt;
}
function cdn_url() {
    $dir = '/wp-content/uploads';
    $rt = $dir;

    if (is_live()) {
        $rt = '//cdn.studiocosplay.org' . $dir;
    } elseif (home_url() == 'https://testing.studiocosplay.org') {
        $rt = '//cdn.testing.studiocosplay.org' . $dir;
    }
    return $rt;
}
add_filter( 'pre_option_upload_url_path', 'cdn_url' );

