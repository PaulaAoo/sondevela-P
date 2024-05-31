<?php


    $block_title   = get_field('titulo');
    $block_text    = get_field('texto');
    $block_form    = get_field('formulario_id');
    $block_bg      = get_field('bg');
    if($block_bg){
        $block_bg = 'style="background-image:url('.$block_bg.')"';
    }else{
        $block_bg = '';
    }
?>

<div class="sondevela-section-formulario" <?=$block_bg?>>
        <div class="container">
            <div class="content">
                <div class="column">
                    <h2 class="title"><?=$block_title?></h2>
                    <span class="description"><?=$block_text?></span>
                </div>
                <div class="column">
                    <?php
                    if($block_form){
                        echo do_shortcode('[wpforms id="'.$block_form.'"]');
                    }
                    ?>

                </div>
            </div>
        </div>
</div>

