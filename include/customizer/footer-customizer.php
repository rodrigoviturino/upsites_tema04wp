<?php 
// Footer informações das colunas

function up_footer_customizer( $wp_customize ) {
 
    // Settings 
    // Logo
    $wp_customize->add_setting( 'up_logo_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_desc_logo_footer', [ 'default' => "" ]);
    
    // Informações
        // Column Contato
    $wp_customize->add_setting( 'up_title_contact_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_phone_contact_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_local_contact_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_link_email_contact_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_email_contact_footer', [ 'default' => "" ]);

        // Column Empresa
    $wp_customize->add_setting( 'up_title_company_footer', [ 'default' => "" ]);

        // Column Social
    $wp_customize->add_setting( 'up_title_social_footer', [ 'default' => "" ]);

        // Column Address
    $wp_customize->add_setting( 'up_title_address_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_row1_address_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_text_row2_address_footer', [ 'default' => "" ]);
    $wp_customize->add_setting( 'up_title_link_redesocial_footer', [ 'default' => "" ]);    

    // Localização
    $wp_customize->add_setting('up_title_local', ['default' => '']);
    $wp_customize->add_setting('up_text_row1_address_footer', ['default' => '']);
    $wp_customize->add_setting('up_text_row2_address_footer', ['default' => '']);
    
    // Rede social Footer
    $wp_customize->add_setting('up_title_link_redesocial_footer', ['default' => '']);
    $wp_customize->add_setting('up_facebook_footer', ['default' => '']);
    $wp_customize->add_setting('up_twitter_footer', ['default' => '']);
    $wp_customize->add_setting('up_linkedin_footer', ['default' => '']);
    $wp_customize->add_setting('up_instagram_footer', ['default' => '']);

    // Copyright
    $wp_customize->add_setting('up_copyright', ['default' => '']);
    $wp_customize->add_setting('up_company_copyright', ['default' => '']);

    //Sections
    $wp_customize->add_section('up_footer_section', [
        'title' => 'Footer - Infos',
        'priority' => 2
    ]);

    //Controllers 
        $wp_customize->add_control(
            new WP_Customize_Image_Control (
                $wp_customize,

                'up_logo_footer',
                [
                    'label' => 'Logo Footer',
                    'section' => 'up_footer_section',
                    'settings' => 'up_logo_footer',
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_desc_logo_footer',
                [
                    'label' => 'Descrição Logo Footer',
                    'section' => 'up_footer_section',
                    'settings' => 'up_desc_logo_footer',
                    'type' => 'text' ,
                ]
            )
        );
    
        // Coluna Contato
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_contact_footer',
                [
                    'label' => 'Titulo Coluna Contato',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_contact_footer',
                    'type' => 'text' ,
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_text_phone_contact_footer',
                [
                    'label' => 'Numero telefone para contato',
                    'section' => 'up_footer_section',
                    'settings' => 'up_text_phone_contact_footer',
                    'type' => 'text' ,
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_text_local_contact_footer',
                [
                    'label' => 'Breve endereço',
                    'section' => 'up_footer_section',
                    'settings' => 'up_text_local_contact_footer',
                    'type' => 'text' ,
                ]
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_text_email_contact_footer',
                [
                    'label' => 'Email para contato',
                    'section' => 'up_footer_section',
                    'settings' => 'up_text_email_contact_footer',
                    'type' => 'text' ,
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_link_email_contact_footer',
                [
                    'label' => 'Confirme o email novamente',
                    'section' => 'up_footer_section',
                    'settings' => 'up_link_email_contact_footer',
                    'type' => 'text' ,
                ]
            )
        );
    
        // Coluna Empresa
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_company_footer',
                [
                    'label' => 'Titulo Coluna Empresa',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_company_footer',
                    'type' => 'text' ,
                ]
            )
        );
    
        // Coluna Rede Social
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_social_footer',
                [
                    'label' => 'Titulo Coluna Rede Social',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_social_footer',
                    'type' => 'text' ,
                ]
            )
        );
        // Column Localização
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_address_footer',
                [
                    'label' => 'Titulo Localização Footer',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_address_footer',
                    'type' => 'text' ,
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_text_row1_address_footer',
                [
                    'label' => 'Texto Endereço Primeira Linha',
                    'section' => 'up_footer_section',
                    'settings' => 'up_text_row1_address_footer',
                    'type' => 'textarea' ,
                ]
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_text_row2_address_footer',
                [
                    'label' => 'Texto Endereço Segunda Linha',
                    'section' => 'up_footer_section',
                    'settings' => 'up_text_row2_address_footer',
                    'type' => 'textarea' ,
                ]
            )
        );
 
        $wp_customize->add_control(
            new WP_Customize_Control (
                $wp_customize,
    
                'up_title_link_redesocial_footer',
                [
                    'label' => 'Titulo das redes sociais em localização',
                    'section' => 'up_footer_section',
                    'settings' => 'up_title_link_redesocial_footer',
                    'type' => 'text' ,
                ]
            )
        );
 
    
    // Rede Social Footer
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_title_link_redesocial_footer',
            [
                'label' => 'Titulo dos Links da Rede Social',
                'section' => 'up_footer_section',
                'settings' => 'up_title_link_redesocial_footer',
                'type' => 'text' ,
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_facebook_footer',
            [
                'label' => 'Link do Facebook',
                'section' => 'up_footer_section',
                'settings' => 'up_facebook_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_twitter_footer',
            [
                'label' => 'Link do Twitter',
                'section' => 'up_footer_section',
                'settings' => 'up_twitter_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_linkedin_footer',
            [
                'label' => 'Link do Linkedin',
                'section' => 'up_footer_section',
                'settings' => 'up_linkedin_footer',
                'type' => 'text' ,
            ]
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_instagram_footer',
            [
                'label' => 'Link do Instagram',
                'section' => 'up_footer_section',
                'settings' => 'up_instagram_footer',
                'type' => 'text' ,
            ]
        )
    );

    // Image Map
    $wp_customize->add_control(
        new WP_Customize_Image_Control (
            $wp_customize,

            'up_image_map',
            [
                'label' => 'Imagem do Mapa',
                'section' => 'up_footer_section',
                'settings' => 'up_image_map',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_desc_image_mapa',
            [
                'label' => 'Descrição da Imagem do Mapa',
                'section' => 'up_footer_section',
                'settings' => 'up_desc_image_mapa',
                'type' => 'text'
            ]
        )
    );

    // Copyright
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_copyright',
            [
                'label' => 'Descrição do copyright',
                'section' => 'up_footer_section',
                'settings' => 'up_copyright',
                'type' => 'text'
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control (
            $wp_customize,

            'up_company_copyright',
            [
                'label' => 'Nome da Empresa',
                'section' => 'up_footer_section',
                'settings' => 'up_company_copyright',
                'type' => 'text'
            ]
        )
    );

    

}