<?php

    $block_title        = get_field('titulo');
    $block_desc         = get_field('descripcion');
    $block_link         = get_field('enlace');


?>

<div class="sondevela-section-text3">
    <div class="container">
        <div class="content">
            <div class="column">
                <h2 class="title"><?=$block_title?></h2>
            </div>
            <div class="column">
                <p class="description"><?=$block_desc?></p>
                <?php if($block_link) : ?>
                    <div class="link">
                        <a class="btn" href="<?=$block_link['url']?>" target="<?=$block_link['target']?>"><?=$block_link['title']?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

