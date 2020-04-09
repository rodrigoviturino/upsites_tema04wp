<?php 
// Rede Social do Header

function up_header_customizer( $wp_customize ) {

    // Settings
    
    $wp_customize->add_setting('up_logo_header', ['default' => '']);
    $wp_customize->add_setting('up_desc_logo_header', ['default' => '']);
    $wp_customize->add_setting('up_text_btn_header', ['default' => '']);

    // Sections
    $wp_customize->add_section('up_header_section', [
        'title' => 'Header - Infos',
        'priority' => '1'
    ]);

    // Controllers

    // Infos

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,

            'up_logo_header',
                [
                    'label'=>'Logo Header',
                    'section' => 'up_header_section',
                    'settings' => 'up_logo_header' 
                ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_desc_logo_header',
                [
                    'label'=>'Descrição da Logo Header',
                    'section' => 'up_header_section',
                    'settings' => 'up_desc_logo_header',
                    'type' => 'text'  
                ]
        )
    );
        
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,

            'up_text_btn_header',
                [
                    'label'=>'Texto Botão Header',
                    'section' => 'up_header_section',
                    'settings' => 'up_text_btn_header',
                    'type' => 'text'  
                ]
        )
    );


}