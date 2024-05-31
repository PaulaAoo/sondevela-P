<?php
/* Template Name: Contacto Template */
get_header();

$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );

?>
    <main id="primary" class="site-main contacto">
        <div class="banner" style="background-image:url('<?=$image[0]?>')">

        </div>

        <div class="container">
            <div class="content">
                <div class="column">
                    <span class="subtitle">SONDEVELA</span>
                    <h1>Contacta con nosotros</h1>
                    <span>Si tienes dudas acerca de nuestro servicio de alquiler de catamarán en Barcelona, las experiencias que organizamos a bordo o quieres organizar un evento personalizado, rellena el formulario y nos comunicaremos contigo.   Recuerda que también puedes seguirnos a través de nuestras redes sociales o escribirnos vía WhatsApp. ¡Te responderemos a la mayor brevedad posible!</span>
                </div>
                <div class="column">
                    <?php echo do_shortcode('[wpforms id="1680" title="false"]');?>
                </div>
            </div>
        </div>

        <div class="map" style="background-image: url('<?=get_stylesheet_directory_uri().'/assets/image/sondevela-mapa-2.png'?>')"></div>
    </main><!-- #main -->

<?php
get_footer();
