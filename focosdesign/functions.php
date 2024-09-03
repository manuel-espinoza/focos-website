<?php
function focosdesign_setup()
{
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal'),
        'menu-secondary' => __('Menú Secundario')
    ));
}
function get_logo_url_by_id($attachment_id)
{
    return wp_get_attachment_url($attachment_id);
}

add_action('after_setup_theme', 'focosdesign_setup');
