<?php
$block_images = get_field('images');
?>

<div class="sondevela-section-sobre-nosotros">
    <div class="container">
        <div class="content">
            <h1 class="title"><?=__('Sobre Nosotros','sondevela')?></h1>
            <h2><?=__('Sondevela','sondevela')?></h2>
        </div>
        <div class="images" >
            <?php foreach($block_images as $image): ?>
                <div class="image" style="background-image:url(<?=$image?>);"></div>
            <?php endforeach; ?>
        </div>
        <div class="description">
            <span><?=__('Somos una empresa familiar y local fundada en 2018 en Barcelona. El proyecto nació con el objetivo de juntar dos de nuestras pasiones, el amor al mar y la gastronomía con productos de proximidad. Vimos en nuestra ciudad la oportunidad de ofrecer algo diferente a lo que había en ese momento y que se alineaba con nuestro sueño, por lo que decidimos lanzarnos a la aventura y elegir el barco ideal.','sondevela')?></span>
            <span><?=__('Estuvimos analizando al detalle los diferentes tipos de barcos y descubrimos de que los catamaranes eran perfectos para ofrecer experiencias diferentes y exclusivas.  Gracias a estos años, podemos decir que Sondevela se especializa en ofrecer una experiencia náutica única y lujosa, con el objetivo de ofrecer una aventura inolvidable en el mar con un servicio de alta calidad y con los barcos más confortables.','sondevela')?></span>
        </div>
    </div>
</div>

