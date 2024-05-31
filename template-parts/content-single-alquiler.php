<?php
    extract($args);
    if(isset($product_id)){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
    }else{
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->ID ), 'single-post-thumbnail' );
    }
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'sondevela-product sondevela-product-alquiler', $product ); ?>>
    <div class="header">
        <div class="tabs">
            <div class="banner">
                <div class="image" style="background-image:url(<?=$image[0]?>)">
                    <div class="border">
                        <div>
                            <h3><?=$product->get_title()?></h3>
                            <span>desde <?=$product->get_price()?>€</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php wc_get_template( 'single-product/tabs/tabs.php' ); ?>
        </div>
        <?php
        //Conoce nuestro catamarán
        if (file_exists(get_theme_file_path("/template-parts/parts/conoce-catamaran.php"))) {
            include(get_theme_file_path("/template-parts/parts/conoce-catamaran.php"));
        }
        ?>
        <?php
        if (file_exists(get_theme_file_path("/template-parts/parts/bolas-productos2.php"))) {
            include(get_theme_file_path("/template-parts/parts/bolas-productos2.php"));
        }
        ?>
    </div>
</div>