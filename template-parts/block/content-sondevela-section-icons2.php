<?php

    $block_text    = get_field('texto_1');
    $block_text2   = get_field('texto_2');
?>

<div class="sondevela-section-icons2">
    <div class="icons">
        <div class="icon">
            <div>
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-capacidad-alquiler.png'?>">
            </div>
            <div>
                <h4><?=__('CAPACIDAD MÁXIMA', 'sondevela')?></h4>
                <span><?=__('12 pax. (+ 2 tripulación)', 'sondevela')?></span>
            </div>
        </div>
        <div class="icon">
            <div>
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-meeting-point-alquiler.png'?>">
            </div>
            <div>
                <h4><?=__('PUNTO DE ENCUENTRO', 'sondevela')?></h4>
                <span><?=__('Marina Port Vell', 'sondevela')?></span>
            </div>
        </div>
        <div class="icon">
            <div>
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-hora-inicio-alquiler.png'?>">
            </div>
            <div>
                <h4><?=__('HORA DE INICIO', 'sondevela')?></h4>
                <span><?=__('Flexible', 'sondevela')?></span>
            </div>
        </div>
    </div>
</div>