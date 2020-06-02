<footer class="footer">

<section class="footer__logo">

  <div class="container">

    <!-- Logo -->
    <?php 
        $img_logo = get_theme_mod('up_logo_footer') ;
            if(get_theme_mod('up_logo_footer') ) : 
    ?>
      <a class="navbar-brand tt m-auto order-1 order-lg-2" href="<?php bloginfo('url');?> ">
          <img src="<?= $img_logo ?> " class='' alt="<?php echo get_theme_mod('up_desc_logo_footer'); ?> ">
      </a>
    <?php endif; ?>
    <!-- end Logo -->
  </div>
</section>

  <section class="footer-column">
    <div class="container">

    <div class="row">

      <div class="col-md-3 footer__contact">
        <!-- <h3 class="title"><?= get_theme_mod('up_title_contact_footer'); ?></h3> -->
      <?php
        $value = get_theme_mod( 'up_title_contact_footer', [] );

        if ( isset( $value['font-family'] ) ) {
          echo '<h3 class="title">' . get_theme_mod('up_title_contact_footer') .  sprintf( esc_html__( 'Font Family: %s', 'kirki' ), $value['font-family'] ) . '</h3>';
        } 
      ?>
        <h3 class="title" id="ttt"><?= get_theme_mod('up_title_contact_footer'); ?></h3>
        



        <ul class="list-unstyled">

          <li>
            <a href="#">
              <i class="fas fa-phone-alt"></i>
                <?= get_theme_mod('up_text_phone_contact_footer'); ?>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fas fa-map-marker-alt"></i>
              <?= get_theme_mod('up_text_local_contact_footer'); ?>
            </a>
          </li>

          <li>
            <a href="mailto: <?= get_theme_mod('up_link_email_contact_footer'); ?> ">
            <i class="fas fa-envelope"></i>
              <?= get_theme_mod('up_text_email_contact_footer'); ?>
            </a>
          </li>

        </ul>
      </div>

      <div class="col-md-3 footer__company">
        <h3 class="title"><?= get_theme_mod('up_title_company_footer'); ?></h3>

        <?php 
            if( has_nav_menu('footer-menu') ) {
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'fallback_cb' => false,
                    'container_class' => null,
                    'container_id' => 'navbarResponsive',
                    'menu_class' => 'navbar-nav menu'
                ));
            }
        ?>

      </div>

      <div class="col-md-2 footer__social">
        <h3 class="title"><?= get_theme_mod('up_title_social_footer'); ?></h3>
        <?php 
          if( has_nav_menu('footer-menu-social') ) {
              wp_nav_menu(array(
                  'theme_location' => 'footer-menu-social',
                  'fallback_cb' => false,
                  'container_class' => null,
                  'container_id' => 'navbarResponsive',
                  'menu_class' => 'navbar-nav menu'
              ));
          }
        ?>
      </div>
      
      <div class="col-md-4 footer__address">
        <h3 class="title"><?= get_theme_mod('up_title_address_footer'); ?></h3>
        <span class="local"><?= get_theme_mod('up_text_row1_address_footer'); ?></span> <br>
        <span class="estado"><?= get_theme_mod('up_text_row2_address_footer'); ?></span>
          <h3 class="title subtitle"><?= get_theme_mod('up_title_link_redesocial_footer'); ?></h3>
        <ul class="row list-unstyled">
          <li>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fab fa-skype"></i>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
          
          <li>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
    </div>
  </section>

  </div> 
  <!-- end Container -->
  <?php 
    $bg_footer = get_theme_mod('up_image_bg_footer');
  ?>

  <section class="footer__copyright" style='background-image:url( <?= $bg_footer ?>);' >
    <div class="container">
      <p class="text"> <?= get_theme_mod('up_copyright'); ?> - <?= get_theme_mod('up_company_copyright'); ?>  - <?= Date('Y'); ?></p>
    </div>
  </section>

</footer>

<!-- Scripts -->
<script type="text/javascript">
let menu = document.querySelector('.header');
let logo_stycky = document.querySelector(".navbar-brand");
let headerClassList = menu.classList;
let logoClassList = logo_stycky.classList;
console.log(headerClassList);


window.addEventListener('scroll', () => {
    if (window.scrollY >= 150) {
        if( !headerClassList.contains('scrollHide')) {
            headerClassList.add('scrollHide');
        }
    } else {
        headerClassList.remove('scrollHide');
    }
});

</script>
<!-- end Scripts -->

<?php wp_footer(); ?>

