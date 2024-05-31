<?php

    $block_title        = get_field('titulo');
    $block_desc         = get_field('descripcion');
    $block_link         = get_field('enlace');
    $block_background   = get_field('background_image');


?>

<div class="sondevela-section-text4" style="background-image: url('<?=$block_background['url']?>')">
    <div class="container">
        <div class="content">
            <h2 class="title"><?=$block_title?></h2>
            <div class="description">
                <?=$block_desc?>
            </div>
            <?php if($block_link) : ?>
                <div class="link">
                    <a class="btn" href="<?=$block_link['url']?>" target="<?=$block_link['target']?>"><?=$block_link['title']?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

