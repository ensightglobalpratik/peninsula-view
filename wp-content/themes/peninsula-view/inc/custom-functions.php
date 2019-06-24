<?php
/******************
 * ACf Options Page
 ******************/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page( array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => true,
        'icon_url'   => 'dashicons-menu',
        'position'   => 60,
	) );
    acf_add_options_sub_page( array(
        'page_title'  => 'Theme Branding Settings',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-general-settings',
	) );
	acf_add_options_sub_page( array(
        'page_title'  => 'Theme Footer Settings',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-general-settings',
	) );
}
/*************
 * SVG filter
 **************/
function peninsula_view_cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'peninsula_view_cc_mime_types');
/*****************
 * custom logo url
 ******************/
function peninsula_view_loginpage_custom_link() {
    $home_url = home_url();
    return $home_url;
}
add_filter('login_headerurl', 'peninsula_view_loginpage_custom_link');
/***********************
 * Remove css js version
 ***********************/
function remove_cssjs_ver($src) {
    if (strpos($src, '?ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}

add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);
/*******************
 * get current year
 *******************/

function peninsula_view_current_year($atts) {
    return date('Y');
}

add_shortcode('year', 'peninsula_view_current_year');
/************************
 * Add Custom admin logo
 ***********************/
function peninsula_view_my_login_logo() {
    $admin_dashboard_logo = get_field('admin_dashboard_logo', 'option');
    echo '<style type="text/css">
		body{
                    background:#D4D0CB !important;
                    }
                    .login form{    background: #f3f3f3 !important;}
                    .login h1 a {
                    background-image: url(' . $admin_dashboard_logo . ') !important;
                    background-size: 336px auto !important;
                    width: auto !important;
		}
                body.login div#login form#loginform {
			border-radius: 3%;
			box-shadow: 0 2px 4px 6px rgba(0, 0, 0, 0.15);
		}

		body.login div#login p#nav a,
		body.login div#login p#backtoblog a {
			color: #ffffff;
		}

		body.login div#login p#nav a:hover,
		body.login div#login p#backtoblog a:hover {
			color: #ffb347;
		}

	</style>';
}

add_action('login_enqueue_scripts', 'peninsula_view_my_login_logo');
/********************
 * add favicon icon
 *******************/
function peninsula_view_favicon() {
    $favicon = get_field('website_favicon', 'option');
    echo '<link rel="shortcut icon" href="' . $favicon . '" type="image/x-icon" />';
    echo '<link rel="icon" href="' . $favicon . '" />';
}
add_action('wp_head', 'peninsula_view_favicon');
/*****************
 * Get option value
 ******************/
function get_option_value( $id ) {
	if ( function_exists( 'get_field' ) ):
		$val = get_field( $id, 'option' );
	endif;
	return $val;
}
