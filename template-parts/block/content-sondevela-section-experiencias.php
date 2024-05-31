<?php

    $block_align    = get_field('alignment');
    $block_title    = get_field('title');
    $block_desc     = get_field('descripcion');
    $block_link     = get_field('link');
    $block_images     = get_field('experience_image');

?>

<div class="sondevela-section-experiencia <?=$block_align?>">
    <div class="container">
        <div class="content">
            <h2 class="title"><?=$block_title?></h2>
            <p class="description"><?=$block_desc?></p>
            <?php if($block_link) : ?>
                <div class="link">
                    <a class="btn blue" href="<?=$block_link['url']?>" target="<?=$block_link['target']?>"><?=$block_link['title']?></a>
                </div>
            <?php endif; ?>
        </div>
        <div class="images" style="background-color: grey;">
            <?php foreach($block_images as $image): ?>
                <div class="image" style="background-image:url(<?=$image['url']?>);"></div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

