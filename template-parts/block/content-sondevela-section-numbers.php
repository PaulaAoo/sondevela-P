<?php

    $block_pretitle    = get_field('pre_title');
    $block_numbers     = get_field('numbers');

?>

<div class="sondevela-section-numbers">
    <div class="container">
        <div class="content">
            <h2 class="title"><?=$block_pretitle?></h2>
            <div class="numbers">
            <?php foreach($block_numbers as $number){ ?>
                <div class="number">
                    <div class="n"><span><?=$number['number']?></span></div>
                    <div class="cnt">
                        <h4><?=$number['titulo']?></h4>
                        <span class="text"><?=$number['texto']?></span>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>