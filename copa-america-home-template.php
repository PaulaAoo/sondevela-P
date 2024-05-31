<?php
/* Template Name: Copa America Home Template */

get_header();

$dates = get_field('calendar', 'options');
$dates_formatted = [];
foreach ($dates as $key => $date) {
    $dates_formatted[$key]['id'] = 'id' . $key;
    $dates_formatted[$key]['name'] = $date['name'];
    $dates_formatted[$key]['date'] = $date['date'];
    $dates_formatted[$key]['type'] = 'holiday';
}
$dates_formatted = json_encode($dates_formatted);

?>

<?php
the_content()
?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>



<div class="copa-america-home">
    <div class="banner"></div>
    <div class="sondevela-section-text-simple">
        <div class="container">
            <div class="content">
                <p class="text">En Sondevela nos dedicamos a ofrecer experiencias únicas sobre el mar. Descubre nuestro servicio de alquiler de barco en Barcelona por horas y selecciona tu opción ideal para navegar a bordo de un catamarán de lujo. Diviértete con actividades acuáticas o relájate con tu música favorita mientras pruebas aperitivos locales.</p>
            </div>
        </div>
    </div>
    <section class="alquiler" style="background-image:url(<?=get_template_directory_uri() . '/assets/image/ca/'?>copa-america-1.png);background-position: center center; background-size: cover;">
        <div class="container">
            <h2>Alquiler de barcos para ver la Copa América de Barcelona</h2>
            <span>Disfruta de todas las regatas y entrenamientos en vivo de la Copa América Barcelona 2024 desde los catamaranes de lujo que tenemos para ti.</span>
        </div>
    </section>

    <section class="info">
        <div>
            <img src="<?=get_template_directory_uri() . '/assets/image/ca/'?>copa-america-2.png"/>
        </div>
        <div>
            <h3>37º edición de la Copa América</h3>
            <span>¡No dejes pasar la oportunidad de ver en vivo la Copa América 2024 en Barcelona desde el mar! Alquila nuestros catamaranes privados y sé testigo de esta prestigiosa competición de vela, considerada por muchos como el tercer gran evento deportivo.</span>
        </div>
    </section>
    <section class="timeleft">
        <div class="numbers">
            <div>
                <span>196</span>
                <span>DÍAS</span>
            </div>
            <div>
                <span>4</span>
                <span>HORAS</span>
            </div>
            <div>
                <span>41</span>
                <span>MINUTOS</span>
            </div>
            <div>
                <span>50</span>
                <span>SEGUNDOS</span>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="bg">
            <h3>HABLEMOS DE</h3>
            <div class="cats">
                <div class="cat">
                    <h3><?= __('Copa América Masculina', 'sondevela') ?></h3>
                    <div class="img" style="background-image:url('<?=get_template_directory_uri() . '/assets/image/ca/copa-america-masculina-global.png'?>')"></div>
                    <a href="/copa-america-masculina"><div class="button"><?= __('ADÉNTRATE', 'sondevela') ?></div></a>
                </div>
                <div class="cat">
                    <h3><?= __('Copa América Femenina', 'sondevela') ?></h3>
                    <div class="img" style="background-image:url('<?=get_template_directory_uri() . '/assets/image/ca/copa-america-femenina-global.png'?>')"></div>
                    <a href="/copa-america-femenina"><div class="button"><?= __('ADÉNTRATE', 'sondevela') ?></div></a>
                </div>
                <div class="cat">
                    <h3><?= __('Copa América Juvenil', 'sondevela') ?></h3>
                    <div class="img" style="background-image:url('<?=get_template_directory_uri() . '/assets/image/ca/copa-america-juvenil-global.png'?>')"></div>
                    <a href="/copa-america-femenina"><div class="button"><?= __('ADÉNTRATE', 'sondevela') ?></div></a>
                </div>
            </div>
        </div>
    </section>
    <section class="timeline">
        <div class="container">
            <h3><?= __('Timeline de la Copa América Barcelona 2024', 'sondevela') ?></h3>
            <h4><?= __('AGOSTO - OCTUBRE 2024', 'sondevela') ?></h4>
        </div>
        <div class="image"></div>
    </section>
    <section class="calendar-comp">
        <div class="container">
            <h3><?= __('La Competición', 'sondevela') ?></h3>
            <h4><?= __('DÍA A DÍA', 'sondevela') ?></h4>
            <div class="calendar" id="calendar"></div>
        </div>
    </section>

    <?php
    //Slider bolas productos
    if (file_exists(get_theme_file_path("/template-parts/parts/flota-barcos-2.php"))) {
        include(get_theme_file_path("/template-parts/parts/flota-barcos-2.php"));
    }
    ?>

    <section class="location">
        <div class="container">
            <div>
                <img src="<?=get_template_directory_uri() . '/assets/image/ca/'?>copa-america-3.png">
            </div>
            <div>
                <h3><?= __('Ubicación de <br/> nuestra flota', 'sondevela') ?></h3>
                <img src="<?=get_template_directory_uri() . '/assets/image/ca/'?>copa-america-4.png">
                <span><?= __('Nuestra flota se ubica entre el Marina Port Vell y el Marina Vela, centros absolutos del Evento. Saldremos desde el mismo sitio que los equipos de la Copa América.', 'sondevela') ?></span>
            </div>
        </div>
    </section>
</div>

<script>
    jQuery(document).ready(function($){

        var today = new Date();

        $("#calendar").evoCalendar({
            language: 'es',
            sidebarDisplayDefault: false,
            sidebarToggler: false,
            eventListToggler: true,
            titleFormat: 'MM yy',
            eventHeaderFormat: 'dd MM',
            calendarEvents: <?=$dates_formatted?>
        });

        $('#calendar .calendar-inner').prepend('<button class="btncopa left" onclick="decreaseMonth();"><</button><button class="btncopa right" onclick="increaseMonth();">></button>');
    });

    function increaseMonth() {
        var active_date = jQuery('#calendar').evoCalendar('getActiveDate');
        console.log(active_date);
        var tmp = active_date.split("/");
        month = Number(tmp[0]);
        new_date = (Number(tmp['0']) + 1);
        jQuery('#calendar').evoCalendar('selectDate', new_date + '/1/2024');
        console.log(new_date + '/1/2024');
    }
    function decreaseMonth() {
        var active_date = jQuery('#calendar').evoCalendar('getActiveDate');
        console.log(active_date);
        var tmp = active_date.split("/");
        month = Number(tmp[0]);
        new_date = (Number(tmp['0']) - 1);
        jQuery('#calendar').evoCalendar('selectDate', new_date + '/1/2024');
        console.log(new_date + '/1/2024');
    }

</script>

<?php
get_footer();
?>
