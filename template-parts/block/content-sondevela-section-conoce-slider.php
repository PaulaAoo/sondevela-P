<?php

    $block_pretitle     = get_field('pretitle');
    $block_title        = get_field('title');
    $block_link         = get_field('link');
    $block_images       = get_field('images');
?>

<div class="sondevela-section-conoce-slider">
    <div class="container">
        <div class="content">
            <h3 class="subtitle"><?=$block_pretitle?></h3>
            <div class="column">
                <h2 class="title"><?=$block_title?></h2>
                <a class="btn blue" href="<?=$block_link['url']?>" target="<?=$block_link['target']?>"><?=$block_link['title']?></a>
            </div>
        </div>

        <div class="images slider">
            <?php foreach($block_images as $image): ?>
                <img src="<?=$image['url']?>" />
            <?php endforeach; ?>
        </div>
    </div>
</div>

