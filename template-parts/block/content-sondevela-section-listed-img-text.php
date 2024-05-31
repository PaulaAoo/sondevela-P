<?php

    $block_align    = get_field('alignment');
    $block_number    = get_field('number');
    $block_title    = get_field('title');
    $block_desc     = get_field('descripcion');
    $block_images     = get_field('image');

?>

<div class="sondevela-section-listed-img-text <?=$block_align?>">
    <div class="container">
        <div class="content">
            <div>
                <span><?=$block_number?></span>
                <div class="line">
                    <div></div>
                </div>
                <h2 class="title"><?=$block_title?></h2>
                <p class="description"><?=$block_desc?></p>
            </div>
        </div>
        <div class="images" style="background-color: grey;">
            <?php if($block_images):?>
                <?php foreach($block_images as $image): ?>
                    <div class="image" style="background-image:url(<?=$image['url']?>);"></div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>




