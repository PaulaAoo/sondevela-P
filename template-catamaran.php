<?php
/* Template Name: Catamaran */
get_header();
$image = get_field('banner');
?>
    <main id="primary" class="site-main template-part">
        <div class="banner-catamaran" style="background-image:url('<?=$image?>')">
            <div class="content">
                <h2>Descubre el</h2>
                <h1>Catamarán</h1>
            </div>
        </div>
        <div class="sondevela-section-text-simple">
            <div class="container">
                <div class="content">
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac augue sagittis, consectetur nibh ut, condimentum quam. Nulla lorem magna, vehicula sit amet est nec, gravida finibus velit. Integer accumsan pharetra justo, rutrum pretium turpis euismod at. Nam sed neque ante. Nunc sed dignissim augue, id scelerisque dui.</p>
                </div>
            </div>
        </div>

        <?php
        //Conoce nuestro catamarán
        if (file_exists(get_theme_file_path("/template-parts/parts/conoce-catamaran.php"))) {
            include(get_theme_file_path("/template-parts/parts/conoce-catamaran.php"));
        }
        ?>

        <?php
        //Slider bolas productos
        if (file_exists(get_theme_file_path("/template-parts/parts/bolas-productos.php"))) {
            include(get_theme_file_path("/template-parts/parts/bolas-productos.php"));
        }
        ?>

        <?php
        //Flota de barcos
        if (file_exists(get_theme_file_path("/template-parts/parts/flota-barcos.php"))) {
            include(get_theme_file_path("/template-parts/parts/flota-barcos.php"));
        }
        ?>

    </main><!-- #main -->

<script>
    jQuery(document).ready(function($){
        $( ".product-slider" ).slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true,
            arrows: false
        });
        $( ".hotspot-slider" ).slick({
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev.png" className="slick-prev">',
            nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next.png" className="slick-next">',
        });

        $( ".slider-barcos" ).slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-prev.png" className="slick-prev" class="slick-prev">',
            nextArrow: '<img src="/wp-content/themes/sondevela/assets/image/arrow-next.png" className="slick-next" class="slick-next">',
        });
    });
</script>

<?php
get_footer();
