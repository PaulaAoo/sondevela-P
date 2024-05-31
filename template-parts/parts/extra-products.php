<div class="adicional">
    <?php if (is_archive()) : ?>
        <h2><?= __('Servicios Adicionales', 'sondevela') ?></h2>
    <?php else: ?>
        <h2><?= __('Extras recomendados', 'sondevela') ?></h2>
    <?php endif; ?>
    <div>
        <div class="extra-popup">
            <div class="title"></div>
            <div class="subtitle"></div>
            <div class="content"></div>
            <div class="link"></div>
        </div>
        <div class="tiles">
            <?php
            $args = array(
                'category' => array('extras'),
                'orderby' => 'name',
                'order' => 'ASC',
                'status' => 'publish'
            );

            $products = wc_get_products($args);

            foreach ($products as $product) {
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($product->id), 'single-post-thumbnail');
                $subtitle = get_field('subitulo', $product->id);
                $link = get_field('pdf', $product->id);
                if ($image) {
                    echo '<div class="add" style=\'background: url("' . $image[0] . '")\' data-title="' . $product->get_title() . '" data-subtitle="' . $subtitle . '" data-link="'.$link.'" data-content="' . apply_filters('the_content', get_post_field('post_content', $product->id)) . '"><div class="overlay"></div><div class="content"><h3 class="title">' . $product->get_title() . '</h3><span class="subtitle">' . $subtitle . '</span></div></div>';
                } else {
                    echo '<div class="add" data-title="' . $product->get_title() . '" data-subtitle="' . $subtitle . '" data-link="'.$link.'" data-content="' . apply_filters('the_content', get_post_field('post_content', $product->id)) . '"><div class="content"><h3 class="title">' . $product->get_title() . '</h3><span class="subtitle">' . $subtitle . '</span></div></div>';
                }
            }
            wp_reset_query();
            ?>
        </div>
    </div>

</div>