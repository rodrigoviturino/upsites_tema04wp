<?php 
// Footer informações das colunas

function up_color_footer_customizer( $wp_customize ) {
 
    // Settings 
        // Background Principal
        $wp_customize->add_setting( 'up_cor_fundo_logo_footer', ['default' => "$white" ]);

        $wp_customize->add_setting( 'up_cor_fundo_column_footer', ['default' => "#fff" ]);
        // Contato
        $wp_customize->add_setting( 'up_cor_title_contact_footer', ['default' => "#000" ]);
            // Telefone
        $wp_customize->add_setting( 'up_cor_icon_number_footer', ['default' => "$purple" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_number_footer', ['default' => "#000" ]);
        $wp_customize->add_setting( 'up_cor_text_number_footer', ['default' => "#777" ]);
        $wp_customize->add_setting( 'up_cor_hover_text_number_footer', ['default' => "#000" ]);
            // Local
        $wp_customize->add_setting( 'up_cor_icon_local_footer', ['default' => "$purple" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_local_footer', ['default' => "#000" ]);
        $wp_customize->add_setting( 'up_cor_text_local_footer', ['default' => "#777" ]);
        $wp_customize->add_setting( 'up_cor_hover_text_local_footer', ['default' => "#000" ]);
            // Email
        $wp_customize->add_setting( 'up_cor_icon_email_footer', ['default' => "$purple" ]);
        $wp_customize->add_setting( 'up_cor_hover_icon_email_footer', ['default' => "#000" ]);
        $wp_customize->add_setting( 'up_cor_text_email_footer', ['default' => "#777" ]);
        $wp_customize->add_setting( 'up_cor_hover_text_email_footer', ['default' => "#000" ]);
        // Empresa
        $wp_customize->add_setting( 'up_cor_title_company_footer', ['default' => "#000" ]);
        $wp_customize->add_setting( 'up_cor_text_item_company_footer', ['default' => "#777" ]);
        $wp_customize->add_setting( 'up_cor_hover_text_item_company_footer', ['default' => "#000" ]);
        // Rede Social
        $wp_customize->add_setting( 'up_cor_title_social_footer', ['default' => "#000" ]);
        $wp_customize->add_setting( 'up_cor_text_item_social_footer', ['default' => "#777" ]);
        $wp_customize->add_setting( 'up_cor_hover_text_item_social_footer', ['default' => "#000" ]);
        // Endereço
        $wp_customize->add_setting( 'up_cor_title_address_footer', ['default' => "#000" ]);
        $wp_customize->add_setting( 'up_cor_text_local_address_footer', ['default' => "#777" ]);
        $wp_customize->add_setting( 'up_cor_text_state_address_footer', ['default' => "#000" ]);
        $wp_customize->add_setting( 'up_cor_text_subtitle_address_footer', ['default' => "#000" ]);


        // Icones Rede Social
        // $wp_customize->add_setting( 'up_cor_icone_face_footer', ['default' => "#cacaca" ]);
        // $wp_customize->add_setting( 'up_cor_hover_icone_face_footer', ['default' => "#ffb600" ]);
        // $wp_customize->add_setting( 'up_cor_icone_twitter_footer', ['default' => "#cacaca" ]);
        // $wp_customize->add_setting( 'up_cor_hover_icone_twitter_footer', ['default' => "#ffb600" ]);
        // $wp_customize->add_setting( 'up_cor_icone_linkedin_footer', ['default' => "#cacaca" ]);
        // $wp_customize->add_setting( 'up_cor_hover_icone_linkedin_footer', ['default' => "#ffb600" ]);
        // $wp_customize->add_setting( 'up_cor_icone_insta_footer', ['default' => "#cacaca" ]);
        // $wp_customize->add_setting( 'up_cor_hover_icone_insta_footer', ['default' => "#ffb600" ]);


    //Sections
    $wp_customize->add_section('up_color_footer_section', [
        'title' => 'Footer - Cores ',
        'priority' => 4
    ]);


    //Controllers 

    // Color Background
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_logo_footer',
            [
                'label' => 'Cor Fundo Logo Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_fundo_logo_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_column_footer',
            [
                'label' => 'Cor Fundo Colunas do Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_fundo_column_footer',
            ]
        )
    );
    // Contato
        // Titulo Coluna
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_title_contact_footer',
            [
                'label' => 'Cor Titulo Contato',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_title_contact_footer',
            ]
        )
    );
    // Icon Telefone
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_number_footer',
            [
                'label' => 'Cor icone telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icon_number_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icon_number_footer',
            [
                'label' => 'Cor hover icone telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icon_number_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_number_footer',
            [
                'label' => 'Cor texto do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_number_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_text_number_footer',
            [
                'label' => 'Cor hover texto do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_text_number_footer',
            ]
        )
    );
    // Endereço
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_local_footer',
            [
                'label' => 'Cor Titulo Contato',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icon_local_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icon_local_footer',
            [
                'label' => 'Cor icone telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icon_local_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_local_footer',
            [
                'label' => 'Cor hover icone telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_local_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_text_local_footer',
            [
                'label' => 'Cor texto do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_text_local_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_text_number_footer',
            [
                'label' => 'Cor hover texto do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_text_number_footer',
            ]
        )
    );

    // Email
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icon_email_footer',
            [
                'label' => 'Cor Titulo Contato',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icon_email_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icon_email_footer',
            [
                'label' => 'Cor icone telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icon_email_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_email_footer',
            [
                'label' => 'Cor hover icone telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_email_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_text_email_footer',
            [
                'label' => 'Cor texto do telefone',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_text_email_footer',
            ]
        )
    );
    // Column Empresa
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_title_company_footer',
            [
                'label' => 'Cor Titulo Coluna Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_title_company_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_item_company_footer',
            [
                'label' => 'Cor texto dos itens Coluna Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_item_company_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_text_item_company_footer',
            [
                'label' => 'Cor hover texto dos itens Coluna Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_text_item_company_footer',
            ]
        )
    );
    // Column Rede Social
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_title_social_footer',
            [
                'label' => 'Cor Titulo Coluna Rede Social',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_title_social_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_item_social_footer',
            [
                'label' => 'Cor texto dos itens Coluna Rede Social',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_item_social_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_text_item_social_footer',
            [
                'label' => 'Cor hover texto dos itens Coluna Rede Social',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_text_item_social_footer',
            ]
        )
    );
    
    /** Localização */
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_title_address_footer',
            [
                'label' => 'Cor title coluna Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_title_address_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_local_address_footer',
            [
                'label' => 'Cor texto local coluna Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_local_address_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_state_address_footer',
            [
                'label' => 'Cor texto estado coluna Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_state_address_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_text_subtitle_address_footer',
            [
                'label' => 'Cor texto subtitulo coluna Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_text_subtitle_address_footer',
            ]
        )
    );



    // Rede Social
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_face_footer',
            [
                'label' => 'Cor Icone Facebook Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_face_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_face_footer',
            [
                'label' => 'Cor Hover Icone Facebook Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_face_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_twitter_footer',
            [
                'label' => 'Cor Icone Twitter Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_twitter_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_twitter_footer',
            [
                'label' => 'Cor Hover Icone Twitter Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_twitter_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_linkedin_footer',
            [
                'label' => 'Cor Icone Linkedin Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_linkedin_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_linkedin_footer',
            [
                'label' => 'Cor Hover Icone Linkedin Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_linkedin_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_insta_footer',
            [
                'label' => 'Cor Icone Instagram Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_insta_footer',
            ]
        )
    );
     $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_icone_insta_footer',
            [
                'label' => 'Cor Hover Icone Instagram Footer',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_icone_insta_footer',
            ]
        )
    );

    // Sessão About
    // Cor Principal About
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_principal_about_footer',
            [
                'label' => 'Cor Fundo Sobre Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_principal_about_footer',
            ]
        )
    );
    // Empresa
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_empresa_footer',
            [
                'label' => 'Cor Titulo Sobre Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_empresa_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_empresa_footer',
            [
                'label' => 'Cor Link dos itens Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_empresa_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_simbolo_link_empresa_footer',
            [
                'label' => 'Cor Simbolo dos itens Empresa',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_simbolo_link_empresa_footer',
            ]
        )
    );
    
    // Coluna Serviço
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_servico_footer',
            [
                'label' => 'Cor Titulo Serviço',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_servico_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_servico_footer',
            [
                'label' => 'Cor Link itens do Serviço',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_servico_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_simbolo_link_servico_footer',
            [
                'label' => 'Cor Simbolo itens do Serviço',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_simbolo_link_servico_footer',
            ]
        )
    );

    // Coluna Suporte
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_suporte_footer',
            [
                'label' => 'Cor Titulo Suporte',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_suporte_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_suporte_footer',
            [
                'label' => 'Cor Link itens do Suporte',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_suporte_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_simbolo_link_suporte_footer',
            [
                'label' => 'Cor Simbolo itens do Suporte',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_simbolo_link_suporte_footer',
            ]
        )
    );

    // Coluna Localização
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_titulo_local_footer',
            [
                'label' => 'Cor Titulo Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_titulo_local_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_link_local_footer',
            [
                'label' => 'Cor Link itens do Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_link_local_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_icone_local_footer',
            [
                'label' => 'Cor Icone da Localização',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_icone_local_footer',
            ]
        )
    );
    // Copyright
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_fundo_copyright_footer',
            [
                'label' => 'Cor Fundo Principal do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_fundo_copyright_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_borda_fundo_copyright_footer',
            [
                'label' => 'Cor Borda Fundo Principal do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_borda_fundo_copyright_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_texto_copyright_footer',
            [
                'label' => 'Cor Texto do copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_texto_copyright_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_empresa_copyright_footer',
            [
                'label' => 'Cor Nome da Empresa copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_empresa_copyright_footer',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'up_cor_hover_empresa_copyright_footer',
            [
                'label' => 'Cor Hover Nome da Empresa copyright',
                'section' => 'up_color_footer_section',
                'settings' => 'up_cor_hover_empresa_copyright_footer',
            ]
        )
    );


}