<?php

    $block_align    = get_field('alignment');
    $block_title    = get_field('title');
    $block_desde    = get_field('desde');
    $block_subtitle = get_field('texto_addicional');
    $block_desc     = get_field('descripcion');
    $block_subtitle2 = get_field('texto_addicional_2');
    $block_link     = get_field('link');
    $block_images     = get_field('experience_image');

?>

<div class="sondevela-section-evento <?=$block_align?>">
    <div class="container">
        <div class="content">
            <h2 class="title"><?=$block_title?></h2>
            <span class="desde">desde <?=$block_desde?>€</span>
            <span class="subtitle"><?=$block_subtitle?></span>
            <p class="description"><?=$block_desc?></p>
            <span class="subtitle2"><?=$block_subtitle2?></span>
            <?php if($block_link) : ?>
                <div class="link">
                    <a class="btn blue" href="<?=$block_link['url']?>" target="<?=$block_link['target']?>"><?=$block_link['title']?></a>
                </div>
            <?php endif; ?>
        </div>
        <div class="images" style="background-color: grey;">
            <?php if($block_images>0):?>
                <?php foreach($block_images as $image): ?>
                    <div class="image" style="background-image:url(<?=$image['url']?>);"></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

