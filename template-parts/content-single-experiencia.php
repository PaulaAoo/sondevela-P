<?php extract($args); ?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('sondevela-product sondevela-product-experiencia', $product); ?>>
    <div class="header">
        <div class="gallery">

            <?php

            $images = array();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($product->ID), 'single-post-thumbnail');
            $images[0] = $image[0];
            $attachment_ids = $product->get_gallery_image_ids();

            foreach ($attachment_ids as $key => $image) {
                $images[$key + 1] = wp_get_attachment_url($image);
            }
            ?>
            <?php do_action('woocommerce_before_single_product_summary'); ?>
        </div>
        <div class="info">
            <h1><?= the_title() ?></h1>
            <span><?= get_the_excerpt() ?></span>
            <?php
            if(get_field('subtitle',$product->ID)){
                $subtitle = get_field('subtitle', $product->ID);
                $s_content = '<div class="extra-info">';
                foreach($subtitle as $key => $st){
                    if($key == 0){
                        $s_content .= $st['text'];
                    }else{
                        $s_content .= ' · ' . $st['text'];
                    }
                }
                $s_content .= '</div>';
                echo $s_content;
            }
            ?>
            <span class="price">desde <?= $product->get_price_html() ?></span>
            <div class="btn"><?= __('Reserva', 'sondevela') ?></div>
        </div>

    </div>

    <?php wc_get_template('single-product/tabs/tabs.php'); ?>

    <div class="regiondo" id="reserva">
        <div class="container">
            <div class="grid">
                <h3><?php __('¿Qué incluye', 'sondevela') ?> <?= the_title() ?> ?</h3>
                <h3><?=__('Reserva Ahora','sondevela')?></h3>
            </div>
            <div class="grid">
                <div class="column">
                    <div class="icon">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/assets/image/icon-bebidas-B.png' ?>">
                        </div>
                        <div>
                            <h4><?= __('Bebidas y aperitivos', 'sondevela') ?></h4>
                            <span><?= __('Marina Port Vell', 'sondevela') ?></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/assets/image/icon-paddle-B.png' ?>">
                        </div>
                        <div>
                            <h4><?= __('Stand up paddle', 'sondevela') ?></h4>
                            <span><?= __('Flexible', 'sondevela') ?></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/assets/image/icon-tripulacion-B.png' ?>">
                        </div>
                        <div>
                            <h4><?= __('Tripulación', 'sondevela') ?></h4>
                            <span><?= __('Incluído', 'sondevela') ?></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/assets/image/icon-musica-B.png' ?>">
                        </div>
                        <div>
                            <h4><?= __('Equipo de música', 'sondevela') ?></h4>
                            <span><?= __('Incluído', 'sondevela') ?></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/assets/image/icon-gasolina-alquiler-B.png' ?>">
                        </div>
                        <div>
                            <h4><?= __('Gasolina', 'sondevela') ?></h4>
                            <span><?= __('Incluído', 'sondevela') ?></span>
                        </div>
                    </div>
                    <div class="icon">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/assets/image/icon-seguro-alquiler-B.png' ?>">
                        </div>
                        <div>
                            <h4><?= __('Seguro', 'sondevela') ?></h4>
                            <span><?= __('Incluído', 'sondevela') ?></span>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <?php $id_regiondo = get_field('id_regiondo') ?>
                    <?php if ($id_regiondo): ?>
                        <booking-widget widget-id="<?= $id_regiondo ?>"></booking-widget>
                        <script type="text/javascript"
                                src="https://widgets.regiondo.net/booking/v1/booking-widget.min.js"></script>
                    <?php else: ?>
                        <booking-widget widget-id="a14a1ac4-2ac9-4b8a-a164-51e1ae4d78c6"></booking-widget>
                        <script type="text/javascript"
                                src="https://widgets.regiondo.net/booking/v1/booking-widget.min.js"></script>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery">
        <div class="gal-slider">
            <?php
            $gallery = get_field('gallery');
            foreach ($gallery as $content) {
                if (isset($content['texto'])):
                    echo '<div class="img">
                    	<img src="' . $content['image'] . '">
                    	<span>' . $content['texto'] . '</span>
                    </div>';
                endif;
            }

            ?>
        </div>
        <span><?= get_field('galeria_text') ?></span>
    </div>

    <?php
    if (file_exists(get_theme_file_path("/template-parts/parts/extra-products.php"))) {
        include(get_theme_file_path("/template-parts/parts/extra-products.php"));
    }
    ?>

    <?php
    //Conoce nuestro catamarán
    if (file_exists(get_theme_file_path("/template-parts/parts/conoce-catamaran.php"))) {
        include(get_theme_file_path("/template-parts/parts/conoce-catamaran.php"));
    }
    ?>

</div>


<?php
get_footer();
?>
