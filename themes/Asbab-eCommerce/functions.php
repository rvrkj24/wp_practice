<?php

function asbab_ecommerce() {

    wp_enqueue_script('asbab-modernizer-js', get_template_directory_uri() .'/js/vendor/modernizr-3.5.0.min.js', array(), true);
    wp_enqueue_script('asbab-jquery-latest', get_template_directory_uri() .'/js/vendor/jquery-3.2.1.min.js', array(), true);
    wp_enqueue_script('asbab-bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array(), true);
    wp_enqueue_script('asbab-all-plugin-js', get_template_directory_uri() .'/js/plugins.js', array(), true);
    wp_enqueue_script('asbab-slick-js', get_template_directory_uri() .'/js/slick.min.js', array(), true);
    wp_enqueue_script('asbab-carousel-js', get_template_directory_uri() .'/js/owl.carousel.min.js', array(), true);
    wp_enqueue_script('asbab-waypoints-js', get_template_directory_uri() .'/js/waypoints.min.js', array(), true);
    wp_enqueue_script('main-asbab-js', get_theme_file_uri('/js/main.js'));

    wp_enqueue_style('asbab-bootstrap-min', get_template_directory_uri() .'/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('asbab-carousel-min', get_template_directory_uri(). '/css/owl.carousel.min.css', array(), null, 'all');
    wp_enqueue_style('asbab-theme-default-min', get_template_directory_uri(). '/css/owl.theme.default.min.css', array(), null, 'all');
    wp_enqueue_style('asbab-core-style', get_template_directory_uri(). '/css/core.css', array(), null, 'all');
    wp_enqueue_style('asbab-theme-shortcodes', get_template_directory_uri(). '/css/shortcode/shortcodes.css', array(), null, 'all');
    wp_enqueue_style('asbab_ecommerce_main_styles', get_stylesheet_uri());
    wp_enqueue_style('asbab-responsive-style', get_template_directory_uri(). '/css/responsive.css', array(), null, 'all');
    wp_enqueue_style('asbab-custom-style', get_template_directory_uri(). '/css/custom.css', array(), null, 'all');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Poppins:300,400,400i,500,600,700,800');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

}
add_action('wp_enqueue_scripts','asbab_ecommerce');

function asbab_dynamicnav() {
    register_nav_menu('AsbabMenuLocation', 'Asbab Menu Location');
    register_nav_menu('AsbabFooterLocationOne', 'Asbab Footer Location One');
    register_nav_menu('AsbabFooterLocationTwo', 'Asbab Footer Location Two');
    register_nav_menu('AsbabFooterLocationThree', 'Asbab Footer Location Three');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'asbab_dynamicnav');

?>

