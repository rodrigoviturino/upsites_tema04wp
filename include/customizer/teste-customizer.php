<?php 

function teste_customizer( $wp_customize ){

    Kirki::add_config( 'theme_config_id', array(
        'capability'    => 'edit',
        'option_type'   => 'theme_mod',
    ) );
    
    Kirki::add_panel( 'painel_id', array(
        'priority'    => 10,
        'title'       => esc_html__( 'Typography', 'kirki' ),
        'description' => esc_html__( 'My panel description', 'kirki' ),
    ) );


    Kirki::add_section( 'section_id', array(
        'title'          => esc_html__( 'Editar Texto', 'kirki' ),
        'description'    => esc_html__( 'My section description.', 'kirki' ),
        'panel'          => 'painel_id',
        'priority'       => 160,
    ) );

    // Kirki::add_field( 'section_teste', ['teste'] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'typography',
        'settings'    => 'painel_id',
        'label'       => esc_html__( 'Control Label', 'kirki' ),
        'section'     => 'section_id',
        'default'     => [
            'font-family'    => 'Roboto',
            'variant'        => 'regular',
            'font-size'      => '14px',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'color'          => '#333333',
            'text-transform' => 'none',
            'text-align'     => 'left',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ] );

    // Kirki::add_field( 'my_config', [
    //     'type'        => 'select',
    //     'settings'    => 'painel_id',
    //     'label'       => esc_html__( 'This is the label', 'kirki' ),
    //     'section'     => 'section_id',
    //     'default'     => [ 'option-1' ],
    //     'priority'    => 10,
    //     'multiple'    => 999,
    //     'choices'     => [
    //         'option-1' => esc_html__( 'Option 1', 'kirki' ),
    //         'option-2' => esc_html__( 'Option 2', 'kirki' ),
    //         'option-3' => esc_html__( 'Option 3', 'kirki' ),
    //         'option-4' => esc_html__( 'Option 4', 'kirki' ),
    //     ],
    // ] );

}