<?php
$args = array(
    'post_type' => 'barco',
    'status'    => 'publish'
);

$posts = new WP_Query($args);

if ($posts->have_posts()) :
?>
<div class="barcos">
    <div class="container">
        <h3><?= __('Nuestros barcos para ver la Copa América de Barcelona', 'sondevela') ?></h3>
        <h4><?= __('CATAMARANES DE LUJO', 'sondevela') ?></h4>
    </div>
    <div class="slider-barcos">
        <?php
        while ( $posts->have_posts() ) : $posts->the_post();
            ?>
            <div class="barco">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );?>
                <div class="img" style="background-image:url(<?=$image[0]?>)"></div>
                <h4><?=the_title()?></h4>
                <span><?=get_the_excerpt()?></span>
                <div class="btn red"><?=__('Saber más','sondevela')?></div>
            </div>
        <?php
        endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>
</div>