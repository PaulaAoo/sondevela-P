<?php

    $block_title        = get_field('titulo');
    $block_desc         = get_field('descripcion');
    $block_link         = get_field('enlace');
    $block_background   = get_field('background_image');

?>

<div class="sondevela-section-sostenibilidad">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="column fs">
                    <h2><?=__('Piensa sostenible, actúa responsable','sondevela')?></h2>
                    <p class="subtitle"><?=__('En Sondevela cuidamos lo que nos rodea','sondevela')?></p>
                    <i><?=__('““El océano es inmenso, cubre un 70% del planeta, y aún así nos lo hemos arreglado para impactar sobre casi toda la gran extensión del ecosistema”', 'sondevela')?></i>
                    <span class="author">Kendall Jones</span>
                </div>
                <div class="row tiles">
                    <div class="column">
                        <p><?=__('El 87% de los océanos del mundo están muriendo. Es por eso que porctualmente hay 500 localizaciones determinadas como zonas muertas sin vida marina.', 'sondevela')?></p>
                        <p><?=__('Más de 1 millón de aves marinas y 100,000 mamíferos marinos mueren cada año a causa de la contaminación.', 'sondevela')?></p>
                    </div>
                    <div class="column">
                        <p><?=__('300 millones de toneladas de plástico se producen cada año (el mismo peso que toda la población entera), siendo un 50% de un solo uso.', 'sondevela')?></p>
                        <p><?=__('En 2040 no habrá suficiente agua disponible para cubrir la demanda global ni para beber, ni para la producción de energía.', 'sondevela')?></p>
                    </div>
                </div>
            </div>
            <div class="dottedline-white"></div>
            <div class="row">
                <div class="column">
                    <span><?=__('Descubre 10 retos para disfrutar de un viaje sostenible a bordo del catamarán', 'sondevela')?></span>
                </div>
                <div class="column">
                    <span><?=__('En Sondevela destinamos 5% de nuestros beneficios al proyecto SubMón de Cataluña', 'sondevela')?></span>
                    <a class="btn blue" href="https://www.submon.org/es/inicio/" target="_blank"><?=__('Visitar SubMón', 'sondevela')?></a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

