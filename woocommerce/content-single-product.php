<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}

$terms = get_the_terms( $product->ID, 'product_cat' );
$product_cat_id = '';
foreach ($terms as $term) {
    $product_cat_id = $term->term_id;
    break;
}

$args = array(
    'product' => $product,
);

if($product_cat_id == 16 || $product_cat_id == 107 || $product_cat_id == 37){

    echo get_template_part( 'template-parts/content-single-alquiler', '', $args);

}else {

    echo get_template_part('template-parts/content-single-experiencia', '', $args);
}
?>
<!--<div class="product-bar"></div>-->
