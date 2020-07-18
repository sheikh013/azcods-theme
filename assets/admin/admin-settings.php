<?php


/** 1. customize Panel path */
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path($path) {
    $path = get_stylesheet_directory() . '/assets/admin/panel/';
    return $path;
}

/** 2. customize Panel dir */
add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir($dir) {
    $dir = get_stylesheet_directory_uri() . '/assets/admin/panel/';
    return $dir;
}

/** 3. Hide Panel field group menu item | Hide = '__return_false'  |  Show= '__return_true' */
add_filter('acf/settings/show_admin', '__return_true');
//add_filter('acf/settings/show_admin', '__return_false');

/** 4. Include Panel */
include_once( get_stylesheet_directory() . '/assets/admin/panel/acf.php' );



/**
* Theme Setting Menu from ACF
*/

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
    'page_title' => 'Theme Settings',
    'menu_title' => 'Theme  Setting',
    'menu_slug' => 'theme_settings',
    'capability' => 'edit_posts',
    'icon_url' => 'dashicons-welcome-view-site',
    'redirect' => false,
    ));
}



/**
* Page Builder Backend and Frontend Setting
*
*
*/

/* LOADING STYLE AND JS : BACKEND     */
function skh_admin_init_builder(){
    add_action('admin_enqueue_scripts', 'skh_builder_scripts');
    function skh_builder_scripts(){
        wp_enqueue_style('skh_builder_css', get_template_directory_uri() . '/assets/admin/css/skh-admin-css.css' );
        wp_enqueue_script('skh_builder_js', get_template_directory_uri() . '/assets/admin/js/skh-admin-js.js', array('jquery'), '', true);
    }

}
add_action('admin_init', 'skh_admin_init_builder');




/* LOADING STYLE AND JS : FRONTEND IF NECESSARY     */
function sk_builder_front_end(){
    //wp_enqueue_style('sk_builder_front_css', get_template_directory_uri() . '/assets/css/vendor/sk-builder-front-end.css' );
}
add_action('wp_enqueue_scripts', 'sk_builder_front_end', 99);