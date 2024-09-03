<footer class="focos-site-footer">
    <div class="focos-site-footer-logo">
        <div class="focos-footer-logo">
            <img src="<?php echo get_logo_url_by_id(19); ?>" alt="focos footer logo" />
        </div>
        <div class="focos-site-footer-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container' => false,
                'menu_class' => 'focos-footer-menu',
                'fallback_cb' => false,
            ));
            ?>
        </div>
        <div class="focos-site-footer-menu">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-secondary',
                'container' => false,
                'menu_class' => 'focos-footer-menu-secondary',
                'fallback_cb' => false,
            ));
            ?>
        </div>
        <div class="focos-site-footer-copyright">
            <p class="copyright-text">
                © Copyright <?php echo date('Y'); ?>, <?php bloginfo('name'); ?> El Salvador, Todos los derechos
                reservados.
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>