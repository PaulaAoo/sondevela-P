<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sondevela
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'sondevela'); ?></a>

    <header id="masthead" class="site-header">
        <!-- <div class="pre-header">
             <div class="container">
                 <div class="contact">
                     <span>+34 665403456</span>
                     <span>info@sondevela.com</span>
                     <span>Marina Port Vell Barcelona</span>
                 </div>
                 <div class="social">
                     <a href="#">I</a>
                     <a href="#">F</a>
                     <a href="#">Y</a>
                     <a href="#">V</a>
                 </div>
             </div>
         </div>-->
        <div class="header">
            <div class="container">
                <div class="site-branding">
                    <?php
                    the_custom_logo();
                    ?>
                </div><!-- .site-branding -->

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    )
                );
                ?>

                <?php
                $lang = apply_filters('wpml_current_language', NULL);
                $term = get_queried_object();

                $url = '';
                if (is_front_page()) {
                    switch ($lang) {
                        case 'es':
                            $url = get_category_link(16);
                            break;
                        case 'en':
                            $url = get_category_link(37);
                            break;
                        case 'fr':
                            $url = get_category_link(107);
                            break;
                    }
                } else {
                    //PRODUCT
                    if (is_product()) {
                        $cat = get_queried_object();
                        $product_id = $cat->term_id;
                        $terms = get_the_terms($product_id, 'product_cat');
                        $check = $terms[0]->term_id;

                        if ($check == 17 || $check == 34 || $check == 35) {
                            $url = esc_url(get_the_permalink($product_id)) . '#reserva';
                        }
                        if ($check == 16 || $check == 107 || $check == 37) {
                            {
                                $url = esc_url(get_the_permalink($product_id)) . '#reserva';
                            }

                        } else {
                            if (is_product_category()) {
                                if (is_product_category(17) || is_product_category(34) || is_product_category(35)) {
                                    switch ($lang) {
                                        default:
                                            $url = esc_url(get_the_permalink($term)) . '#experienciasgastronomicas';
                                            break;
                                    }
                                }
                                if (is_product_category(16) || is_product_category(107) || is_product_category(37)) {
                                    $url = esc_url(get_the_permalink($term)) . '#reserva';
                                }
                            }
                        }
                        //CATEGORY
                    } else {
                        if (is_product_category(17) || is_product_category(34) || is_product_category(35)) {
                            switch ($lang) {
                                default:
                                    $url = get_category_link(get_query_var('cat')) . '#experienciasgastronomicas';
                                    break;
                            }
                        } else {
                            switch ($lang) {
                                case 'es':
                                    $url = get_category_link(16);
                                    break;
                                case 'en':
                                    $url = get_category_link(37);
                                    break;
                                case 'fr':
                                    $url = get_category_link(107);
                                    break;
                            }
                        }
                    }
                }
                ?>
                <a href="<?= $url ?>" class="btn"><?= __('Reserva ahora', 'sondevela'); ?></a>
            </div>
        </div>
        <!--<div class="after-header">
            <div class="container">
                <span>15% de DESCUENTO en nuestros productos de temporada baja</span>
            </div>
        </div>-->
    </header><!-- #masthead -->