<?php 
// Footer informações das colunas

function up_color_header_customizer( $wp_customize ) {
 
    // Settings 
        // Row Top
        //Background Topo
        // $wp_customize->add_setting( 'up_cor_fundo_rowTop_header', ['default' => "linear-gradient(135deg,#222 26%,#222 75%,#eba800 75%)" ]);
                    
        $wp_customize->add_setting('up_cor_principal_header', ['default' => '']);
        $wp_customize->add_setting('up_cor_item_menu_header', ['default' => '#666']);
        $wp_customize->add_setting('up_cor_hover_item_menu_header', ['default' => '#666']);
        // $wp_customize->add_setting('up_cor_btn_header', ['default' => '']);
        // botao
        $wp_customize->add_setting('up_cor_text_btn_header', ['default' => '#fff']);        
        $wp_customize->add_setting('up_cor_hover_text_btn_header', ['default' => '#fff']);        

        // Menu Sticky
        $wp_customize->add_setting('up_cor_menu_sticky', ['default' => '#fff']);        
        $wp_customize->add_setting('up_cor_text_menu_sticky', ['default' => '#fff']);        
        $wp_customize->add_setting('up_cor_hover_text_menu_sticky', ['default' => '#fff']);        
        $wp_customize->add_setting('up_cor_text_btn_menu_sticky', ['default' => '#fff']);        
        $wp_customize->add_setting('up_cor_text_hover_btn_menu_sticky', ['default' => '#fff']);        
        $wp_customize->add_setting('up_cor_btn_menu_sticky', ['default' => '#fff']);        
        $wp_customize->add_setting('up_cor_hover_btn_menu_sticky', ['default' => '#fff']);        
        

    //Sections
    $wp_customize->add_section('up_color_header_section', [
        'title' => 'Header - Cores ',
        'priority' => 2
    ]);


    //Controllers 
     // Infos


        // Row Top - Rede Social 
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_principal_header',
                    [
                        'label'=>'Cor Principal Header',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_principal_header',
                
                    ]
            )
        );
        
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_item_menu_header',
                    [
                        'label'=>'Cor Item do menu',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_item_menu_header',
                    ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_hover_item_menu_header',
                    [
                        'label'=>'Cor Hover Item do menu',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_hover_item_menu_header',
                    ]
            )
        );
        // Botao
        // $wp_customize->add_control(
        //     new WP_Customize_Color_Control(
        //         $wp_customize,
    
        //         'up_cor_btn_header',
        //             [
        //                 'label'=>'Cor Fundo do Botão Header',
        //                 'section' => 'up_color_header_section',
        //                 'settings' => 'up_cor_btn_header',
        //             ]
        //     )
        // );
        
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_text_btn_header',
                    [
                        'label'=>'Cor Texto do Botão Header',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_text_btn_header',
                    ]
            )
        );
        
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_hover_text_btn_header',
                    [
                        'label'=>'Cor Hover Texto do Botão Header',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_hover_text_btn_header',
                    ]
            )
        );
        
        // Menu Sticky
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_menu_sticky',
                    [
                        'label'=>'Cor Fundo Menu Sticky',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_menu_sticky',
                    ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_text_menu_sticky',
                    [
                        'label'=>'Cor Texto do Menu Sticky',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_text_menu_sticky',
                    ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_hover_text_menu_sticky',
                    [
                        'label'=>'Cor Hover Texto do Menu Sticky',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_hover_text_menu_sticky',
                    ]
            )
        );
        //botao
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_btn_menu_sticky',
                    [
                        'label'=>'Cor Botão do Menu Sticky',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_btn_menu_sticky',
                    ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_hover_btn_menu_sticky',
                    [
                        'label'=>'Cor Hover Botão do Menu Sticky',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_hover_btn_menu_sticky',
                    ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_text_btn_menu_sticky',
                    [
                        'label'=>'Cor Texto do Botão do Menu Sticky',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_text_btn_menu_sticky',
                    ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
    
                'up_cor_text_hover_btn_menu_sticky',
                    [
                        'label'=>'Cor Hover Texto do Botão do Menu Sticky',
                        'section' => 'up_color_header_section',
                        'settings' => 'up_cor_text_hover_btn_menu_sticky',
                    ]
            )
        );




}