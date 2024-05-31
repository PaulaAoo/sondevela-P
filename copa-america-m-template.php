<?php
/* Template Name: Copa America Masculina Template */

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

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>
<link rel="stylesheet" type="text/css" href="https://edlynvillegas.github.io/evo-calendar/evo-calendar/css/evo-calendar.orange-coral.min.css"/>


<div class="copa-america-m">
    <div class="banner">
        <div class="content">
        </div>
    </div>

    <div class="sondevela-section-text-simple">
        <div class="container">
            <div class="content">
                <p class="text">En Sondevela nos dedicamos a ofrecer experiencias únicas sobre el mar. Descubre nuestro servicio de alquiler de barco en Barcelona por horas y selecciona tu opción ideal para navegar a bordo de un catamarán de lujo. Diviértete con actividades acuáticas o relájate con tu música favorita mientras pruebas aperitivos locales.</p>
            </div>
        </div>
    </div>

    <section class="calendar-comp">
        <div class="container">
            <h3><?= __('Calendario de la <br/>Copa América Masculina', 'sondevela') ?></h3>
            <div class="calendar" id="calendar"></div>
        </div>
    </section>


    <section class="fases">
        <div class="container">
            <h3><?= __('Calendario de la <br/>Copa América Masculina', 'sondevela') ?></h3>
        </div>
    </section>

    <section class="equipos">
        <div class="container">
            <div class="column">
                <h3>Equipos</h3>
                <span>La Copa América de vela en Barcelona contará con equipos masculinos de clase mundial, como Emirates Team New Zealand (defensores del título), INEOS Britannia, Alinghi Red Bull Racing, Luna Rossa Prada Pirelli, NYYC American Magic y Orient Express Racing Team.</span>
            </div>
            <div class="column">
                <div class="slider-equipos">
                    <?php $equipos = get_field('teams', 'options') ?>
                    <?php foreach($equipos as $equipo) : ?>
                    <?php $flag = $equipo['flag']; ?>
                    <?php $team = $equipo['team_flag']; ?>
                        <?php
                        if($flag) {
                            $flag = 'background-image:url(' . $flag . ')';
                        }else{
                            $flag = 'background: #f4f4f4';
                        }

                        if($team) {
                            $team = 'background-image:url(' . $team . ')';
                        }else{
                            $team = 'background: #f4f4f4';
                        }
                        ?>

                        <div class="equipo" style="<?=$team?>">
                            <div class="flag" style="<?=$flag?>"></div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

    <script>
        jQuery(document).ready(function($){

            var today = new Date();

            $("#calendar").evoCalendar({
                language: 'es',
                sidebarDisplayDefault: false,
                sidebarToggler: false,
                eventListToggler: true,
                titleFormat: 'MM yy',
                firstDayOfWeek: 1,
                eventHeaderFormat: 'Eventos dd MM',
                calendarEvents: <?=$dates_formatted?>,
                todayHighlight: true,
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

</div>

<?php
get_footer();
?>

