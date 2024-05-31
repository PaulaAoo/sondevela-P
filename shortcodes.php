<?php

function productos_megamenu(){

    $args = array(
        'category' => array('alquiler-barco-barcelona-horas'),
        'orderby' => 'name',
        'order' => 'ASC'
    );
    $products = wc_get_products($args);

    $content = '<div class="shortcode-products-megamenu"><div class="content">';

    foreach ($products as $product) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($product->id), 'single-post-thumbnail');
        $content .= '<div class="product"><div class="img" style="background-image:url(' . $image[0] . ');"></div><h3><a href="'.$product->get_permalink().'">'.$product->get_title().'</a></h3></div>';
        //$content .= '<div class="product"><img src="' . $image[0] . '"><h3>'.$product->get_title().'</h3></div>';
        //echo '<div class="product"><div class="image" style=\'background: url("' . $image[0] . '")\'><div class="content"><div class="info"><h3>' . get_field("short_name", $product->id) . '</h3><span>desde 840€ 714€</span></div></div></div></div>';
    }
    wp_reset_query();

    $content .= '</div></div>';

    return $content;
}

add_shortcode('products_megamenu', 'productos_megamenu');

function social_networks(){

    $fb = get_field('facebook', 'options');
    $in = get_field('instagram', 'options');
    $yt = get_field('youtube', 'options');
    $li = get_field('linkedin', 'options');

    $content = '';

    if($fb):
    $content .= '<a class="sn-facebook" href="'.$fb.'"><img src="'.get_template_directory_uri().'/assets/image/sn/sn-facebook.png"></a>';
    endif;

    if($in):
    $content .= '<a class="sn-instagram" href="'.$in.'"><img src="'.get_template_directory_uri().'/assets/image/sn/sn-instagram.png"></a>';
    endif;

    if($yt):
    $content .= '<a class="sn-youtube" href="'.$yt.'"><img src="'.get_template_directory_uri().'/assets/image/sn/sn-youtube.png"></a>';
    endif;

    if($li):
    $content .= '<a class="sn-linkedin" href="'.$li.'"><img src="'.get_template_directory_uri().'/assets/image/sn/sn-linkedin.png"></a>';
    endif;

    return $content;
}

add_shortcode('social_networks', 'social_networks');

?>

