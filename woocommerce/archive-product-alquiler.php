<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

$term = get_queried_object();
$banner = get_field('banner', $term);

?>

<div class="banner" style="background-image:url(<?=$banner?>)">
    <h1><?=__('Alquiler de barco en Barcelona por horas','sondevela')?></h1>
</div>

<div class="features">
    <h2><?=__('¿Qué Incluye?', 'sondevela')?></h2>
    <div class="ft">
        <div class="icon">
            <img src="<?=get_template_directory_uri() . '/assets/image/icon-bebidas.png'?>">
            <h3><?=__('Bebidas', 'sondevela')?></h3>
            <span><?=__('Cerveza, cava, vino, agua, té, café y refresco', 'sondevela')?></span>
        </div>
        <div class="icon">
            <img src="<?=get_template_directory_uri() . '/assets/image/icon-aperitivos.png'?>">
            <h3><?=__('Aperitivos Locales', 'sondevela')?></h3>
            <span><?=__('Cerveza, cava, vino, agua, té, café y refresco', 'sondevela')?></span>
        </div>
        <div class="icon">
            <img src="<?=get_template_directory_uri() . '/assets/image/icon-paddle.png'?>">
            <h3><?=__('Stand Up Paddle', 'sondevela')?></h3>
            <span><?=__('Cerveza, cava, vino, agua, té, café y refresco', 'sondevela')?></span>
        </div>
        <div class="icon">
            <img src="<?=get_template_directory_uri() . '/assets/image/icon-musica.png'?>">
            <h3><?=__('Equipo de Música', 'sondevela')?></h3>
            <span><?=__('Cerveza, cava, vino, agua, té, café y refresco', 'sondevela')?></span>
        </div>
        <div class="icon">
            <img src="<?=get_template_directory_uri() . '/assets/image/icon-tripulacion.png'?>">
            <h3><?=__('Tripulación', 'sondevela')?></h3>
            <span><?=__('Cerveza, cava, vino, agua, té, café y refresco', 'sondevela')?></span>
        </div>
    </div>
</div>

<?php
if (file_exists(get_theme_file_path("/template-parts/parts/bolas-productos.php"))) {
    include(get_theme_file_path("/template-parts/parts/bolas-productos.php"));
}
?>

<div class="reserva" id="reserva">
    <div class="container">
        <div class="co">
            <div class="column">
                <img src="<?=get_template_directory_uri() . '/assets/image/categories/reservas-calendario.png'?>">
            </div>
            <div class="column">
                <booking-widget widget-id="a14a1ac4-2ac9-4b8a-a164-51e1ae4d78c6"></booking-widget><script type="text/javascript" src="https://widgets.regiondo.net/booking/v1/booking-widget.min.js"></script>
            </div>
        </div>

        <div class="bottom">
            <div class="row">
                <div class="icon">
                    <div>
                        <img src="<?=get_template_directory_uri() . '/assets/image/icon-capacidad-alquiler-gold.png'?>">
                    </div>
                    <div>
                        <h4><?=__('CAPACIDAD MÁXIMA','sondevela')?></h4>
                        <span><?=__('12 pax. (+ 2 tripulación)','sondevela')?></span>
                    </div>
                </div>
                <div class="icon">
                    <div>
                        <img src="<?=get_template_directory_uri() . '/assets/image/icon-gasolina-alquiler.png'?>">
                    </div>
                    <div>
                        <h4><?=__('INCLUYE', 'sondevela')?></h4>
                        <span><?=__('Gasolina', 'sondevela')?></span>
                    </div>
                </div>
                <div class="icon">
                    <div>
                        <img src="<?=get_template_directory_uri() . '/assets/image/icon-capacidad-alquiler.png'?>">
                    </div>
                    <div>
                        <h4><?=__('DURACIÓN', 'sondevela')?></h4>
                        <span><?=__('Entre 2 y 8 horas', 'sondevela')?></span>
                    </div>
                </div>
            </div>

            <div class="row">
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
                <div class="icon">
                    <div>
                        <img src="<?=get_template_directory_uri() . '/assets/image/icon-seguro-alquiler.png'?>">
                    </div>
                    <div>
                        <h4><?=__('SEGURO', 'sondevela')?></h4>
                        <span><?=__('Incluído', 'sondevela')?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="extra">
    <div class="container">
        <div class="column">
            <div>
                <span><?=__('Alquila un barco exclusivo en Barcelona por horas. Experimenta una navegación con <i>un servicio de lujo y con todo incluido</i> en nuestros barcos privados.', 'sondevela')?></span>
            </div>
        </div>
        <div class="column">
            <?php //TODO: Revisar estils i classes, s'estàn aplicant estils d'altres pàgines o classes.  ?>
            <div class="alquila-slider">
                <?php
                $term = get_queried_object();
                $gallery = get_field('imagenes_galeria_calendario_copy', $term);
                foreach($gallery as $content){
                    echo '<div class="img">
                            <img src="'.$content.'">
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
//Productos adicionales
if (file_exists(get_theme_file_path("/template-parts/parts/extra-products.php"))) {
    include(get_theme_file_path("/template-parts/parts/extra-products.php"));
}
?>

<?php
//Conoce nuestro catamarán
if (file_exists(get_theme_file_path("/template-parts/parts/conoce-catamaran.php"))) {
    include(get_theme_file_path("/template-parts/parts/conoce-catamaran.php"));
}
?>

<div class="intro">
    <div class="column">
        <img src="<?=get_template_directory_uri() . '/assets/image/categories/alquiler-por-horas.png'?>">
    </div>
    <div class="column">
        <div class="vcenter">
            <h2><?= __('Las mejores experiencias privadas en Catamarán en Barcelona', 'sondevela') ?></h2>
            <p><?= __('Descubre la experiencia de navegar por el Mediterráneo con nuestro alquiler de catamarán en Barcelona por horas. Vive una experiencia única a bordo de nuestro barco exclusivo.','sondevela')?></p>
            <div class="btn"><?= __('Reserva ahora','sondevela')?></div>
        </div>
    </div>
</div>

<?php

get_footer();
