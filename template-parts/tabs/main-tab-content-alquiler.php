<?php the_content(); ?>
<div class="extra">
    <h3>¿Qué Incluye el servicio de <?php the_title();?></h3>
    <div class="column">
            <?php
                $badges = get_field('badges');
                foreach($badges as $badge){
                    switch($badge){
                        case 'bebidas':?>
                            <div class="icon">
                                <div>
                                    <img src="<?=get_template_directory_uri() . '/assets/image/icon-bebidas-B.png'?>">
                                </div>
                                <div>
                                    <h4>Bebidas y aperitivos locales</h4>
                                    <span>Cerveza, cava, vino, agua, té, café o refrescos + tapas</span>
                                </div>
                            </div>
                        <?php
                            break;
                        case 'paddle':?>
                            <div class="icon">
                                <div>
                                    <img src="<?=get_template_directory_uri() . '/assets/image/icon-paddle-B.png'?>">
                                </div>
                                <div>
                                    <h4>Stand up paddle</h4>
                                    <span>2 paddle surf + 5 máscaras de snorkel</span>
                                </div>
                            </div>
                        <?php
                            break;
                        case 'musica':?>
                            <div class="icon">
                                <div>
                                    <img src="<?=get_template_directory_uri() . '/assets/image/icon-musica-B.png'?>">
                                </div>
                                <div>
                                    <h4>Equipo de música</h4>
                                    <span>Con sistema Bluetooth</span>
                                </div>
                            </div>
                        <?php
                            break;
                        case 'tripulacion':?>
                            <div class="icon">
                                <div>
                                    <img src="<?=get_template_directory_uri() . '/assets/image/icon-tripulacion-B.png'?>">
                                </div>
                                <div>
                                    <h4>Tripulación</h4>
                                    <span>Patrón y azafata profesionales</span>
                                </div>
                            </div>
                        <?php
                            break;
                        case 'gasolina':?>
                            <div class="icon">
                                <div>
                                    <img src="<?=get_template_directory_uri() . '/assets/image/icon-gasolina-alquiler-B.png'?>">
                                </div>
                                <div>
                                    <h4>Incluye</h4>
                                    <span>Gasolina</span>
                                </div>
                            </div>
                        <?php
                            break;
                        case 'seguro':?>
                            <div class="icon">
                                <div>
                                    <img src="<?=get_template_directory_uri() . '/assets/image/icon-seguro-alquiler-B.png'?>">
                                </div>
                                <div>
                                    <h4>Seguro</h4>
                                    <span>Incluido</span>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>

    </div>
</div>
<div class="reserva" id="reserva">
    <div class="container">
        <div class="co">
            <div class="column gallery">
                <?php
                    $gallery_reserva = get_field('gallery_reserva');
                    foreach($gallery_reserva as $image){
                        echo '<div class="img" style="background-image:url('.$image.')"></div>';
                    }
                ?>


            </div>
            <div class="column">
                <?php $id_regiondo = get_field('id_regiondo')?>
                <?php if($id_regiondo): ?>
                <booking-widget widget-id="<?=$id_regiondo?>"></booking-widget><script type="text/javascript" src="https://widgets.regiondo.net/booking/v1/booking-widget.min.js"></script>
                <?php else: ?>
                <booking-widget widget-id="a14a1ac4-2ac9-4b8a-a164-51e1ae4d78c6"></booking-widget><script type="text/javascript" src="https://widgets.regiondo.net/booking/v1/booking-widget.min.js"></script>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>