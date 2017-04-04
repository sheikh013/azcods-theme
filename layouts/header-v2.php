<?php

?>

  <div id="skh-version__2">
    <nav class="menu menu--is-fixed">
      <div class="menu--wrapper">
        <div class="menu__brand">
          <?php
                $logo_img = get_field('logo_header', 'option');
                if (!empty($logo_img)):
                ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img class="img-responsive" src="<?php echo $logo_img['url']; ?>" alt="<?php echo $logo_img['alt']; ?>" /></a>
                        <?php else : {
                ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
                }
                endif;
                ?>
        </div>

        <div class="menu__list--wrapper">
          <?php
                wp_nav_menu(
                array(
                'theme_location' => 'header_menu',
                'container'       => false,
                'menu_id'      => '',
                'menu_class'         => 'menu__list',
                ));
                ?>
        </div>

      </div>

    </nav>

    <nav class="mobile-menu">

      <div class="mobile-menu--wrapper">
        <a href="#" class="anim-btn example5 toggleTopMenu-mobile"><span></span></a>

        <div class="mobile-menu__brand">
          <?php
                $logo_img = get_field('logo_header', 'option');
                if (!empty($logo_img)):
                ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img class="img-responsive" src="<?php echo $logo_img['url']; ?>" alt="<?php echo $logo_img['alt']; ?>" /></a>
                        <?php else : {
                ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
                }
                endif;
                ?>

        </div>


        <div class="mobile-menu__list--wrapper">
          <div class="mobile-menu__list">


            <?php

                $menuParameters = array(

                'container'       => false,
                'echo'            => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                );

                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                ?>
          </div>


          <span class="overlay"></span>

        </div>




      </div>
    </nav>
  </div>


  <script type="text/javascript">
    jQuery(document).ready(function($) {

      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 200) {
          $('.menu--is-fixed').addClass("scroll");

        } else {
          $('.menu--is-fixed').removeClass("scroll");
        }
      });


      $(".toggleTopMenu-mobile").click(function() {

        $('.mobile-menu__list').toggleClass("open-menu");
        $('.overlay').toggleClass("open-menu");


      });

    });
  </script>