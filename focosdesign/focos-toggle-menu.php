<nav id="focos-toggle-menu" class="focos-toggle-menu">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'menu-principal',
        'container' => false,
        'menu_class' => 'focos-toggle-navigation-menu',
        'fallback_cb' => false,
    ));
    ?>
</nav>