<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if(is_product_category(17) || is_product_category(34) || is_product_category(35)) { // 19 DEV / 17 PROD . 34 . 35
    wc_get_template('archive-product-experiencia.php');
}
if(is_product_category(16) || is_product_category(107) || is_product_category(37)) {
    wc_get_template('archive-product-alquiler.php');
}else{
    wc_get_template('archive-product.php');
}