<style type="text/css">
/** Header */
  .header{
    background-color: <?= get_theme_mod('up_cor_principal_header'); ?>;
  }
  .header .navbar-nav .menu-item a {
    color: <?= get_theme_mod('up_cor_item_menu_header'); ?>;
  }
  .header .navbar-nav .menu-item a:hover {
    color: <?= get_theme_mod('up_cor_hover_item_menu_header'); ?>;
  }
  /* Precisa adicionar cor do botao que esta em gradient */
  .header .navbar__btn-contact {
    background-image: <?= get_theme_mod('up_cor_btn_header'); ?>;
    color: <?= get_theme_mod('up_cor_text_btn_header'); ?>;
  }
  .header .navbar__btn-contact:hover {
    color: <?= get_theme_mod('up_cor_hover_text_btn_header'); ?>;
  }
  .header.scrollHide {
    background-color: <?= get_theme_mod('up_cor_menu_sticky'); ?>;
  }
  .header.scrollHide .navbar-nav .menu-item a {
    color: <?= get_theme_mod('up_cor_text_menu_sticky'); ?>;
  }
  .header.scrollHide .navbar-nav .menu-item a:hover {
    color: <?= get_theme_mod('up_cor_hover_text_menu_sticky'); ?>;
  }
  /* botao */
  .header.scrollHide .navbar__btn-contact {
    color: <?= get_theme_mod('up_cor_text_btn_menu_sticky'); ?>;
  }
  .header.scrollHide .navbar__btn-contact:hover {
    color: <?= get_theme_mod('up_cor_text_hover_btn_menu_sticky'); ?>;
  }
  .header.scrollHide .navbar__btn-contact {
    background-image: <?= get_theme_mod('up_cor_btn_menu_sticky'); ?>;
  }
  .header.scrollHide .navbar__btn-contact:hover {
    background-image: <?= get_theme_mod('up_cor_hover_btn_menu_sticky'); ?>;
  }
/** Footer */
.footer-logo {
  background-color: <?= get_theme_mod('up_cor_fundo_logo_footer'); ?>;
}
.footer-column {
  background-color: <?= get_theme_mod('up_cor_fundo_column_footer'); ?>;
}
/*Contato*/
.footer__contact .title {
  color: <?= get_theme_mod('up_cor_title_contact_footer'); ?>;
}
  /** Telefone */
.footer__contact ul li a .fa-phone-alt {
  color: <?= get_theme_mod('up_cor_icon_number_footer'); ?>;
}
.footer__contact ul li a .fa-phone-alt:hover {
  color: <?= get_theme_mod('up_cor_hover_icon_number_footer'); ?>;
}
.footer__contact ul li a:first-child {
  color: <?= get_theme_mod('up_cor_text_number_footer'); ?>;
}
.footer__contact ul li a:first-child:hover {
  color: <?= get_theme_mod('up_cor_hover_text_number_footer'); ?> !important;
}
  /** Local */
.footer__contact ul li a .fa-map-marker-alt {
  color: <?= get_theme_mod('up_cor_icon_local_footer'); ?>;
}
.footer__contact ul li a .fa-map-marker-alt:hover {
  color: <?= get_theme_mod('up_cor_hover_icon_local_footer'); ?>;
}
.footer__contact ul li a:nth-child(2) {
  color: <?= get_theme_mod('up_cor_text_local_footer'); ?>;
}
.footer__contact ul li a:nth-child(2):hover {
  color: <?= get_theme_mod('up_cor_hover_text_local_footer'); ?>;
}
  /** Email */
.footer__contact ul li a .fa-envelope {
  color: <?= get_theme_mod('up_cor_icon_email_footer'); ?>;
}
.footer__contact ul li a .fa-envelope:hover {
  color: <?= get_theme_mod('up_cor_hover_icon_email_footer'); ?>;
}
.footer__contact ul li a:last-child {
  color: <?= get_theme_mod('up_cor_text_email_footer'); ?>;
}
.footer__contact ul li a:last-child:hover {
  color: <?= get_theme_mod('up_cor_text_email_footer'); ?>;
}


/*Empresa*/
.footer__company .title{
  color: <?= get_theme_mod('up_cor_title_company_footer'); ?>;
}
.footer__company ul li a {
  color: <?= get_theme_mod('up_cor_text_item_company_footer'); ?>;
}
.footer__company ul li a:hover {
  color: <?= get_theme_mod('up_cor_hover_text_item_company_footer'); ?>;
}

/*Rede Social*/
.footer__social .title {
  color: <?= get_theme_mod('up_cor_title_social_footer'); ?>;
}
.footer__social ul li a {
  color: <?= get_theme_mod('up_cor_text_item_social_footer'); ?>;
}
.footer__social ul li a:hover {
  color: <?= get_theme_mod('up_cor_hover_text_item_social_footer'); ?>;
}
/*Localidade*/
.footer__address .title {
  color: <?= get_theme_mod('up_cor_title_address_footer'); ?>;
}
.footer__address .local {
  color: <?= get_theme_mod('up_cor_text_local_address_footer'); ?>;
}
.footer__address .estado {
  color: <?= get_theme_mod('up_cor_text_state_address_footer'); ?>;
}
.footer__address .subtitle {
  color: <?= get_theme_mod('up_cor_text_subtitle_address_footer'); ?>;
}

</style>

</body>
</html>