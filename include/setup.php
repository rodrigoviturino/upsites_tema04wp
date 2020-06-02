<?php

function up_theme_styles(){
    $version = date('hmi');

    // CSS
        wp_enqueue_style('theme_css', get_template_directory_uri() . '/public/theme.min.css', [] , $version, false);
        wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/public/fonts/fonts.css', [] , $version, false);

    // JAVASCRIPT
        wp_enqueue_script('up_jquery_js', get_template_directory_uri() . '/src/js/libs/jquery-3.4.1.min.js', [], true);
        wp_enqueue_script('up_theme_js', get_template_directory_uri() . '/public/theme.min.js', ['up_jquery_js'], true);
}


// Menu
function up_after_setup(){
    // Thumbnails
    add_theme_support('post-thumbnails');

    register_nav_menu('main-menu', ('Menu Principal') );
    register_nav_menu('footer-menu', ('Footer Menu') );
    register_nav_menu('footer-menu-social', ('Social Menu Footer') );


    Kirki::add_config( $config_id, $args );

    Kirki::add_config( 'theme_config_id', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );
    
}