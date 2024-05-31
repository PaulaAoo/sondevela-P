<?php 
	/* Template Name: Regiondo Checkout */

	/*
		
		
	Caldrà afegir un camp a cada pàgina per poder insertr la ID del formulari. 
	Un cop l'usuari fagi click al botó de reserva enviara un post o get 
	directament a aquesta pàgina la qual rebra la ID i generarà el formulari.
	
	Si l'usuari arriba a aquesta pàgina i no hi ha ID cal redirigir-lo a una altre pàgina.
	
	Per altre banda, també seria interessant guardar la pàgina d'on bé. Per poder afegir un link i tornar enrera,
	
	
	CODIS D'EXEMPLE
	 
	2h = a14a1ac4-2ac9-4b8a-a164-51e1ae4d78c6
	3h = befcbbf4-5bb3-4c89-9c8e-9edcfc660e3b
		
	*/
	

	if($_POST['id_form']){
		$id_formulari = $_POST['id_form'];
	}else{
        wp_redirect(home_url());
        exit;
    }

	//$id_formulari = get_field("id_formulario_regiondo");
    wp_head();
?>


<div class="custom-checkout">
    <div class="header">
        <div class="container">
            <a href="https://sondevela.local/"><img decoding="async" width="175" height="59" alt="" data-src="https://sondevela.local/wp-content/up<dloads/2021/11/Logo-Sondevela-Blanc.png" class="wp-image-582 lazyloaded" src="https://sondevela.local/wp-content/uploads/2021/11/Logo-Sondevela-Blanc.png" loading="lazy"><noscript><img decoding="async" width="175" height="59" src="https://sondevela.local/wp-content/uploads/2021/11/Logo-Sondevela-Blanc.png" alt="" class="wp-image-582" /></noscript></a>
        </div>
    </div>
    <div class="content">
        <div class="form">

        <?php
            if(isset($_SERVER['HTTP_REFERER'])) {
                $previous = $_SERVER['HTTP_REFERER'];
                echo '<a href="'.$previous.'">'.__('Volver atrás','sondevela').'</a>';
            }
        ?>

            <booking-widget widget-id="<?=$id_formulari?>"></booking-widget><script type="text/javascript" src="https://widgets.regiondo.net/booking/v1/booking-widget.min.js"></script>
            <br/>
            <span class="disclaimer">Si deseas reservar todo un dia o varios días, o bien, realizar un tipo de reserva que no aparece en la configuración de reserva, ponte en contacto con nosotros info@sondevela.local o por whatsapp.</span>
            <span class="disclaimer">Puede que algunas reservas se retrasen 30 o 60 minutos si es necesario hacer tareas de limpieza i mantenimiento del catamarán a causa de una salida en las horas previas. Si es el caso, nos pondremos en contacto con vosotros.</span>
        </div>
        <!--<div class="info">
            <div class="fixed">
                <h2>Lorem Ipsum</h2>
                <img class="no-lazyload" src="https://sondevela.com/wp-content/uploads/2022/01/CATAMARAN-BARCELONA-DE-DIA-2.jpg" />
                <span class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                <div class="icons">
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-bebida-07.png" title="Cerveza, cava, vino, agua, té, café y refresco"/>
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-comida.png" title="Pan con tomate y aceite oliva, embutidos, queso, nachos, guacamole y tortilla española"/>
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-paddle-surf.png" title="2 paddle surf + 5 máscaras de snorkel" />
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-musica.png" title="Equipo de música con sistema bluetooth"/>
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-capitan.png" title="Patrón y azafata profesionales"/>


                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-capacidad.png" />
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-gasolina_Mesa-de-trabajo-1-copia.png" />
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-tiempo.png" />
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-point.png" />
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2022/02/sondevela-hora-inicio.png" />
                    <img class="no-lazyload icon" src="https://sondevela.local/wp-content/uploads/2023/02/seguro-sondevela-2.png" />
                </div>
            </div>
        </div>-->
    </div>
</div>