<?php
/**
 * sondevela functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sondevela
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sondevela_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on sondevela, use a find and replace
        * to change 'sondevela' to the name of your theme in all the template files.
        */
    load_theme_textdomain('sondevela', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'sondevela'),
            'menu-footer' => esc_html__('Footer', 'sondevela'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'sondevela_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'sondevela_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sondevela_content_width()
{
    $GLOBALS['content_width'] = apply_filters('sondevela_content_width', 640);
}

add_action('after_setup_theme', 'sondevela_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sondevela_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'sondevela'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'sondevela'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'sondevela_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sondevela_scripts()
{
    wp_enqueue_style('sondevela-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('sondevela-style', 'rtl', 'replace');

    wp_enqueue_script('sondevela-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('sondevela', get_template_directory_uri() . '/js/sondevela.js', array(), _S_VERSION, true);

    if (is_product_category()) {
        wp_enqueue_script('sondevela-category', get_template_directory_uri() . '/js/sondevela-category.js', array(), _S_VERSION, true);
    }

    if (is_page_template('copa-america-home-template.php') || is_page_template('copa-america-m-template.php') || is_page_template('copa-america-f-template.php') || is_page_template('copa-america-alquiler-template.php')) {
        wp_enqueue_script('evocalendar', get_template_directory_uri(). '/js/evo-calendar.min.js', array(), _S_VERSION, true);
        wp_enqueue_script('copa-america-home', get_template_directory_uri() . '/js/copa-america-home.js', array(), _S_VERSION, true);
    }

    if (is_product()) {
        wp_enqueue_script('sondevela-product', get_template_directory_uri() . '/js/sondevela-product.js', array(), _S_VERSION, true);
        wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), _S_VERSION, true);
        wp_enqueue_script('imagesLoaded', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), _S_VERSION, true);

    }

    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array(), _S_VERSION, true);
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), _S_VERSION);
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), _S_VERSION);

    wp_enqueue_style('sondevela-custom', get_template_directory_uri() . '/css/main.css', array(), _S_VERSION);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'sondevela_scripts');

function enqueue_admin_scripts_and_styles()
{
    wp_enqueue_script('admin-scripts', get_template_directory_uri() . '/js/admin_custom.js', array('wp-blocks', 'wp-element', 'wp-hooks'), '', true);
}

add_action('admin_enqueue_scripts', 'enqueue_admin_scripts_and_styles');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

add_action('after_setup_theme', 'theme_setup');
function theme_setup()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
	    'page_title' => __('Reviews'),
	    'menu_title'    => __('Sondevela Reviews'),
	    'menu_slug'     => 'sondevela-reviews',
		'capability'    => 'edit_posts',
		'redirect'      => false,
		'icon_url' => 'dashicons-star-half',
		'updated_message' => __("Reviews actualizadas", 'sondevela'),
	    )
    );
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
            'page_title' => __('Sondevela Options'),
            'menu_title'    => __('Sondevela Options'),
            'menu_slug'     => 'sondevela-options',
            'capability'    => 'edit_posts',
            'redirect'      => false,
            'icon_url' => 'dashicons-performance',
            'updated_message' => __("Opciones actualizadas", 'sondevela'),
        )
    );
    acf_add_options_sub_page(array(
        'page_title'    => 'Redes Sociales',
        'menu_title'    => 'Redes Sociales',
        'menu_slug'     => 'sondevela-redes',
        'parent_slug'   => 'sondevela-options',
    ));
}

function sondevela_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'sondevela_add_woocommerce_support');

add_filter('block_categories_all', function ($categories) {
    $categories[] = array(
        'slug' => 'sondevela-gutenberg',
        'title' => 'Sondevela'
    );
    return $categories;
});

add_action('admin_head', 'block_backend');
function block_backend()
{
    wp_enqueue_style('block-editor-custom', get_stylesheet_directory_uri() . '/css/admin.css', array(), null);
}

