<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <?php get_template_part('focos-header'); ?>
    <?php get_template_part('principal-menu'); ?>
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
    <main>
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_title('<h2>', '</h2>');
                the_content();
            endwhile;
        else:
            echo '<p>No hay contenido disponible</p>';
        endif;
        ?>
    </main>
    <?php get_template_part('focos-footer'); ?>
</body>
<script>
    // Tu código JavaScript personalizado aquí
    document.addEventListener('DOMContentLoaded', function () {
        console.log('Página cargada');
        const menuToggle = document.getElementById('focos-toggle-button');
        const mobileMenu = document.getElementById('focos-toggle-menu');

        menuToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('active');
        });
    });

</script>

</html>