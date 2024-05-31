<?php

$block_subtitle = get_field('subtitle');
$block_title = get_field('title');
$block_products = get_field('productos');
?>

<div class="sondevela-section-productos">
    <div class="container">
        <div class="content">
            <h3 class="subtitle"><?= $block_subtitle ?></h3>
            <div class="column">
                <h2 class="title"><?= $block_title ?></h2>
                <a class="btn blue" href="/product-category/experiencias-catamaran-barcelona/"
                   target=""><?= __('Otras opciones', 'sondevela') ?></a>
            </div>
            <div class="products">
                <?php foreach ($block_products as $product) { ?>
                    <?php $id = $product; ?>
                    <?php $product = wc_get_product($product); ?>

                    <div class="product">
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail'); ?>
                        <div class="product-image" style="background-image: url(<?= $image[0] ?>);">
                            <div class="product-info">
                                <a href="<?= $product->get_permalink() ?>">
                                    <span class="product-name"><?= get_field('short_name', $product->get_id()) ?></span>
                                </a>
                                <span><?= $product->get_regular_price() . '€' ?></span>
                                <?php if ($product->get_sale_price() > 0) : ?>
                                    <span><?= $product->get_sale_price() . '€' ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="badges">
                <div class="dottedline-left"></div>
                <div class="icons">
                    <div class="icon">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/image/icon-capacidad.png' ?>">
                        <div class="text">
                            <span><?= __('CAPACIDAD MÁXIMA', 'sondevela') ?></span>
                            <span><?= __('12 pax. (+ 2 tripulación)', 'sondevela') ?></span>
                        </div>
                    </div>
                    <div class="icon">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/image/icon-meeting-point.png' ?>">
                        <div class="text">
                            <span><?= __('PUNTO DE ENCUENTRO', 'sondevela') ?></span>
                            <span><?= __('Marina Port Vell', 'sondevela') ?></span>
                        </div>
                    </div>
                    <div class="icon">
                        <img src="<?= get_stylesheet_directory_uri() . '/assets/image/icon-seguro.png' ?>">
                        <div class="text">
                            <span><?= __('SEGURO', 'sondevela') ?></span>
                            <span><?= __('Incluído', 'sondevela') ?></span>
                        </div>
                    </div>
                </div>
                <div class="dottedline-left"></div>
            </div>

        </div>
    </div>
</div>

