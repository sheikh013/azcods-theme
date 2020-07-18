<?php

// $defaults = array(
// 'theme_location'  => '',
// 'menu'            => '',
// 'container'       => 'div',
// 'container_class' => 'menu-{menu slug}-container',
// 'container_id'    => '',
// 'menu_class'      => 'menu',
// 'menu_id'         => '',
// 'echo'            => true,
// 'fallback_cb'     => 'wp_page_menu',
// 'before'          => '',
// 'after'           => '',
// 'link_before'     => '',
// 'link_after'      => '',
// 'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
// 'depth'           => 0,
// 'walker'          =>'',
// );


// wp_nav_menu(
//     array(
//     'theme_location' => 'header_menu',
//     'container'       => 'div',
//     'container_class' => 'skh-menu-container',
//     'menu_id'         => 'skh-menu',
// ));

?>


    <header id="skh-menu__wrapper">
      <nav id='skh-version__1'>
        <div class="logo"><a href="index.html">Logo Caption</a></div>
        <div id="head-mobile"></div>
        <div class="button"></div>

        <?php
            wp_nav_menu(
            array(
            'theme_location' => 'header_menu',
            'container'       => false,
            'menu_id'         => 'skh-menu',
            ));
            ?>
      </nav>
    </header>


