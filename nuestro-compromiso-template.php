<?php
/* Template Name: Nuestro Compromiso Template */

$image1 = get_field('imagen_1');
$image2 = get_field('imagen_2');
$image3 = get_field('imagen_3');

get_header();
?>
<div class="nuestro-compromiso">
    <div class="header" style="background-image:url('<?=$image1?>')">
        <div class="container">
            <div class="column">
                <h1><?=__('NUESTRO COMPROMISO','sondevela')?></h1>
                <h2><?=__('Con el Mar','sondevela')?></h2>
            </div>
            <div class="column">
                <span><?=__('Bienvenidos a Sondevela, donde las experiencias en barco se fusionan armoniosamente con nuestra firme dedicación a la sostenibilidad ambiental. En cada salida, nos comprometemos con la preservación de nuestros océanos, garantizando que cada experiencia ofrecida sea tan respetuosa con el medio ambiente como es de lujosa.','sondevela')?></span>
            </div>
        </div>
    </div>
    <div class="biosphere" style="background-image:url('<?=$image2?>')">
        <div class="overlay"></div>
        <div class="content">
            <img src="<?=get_stylesheet_directory_uri(). '/assets/image/biosphere-logo.png'?>" />
            <span><?=__('Nos enorgullece contar con la distinción del certificado Biosphere, un testimonio de nuestra constante búsqueda de la excelencia sostenible. Este reconocimiento no solo es un distintivo importante, sino una promesa tangible de nuestra responsabilidad con la conservación del entorno marino.','sondevela')?></span>
        </div>
    </div>

    <div class="bottom" style="background-image:url('<?=$image3?>')">
        <div class="overlay"></div>
        <div class="content">
            <div class="column"><span><?=__('En cada detalle, desde la elección de nuestras embarcaciones hasta las prácticas culinarias a bordo, nos esforzamos por minimizar nuestra huella ambiental.','sondevela')?></span></div>
            <div class="column"><span><?=__('Nuestra tripulación, altamente capacitada, no solo garantiza una experiencia segura y placentera, sino que también comparte nuestro compromiso con la protección de la naturaleza.','sondevela')?></span></div>
        </div>
    </div>
</div>


<?php
get_footer();
?>
