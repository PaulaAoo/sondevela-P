<?php

    $block_title    = get_field('titulo');
    $block_title2   = get_field('titulo2');
    $block_desc     = get_field('descripcion');
    $block_link     = get_field('enlace');
?>

<div class="sondevela-section-text">
    <div class="container">
        <div class="content">
            <h2 class="title"><?=$block_title?></h2>
            <h3 class="title2"><?=$block_title2?></h3>
            <p class="description"><?=$block_desc?></p>
            <?php if($block_link) : ?>
                <div class="link">
                    <a class="btn" href="<?=$block_link['url']?>" target="<?=$block_link['target']?>"><?=$block_link['title']?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>