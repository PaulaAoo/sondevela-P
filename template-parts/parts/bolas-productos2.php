<div class="options">
    <div class="container">
        <div class="column">
            <div class="co">
                <h3 class="subtitle"><?=__('ELIGE LA DURACIÓN DEL PASEO', 'sondevela')?></h3>
                <h2><?=__('Más opciones de reserva', 'sondevela')?></h2>
                <div class="btn"><?=__('Reserva', 'sondevela')?></div>
            </div>
        </div>
        <div class="column">
            <div class="co">
                <div class="product-slider">

                    <?php

                    $args = array(
                        'category' => array( 'alquiler-barco-barcelona-horas' ),
                        'orderby'  => 'name',
                        'order'    => 'ASC',
                        'status'   => 'publish'
                    );
                    $products = wc_get_products( $args );

                    foreach($products as $product) {
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->id ), 'single-post-thumbnail' );
                        $promo = $product->get_sale_price();
                        if($promo){
                            $promo = $product->get_sale_price().'€';
                        }else{
                            $promo = '';
                        }
                        echo '<div class="product"><div class="image" style=\'background: url("'.$image[0].'");background-size: cover\'><div class="content"><div class="info"><a href="'.get_permalink($product->id).'"><h3>'. get_field("short_name", $product->id ).'</h3></a><span>desde '.$product->get_regular_price().' €</span><span class="promo">'.$promo.'</span></div></div></div></div>';
                    }

                    wp_reset_query();

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>