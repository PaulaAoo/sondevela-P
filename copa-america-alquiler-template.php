<?php
/* Template Name: Copa America Alquiler Template */

get_header();

$grid = get_field('grid');

?>

<link rel="stylesheet" type="text/css"
      href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>
<link rel="stylesheet" type="text/css"
      href="https://edlynvillegas.github.io/evo-calendar/evo-calendar/css/evo-calendar.orange-coral.min.css"/>

<div class="copa-america-alquiler">
    <div class="banner">
        <div class="vcenter">
            <h2><?=__('Alquiler de barcos','sondevela')?> </h2>
            <h3><?=__('Para ver la Copa América en Barcelona', 'sondevela')?></h3>
        </div>
    </div>

    <div class="sondevela-section-text-simple">
        <div class="container">
            <div class="content">
                <p class="text"><?= __('Disfruta en vivo de todos los entrenamientos y regatas de este evento náutico, a través de nuestro servicio de alquiler de barcos para ver la Copa América en Barcelona. ¡Te esperamos a bordo de nuestros lujosos catamaranes privados!', 'sondevela') ?></p>
            </div>
        </div>
    </div>

    <div class="grid">
        <div class="container">
            <?php if($grid): ?>
            <?php foreach($grid as $item) : ?>
            <div class="item" style="background-image:url('<?=$item['background']?>')">
                <div class="overlay">
                    <h3><?=$item['title']?></h3>
                    <span><?=$item['content']?></span>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="info">
        <div class="container">
            <div class="column">
                <h2><?= __('¡Mantente al día de la <i style="color:#DC0B16;font-style: normal">37º Copa América</i>!', 'sondevela'); ?></h2>
            </div>
            <div class="column">
                <span><?= __('Su historia, origen, noticias más recientes y actualizaciones del evento, solo en Sondevela. Y si quieres disfrutarla en vivo, ¡reserva cualquiera de nuestros barcos para ver la Copa América en Barcelona!', 'sondevela') ?></span>
            </div>
        </div>
    </div>


    <?php
    //Slider bolas productos
    if (file_exists(get_theme_file_path("/template-parts/parts/flota-barcos-2.php"))) {
        include(get_theme_file_path("/template-parts/parts/flota-barcos-2.php"));
    }
    ?>


</div>

<?php
get_footer();
?>