function mytraining_widgets_init()
{
    register_sidebar(array(
            'name' => 'Footer Description',
            'id' => 'footer_widget_1',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(array(
            'name' => 'Footer Social Networks',
            'id' => 'footer_widget_2',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(array(
            'name' => 'Footer Widget Menu Area 1',
            'id' => 'footer_widget_3',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(array(
            'name' => 'Footer Widget Menu Area 2',
            'id' => 'footer_widget_4',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(array(
            'name' => 'Footer Widget Menu Area 3',
            'id' => 'footer_widget_5',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(array(
            'name' => 'Footer Widget Menu Area 4',
            'id' => 'footer_widget_6',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(array(
            'name' => 'Footer Widget Menu Area 5 (NO)',
            'id' => 'footer_widget_7',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );

    register_sidebar(array(
            'name' => 'Footer Widget Menu Area 6 (NO)',
            'id' => 'footer_widget_8',
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '',
            'after_title' => '',
        )
    );
}

add_action('widgets_init', 'mytraining_widgets_init');

add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {

        acf_register_block(array(
            'name' => 'sondevela-section-text',
            'title' => __('Sección Texto'),
            'description' => __('Bloque para mostrar texto + titulo + CTA.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-text2',
            'title' => __('Sección Texto 2'),
            'description' => __('Bloque para mostrar texto + titulo + CTA.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-text3',
            'title' => __('Sección Texto 3'),
            'description' => __('Bloque para mostrar texto + titulo + CTA.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-text4',
            'title' => __('Sección Texto 4'),
            'description' => __('Bloque para mostrar texto + titulo + CTA + Imagen de fondo'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-products',
            'title' => __('Sección Productos'),
            'description' => __('Bloque para mostrar productos'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-experiencias',
            'title' => __('Sección Experiencia'),
            'description' => __('Bloque para mostrar una Experiencia'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-conoce-slider',
            'title' => __('Sección Conoce + Slider'),
            'description' => __('Bloque para mostrar una Slider de imagenes'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-sostenibilidad',
            'title' => __('Sección Sostenibilidad'),
            'description' => __('Bloque para mostrar la info sobre Sostenibilidad'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-numbers',
            'title' => __('Sección Numeros'),
            'description' => __('Bloque para mostrar listado numerado'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-intro',
            'title' => __('Sección Intro'),
            'description' => __('Bloque para mostrar intro de productos'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-icons2',
            'title' => __('Sección Icons 2 (Alquiler)'),
            'description' => __('Bloque para mostrar iconos en producto alquiler'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-text-simple',
            'title' => __('Sección Texto Simple'),
            'description' => __('Bloque para mostrar un texto simple'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-listed-img-text',
            'title' => __('Sección info Sondevela'),
            'description' => __('Bloque para mostrar info de Sondevela'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-marcas',
            'title' => __('Sección Marcas'),
            'description' => __('Bloque para mostrar un las marcas que usan Sondevela'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-nosotros',
            'title' => __('Sección Nosotros'),
            'description' => __('Bloque para información "Sobre Nosotros"'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-evento',
            'title' => __('Sección Evento'),
            'description' => __('Bloque para mostrar eventos corporativos'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-formulario',
            'title' => __('Sección Formulario'),
            'description' => __('Bloque para mostrar texto + formulario'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-sobre-nosotros',
            'title' => __('Sección Sobre Nosotros'),
            'description' => __('Bloque para mostrar info principal de la pàgina sobre nosotros'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-text5',
            'title' => __('Sección Texto 5'),
            'description' => __('Bloque principal de Alquiler de barco para eventos corporativos'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-intro2',
            'title' => __('Sección Intro 2 (Evento Corporativo)'),
            'description' => __('Bloque principal de Eventos corporativos'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-extras',
            'title' => __('Sección Extras'),
            'description' => __('Bloque para mostrar los extras (servicios adiconales)'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));

        acf_register_block(array(
            'name' => 'sondevela-section-text6',
            'title' => __('Sección Texto 6 '),
            'description' => __('Bloque para mostrar info (Página alquiler por días/semanas)'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'sondevela-gutenberg',
            'icon' => 'admin-comments'
        ));
    }
}

function my_acf_block_render_callback($block, $is_preview = false)
{
    $slug = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
        include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
    }
}

function barcos_custom_post_type()
{
    $args = array(
        'public' => true,
        'label' => __('Barcos', 'sondevela'),
        'menu_icon' => 'dashicons-palmtree',
        'supports' => array('title', 'editor', 'author', 'thumbnail'),

    );
    register_post_type('barco', $args);
}

add_action('init', 'barcos_custom_post_type');


add_filter('acf/location/rule_types', 'acf_wc_product_type_rule_type');
function acf_wc_product_type_rule_type($choices)
{
    if (!isset($choices['Product'])) {
        $choices['Product'] = array();
    }
    if (!isset($choices['Product']['product_cat'])) {
        $choices['Product']['product_cat_term'] = 'Product Category Term';
    }
    return $choices;
}

add_filter('acf/location/rule_values/product_cat_term', 'acf_wc_product_type_rule_values');
function acf_wc_product_type_rule_values($choices)
{

    global $sitepress;
    $taxonomy = 'product_cat';
    if ($sitepress) {
        remove_filter('get_terms_args', array($sitepress, 'get_terms_args_filter'));
        remove_filter('get_term', array($sitepress, 'get_term_adjust_id'));
        remove_filter('terms_clauses', array($sitepress, 'terms_clauses'));

        $terms = get_terms(array('taxonomy' => $taxonomy, 'hide_empty' => false)); // Change the args accordingly

        $args = array(
            'taxonomy' => 'product_cat',
            'hide_empty' => false
        );
        $terms = get_terms($args);
        foreach ($terms as $term) {
            $choices[$term->term_id] = $term->name;
        }
        add_filter('terms_clauses', array($sitepress, 'terms_clauses'), 10, 4);
        add_filter('get_term', array($sitepress, 'get_term_adjust_id'), 1, 1);
        add_filter('get_terms_args', array($sitepress, 'get_terms_args_filter'), 10, 2);
        return $choices;

    }

}

add_filter('acf/location/rule_match/product_cat_term', 'acf_wc_product_type_rule_match', 10, 3);
function acf_wc_product_type_rule_match($match, $rule, $options)
{
    if (!isset($_GET['tag_ID'])) {
        return $match;
    }
    if ($rule['operator'] == '==') {
        $match = ($rule['value'] == $_GET['tag_ID']);
    } else {
        $match = !($rule['value'] == $_GET['tag_ID']);
    }
    return $match;
}

//https://www.advancedcustomfields.com/resources/custom-location-rules/

add_filter('woocommerce_product_tabs', 'woo_custom_product_tabs');
function woo_custom_product_tabs($tabs)
{

    unset($tabs['reviews']);               // Remove the reviews tab
    unset($tabs['description']);

    $tabs['attrib_desc_tab'] = array(
        'title' => __('Información y reservas', 'sondevela'),
        'priority' => 10,
        'callback' => 'woo_attrib_main_tab_content'
    );

    $tabs['menu_premium'] = array(
        'title' => __('Menú Premium', 'sondevela'), // TAB TITLE
        'priority' => 20,
        'callback' => 'destacado_tab_content', // TAB CONTENT CALLBACK
    );

    $tabs['location_tab'] = array(
        'title' => __('Localización', 'sondevela'),
        'priority' => 30,
        'callback' => 'woo_attrib_location_tab_content'
    );

    $tabs['gallery_tab'] = array(
        'title' => __('Galería', 'sondevela'),
        'priority' => 40,
        'callback' => 'woo_attrib_gallery_tab_content'
    );

    //TODO: Activar en un futur
    $tabs['reviews_tab'] = array(
        'title' => __('Opiniones', 'sondevela'),
        'priority' => 50,
        'callback' => 'woo_attrib_reviews_tab_content'
    );

    return $tabs;

}

add_filter('woocommerce_product_tabs', 'conditionaly_removing_product_tabs', 99);
function conditionaly_removing_product_tabs($tabs)
{
    global $product;
    $product_id = $product->get_id();
    $product_cats = array(16);
    if (has_term($product_cats, 'product_cat', $product_id)) {
        unset($tabs['menu_premium']);
    }
    return $tabs;
}

function woo_attrib_main_tab_content()
{
    global $post;
    $terms = get_the_terms($post->ID, 'product_cat');

    $nterms = get_the_terms($post->ID, 'product_tag');
    foreach ($terms as $term) {
        $product_cat_id = $term->term_id;
        $product_cat_name = $term->name;
        break;
    }

    if ($product_cat_id == 16 || $product_cat_id == 107 || $product_cat_id == 37){
        if (file_exists(get_theme_file_path("/template-parts/tabs/main-tab-content-alquiler.php"))) {
            include(get_theme_file_path("/template-parts/tabs/main-tab-content-alquiler.php"));
        }
    }else{
        if (file_exists(get_theme_file_path("/template-parts/tabs/main-tab-content-experiencias.php"))) {
            include(get_theme_file_path("/template-parts/tabs/main-tab-content-experiencias.php"));
        }
    }
}

function destacado_tab_content()
{
    if (file_exists(get_theme_file_path("/template-parts/tabs/menu-premium-tab-content.php"))) {
        include(get_theme_file_path("/template-parts/tabs/menu-premium-tab-content.php"));
    }
}

function woo_attrib_location_tab_content()
{
    if (file_exists(get_theme_file_path("/template-parts/tabs/location-tab-content.php"))) {
        include(get_theme_file_path("/template-parts/tabs/location-tab-content.php"));
    }
}

function woo_attrib_gallery_tab_content()
{
    if (file_exists(get_theme_file_path("/template-parts/tabs/gallery-tab-content.php"))) {
        include(get_theme_file_path("/template-parts/tabs/gallery-tab-content.php"));
    }
}

function woo_attrib_reviews_tab_content()
{
    if (file_exists(get_theme_file_path("/template-parts/tabs/reviews-tab-content.php"))) {
        include(get_theme_file_path("/template-parts/tabs/reviews-tab-content.php"));
    }
}

// Disable new WooCommerce product template (from Version 7.7.0)
function restored_reset_product_template($post_type_args)
{
    if (array_key_exists('template', $post_type_args)) {
        unset($post_type_args['template']);
    }
    return $post_type_args;
}

add_filter('woocommerce_register_post_type_product', 'restored_reset_product_template');

// Enable Gutenberg editor for WooCommerce
function restored_activate_gutenberg_product($can_edit, $post_type)
{
    if ($post_type == 'product') {
        $can_edit = true;
    }
    return $can_edit;
}

add_filter('use_block_editor_for_post_type', 'restored_activate_gutenberg_product', 10, 2);

// Enable taxonomy fields for woocommerce with gutenberg on
function restored_enable_taxonomy_rest($args)
{
    $args['show_in_rest'] = true;
    return $args;
}

add_filter('woocommerce_taxonomy_args_product_cat', 'restored_enable_taxonomy_rest');
add_filter('woocommerce_taxonomy_args_product_tag', 'restored_enable_taxonomy_rest');

function disable_plugin_installation()
{
    if (!current_user_can('install_plugins')) {
        wp_die('You do not have permission to install plugins on this site.');
    }
}

add_action('admin_init', 'disable_plugin_installation');


function disable_add_new_plugin_button()
{
    global $pagenow;

    if ($pagenow == 'plugins.php') {
        echo '<style>.page-title-action, .plugin-add-new { display: none; !important}</style>';
    }
}

add_action('admin_head', 'disable_add_new_plugin_button');

include('shortcodes.php');

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false', 100);

// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter('use_widgets_block_editor', '__return_false');