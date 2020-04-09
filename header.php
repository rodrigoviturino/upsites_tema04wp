<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Tema 04 - Negocios Creativos</title>

    <?php wp_head(); ?>
    
</head>
<body>

<header class="header">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">

            <!-- Logo -->
            <?php 
                $img_logo = get_theme_mod('up_logo_header') ;
                    if(get_theme_mod('up_logo_header') ) : 
            ?>
                <a class="navbar-brand m-auto order-1 order-lg-2" href="<?php bloginfo('url');?> ">
                    <img src="<?= $img_logo ?> " class='' alt="<?php echo get_theme_mod('up_desc_logo_header'); ?> ">
                </a>
            <?php endif; ?>
            <!-- end Logo -->
        
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse order-3 order-md-2 justify-content-center " id="navbarSupportedContent">
                <?php 
                    if( has_nav_menu('main-menu') ) {
                        wp_nav_menu([
                            'theme_location' => 'main-menu',
                            'fallback_cb' => false,
                            'container_class' => null,
                            'container_id' => 'navbarResponsive',
                            'menu_class' => 'navbar-nav m-auto'
                        ]);
                    }
                ?>
            </div>
            <!-- end Menu -->

            <a class="navbar__btn-contact order-lg-3" href="#"><?= get_theme_mod('up_text_btn_header'); ?></a>   

        </nav>

    </div>

</header>
