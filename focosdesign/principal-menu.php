<nav class="focos-site-navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'menu-principal',
        'container' => false,
        'menu_class' => 'focos-site-navigation-menu',
        'fallback_cb' => false,
    ));
    ?>
</nav>