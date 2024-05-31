<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

$term       = get_queried_object();
$form_id    = get_field('form_id', $term);
$text_seo   = get_field('texto_seo', $term);
$form_bg    = get_field('imagen_form', $term);
$imagen_portada = get_field('imagen_portada', $term);
$current_lang = apply_filters( 'wpml_current_language', NULL );

?>

<div class="banner" style="background-image:url('<?=$imagen_portada?>')">
    <div class="vcenter">
        <h1><?=__('Nuestras Experiencias', 'sondevela')?></h1>
        <h2><?=__('en Catamarán en Barcelona', 'sondevela')?></h2>
    </div>
</div>

<div class="sondevela-section-text-simple">
    <div class="container">
        <div class="content">
            <p class="text_seo"><?=$text_seo?></p>
        </div>
    </div>
</div>

<div class="intro">
    <div class="container">
        <div>
            <h3 class="subtitle"><?=__('RELAX Y GASTRONOMÍA', 'sondevela')?></h3>
        </div>
        <h2><?=__('En un lugar extraordinário', 'sondevela')?></h2>
        <div class="content">
            <div class="column"><?=__('Si estás buscando un paseo privado en barco en Barcelona, nuestras experiencias en catamarán son tu solución.', 'sondevela')?></div>
            <div class="column"><?=__('Un brunch diferente en la ciudad, unas horas de spa en barco, aprender a cocinar paella o preparar los mejores cocteles.', 'sondevela')?></div>
        </div>
    </div>
</div>

<div class="experiencias exp1" id="experienciasgastronomicas">
    <div class="content">
        <div class="column">
            <h2 class="title"><?=__('Experiencias Gastronómicas', 'sondevela')?></h2>
        </div>
        <div class="products">

            <?php

            $args = array(
                'category' => array( 'experiencias-catamaran-barcelona' ),
                'status'   => 'pusblish',
                'lang'     => $current_lang
            );
            $products = wc_get_products( $args );

            foreach($products as $product) {
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->id ), 'single-post-thumbnail' );
                if($image){
                    echo '<div class="product"><div class="product-image" style=\'background-position: center center; background: url("'.$image[0].'");background-size: cover;\'></div><div class="product-info"><span class="product-name">'.$product->get_title().'</span><span class="description">'.get_the_excerpt($product->id).'</span><a class="btn " href="'.$product->get_permalink($product->id).'" target="">'.__('Descúbrelo', 'sondevela').'</a></div></div>';
                }else{
                    echo '<div class="product"><div class="product-image"></div><div class="product-info"><span class="product-name">'.$product->get_title().'</span><span class="description">'.get_the_excerpt($product->id).'</span><a class="btn " href="'.$product->get_permalink($product->id).'" target="">'.__('Descúbrelo', 'sondevela').'</a></div></div>';
                }
            }

            wp_reset_query();

            ?>
        </div>
    </div>
</div>

<div class="experiencias blue exp2" id="otrasexperiencias">
    <div class="content">
        <div class="column">
            <h2 class="title"><?=__('Otras Experiencias', 'sondevela')?></h2>
        </div>
        <div class="products">
            <?php

            $args = array(
                'category' => array( 'experiencias-catamaran-barcelona' ),
                'status'   => 'pusblish',
                'lang'     => $current_lang
            );
            $products2 = wc_get_products( $args );

            foreach($products2 as $product) {

                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->id ), 'single-post-thumbnail' );

                if($image){
                    echo '<div class="product"><div class="product-image" style=\'background-position: center center; background: url("'.$image[0].'");background-size: cover;\'></div><div class="product-info"><span class="product-name">'.$product->get_title().'</span><span class="description">'.get_the_excerpt($product->id).'</span><a class="btn " href="'.$product->get_permalink($product->ID).'" target="">Descúbrelo</a></div></div>';
                }else{
                    echo '<div class="product"><div class="product-image"></div><div class="product-info"><span class="product-name">'.$product->get_title().'</span><span class="description">'.get_the_excerpt($product->id).'</span><a class="btn " href="'.$product->get_permalink($product->id).'" target="">Descúbrelo</a></div></div>';
                }
            }

            wp_reset_query();

            ?>
        </div>
    </div>
</div>

<div class="form-experiencias" style="background-image:url('<?=$form_bg?>')">
    <div class="container">
        <div class="content">
            <div class="column">
                <h2 class="title"><?=__('¿Buscas algo diferente a nuestras experiencias en catamarán en Barcelona?', 'sondevela')?></h2>
                <span class="description"><?=__('En Sondevela también organizamos experiencias personalizadas. Contáctanos y cuéntanos tu idea. ¡Nos encargaremos de hacerla realidad!', 'sondevela')?></span>
            </div>
            <div class="column">
                <?php
                    if($form_id){
                        echo do_shortcode('[wpforms id="'.$form_id.'"]');
                    }
                ?>

            </div>
        </div>
    </div>
</div>



<?php
get_footer();
