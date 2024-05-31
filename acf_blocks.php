<?php

add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
// check function exists
    if (function_exists('acf_register_block')) {

        acf_register_block(array(
            'name' => 'evento-corporativo',
            'title' => __('Evento Corporativo'),
            'description' => __('Evento corporativo, texto más imagenes.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'section-texto',
            'title' => __('Sección Texto'),
            'description' => __('Titulo + descripción + CTA'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'banner',
            'title' => __('Banner'),
            'description' => __('Custom Banner/Header.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
        ));

        acf_register_block(array(
            'name' => 'products',
            'title' => __('Productos'),
            'description' => __('Product Grid.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
        ));

        acf_register_block(array(
            'name' => 'map',
            'title' => __('Google Map'),
            'description' => __('Google Map Section.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
        ));

        acf_register_block(array(
            'name' => 'big-banner',
            'title' => __('Banner Gran'),
            'description' => __('Banner video.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
        ));
    }
}

function my_acf_block_render_callback($block)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
        include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
    }
}