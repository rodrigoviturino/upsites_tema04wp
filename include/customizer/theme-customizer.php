<?php
// Rede Social do Header e Footer
require get_template_directory().'/include/customizer/header-customizer.php';
require get_template_directory().'/include/customizer/header-color-customizer.php';

require get_template_directory().'/include/customizer/footer-customizer.php';
require get_template_directory().'/include/customizer/footer-color-customizer.php';

// Typography
// require get_template_directory().'/include/customizer/gp-premium/gp-premium.php';
require get_template_directory().'/include/customizer/teste-customizer.php';

function up_customize_register( $wp_customizer ){
    
    teste_customizer( $wp_customizer );

    up_header_customizer( $wp_customizer );
    up_color_header_customizer( $wp_customizer );
    up_footer_customizer( $wp_customizer );
    up_color_footer_customizer( $wp_customizer );

}