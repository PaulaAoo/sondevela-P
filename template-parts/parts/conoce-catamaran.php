<div class="conoce-catamaran">
    <div class="background"></div>
    <div class="content">
        <div class="column">
            <div class="intro-text">
                <span class="subtitle">SERENA, BALI 4.1</span>
                <h3><?=__('Conoce Nuestro Catamarán', 'sondevela')?></h3>
            </div>
            <div class="hotspot-slider">
                <?php
                $catamaran1 = get_field('id_catamaran_1', 'option');
                $catamaran2 = get_field('id_catamaran_2', 'option');
                ?>
                <div class="hotspot"><?=do_shortcode("[devvn_ihotspot id='".$catamaran1."']")?></div>
                <div class="hotspot"><?=do_shortcode("[devvn_ihotspot id='".$catamaran2."']")?></div>
            </div>
        </div>
        <div class="column">
            <span class="catamaran-info">
                <?php
                    $term = get_queried_object();
                    $text = get_field('texto_catamaran', $term);
                    if($text){
                        echo $text;
                    }else{
                        echo '<p>'.__("El catamarán incluye <strong>radio HiFi Fusion con 4 altavoces y sistema Bluetooth</strong> para que conectes tu dispositivo y amenices el paseo en Barcelona con buena música.</p><p>Cada espacio está equipado con <strong>zonas de relax</strong> donde puedes contemplar durante horas los encantadores paisajes de la ciudad o deleitarte con un exquisito plato de carne o pescado a la brasa recién hecho en la <strong>barbacoa</strong> del barco.</p><p>Con una <strong>proa amplia</strong> y un <strong>toldo disponible</strong> para los días más soleados, Serena es el catamarán que te permitirá disfrutar del Mediterráneo de una forma única.</p><p>¡Contrata nuestro servicio de <strong>alquiler de barco en Barcelona por horas</strong> y descúbrelo tú mismo!</p><p>Más información catamarán Bali 4.1</p>","sondevela");
                    }
                ?>
            </span>
        </div>
    </div>
</div>
