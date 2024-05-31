<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package frotifroti
 */

?>

<footer id="colophon" class="site-footer">
    <?php $imgurldesktop = wp_get_attachment_image_url( 165 , 'large');?>
    <div class="biosphere" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/wp-content/themes/sondevela/assets/image/footer.jpg)">
        <div class="column">
            <div class="icon">
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-biosphere.png'?>">
            </div>
            <div class="icon">
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-alta-alella.png'?>">
            </div>
            <div class="icon">
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-barcelona-turisme.png'?>">
            </div>
            <div class="icon">
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-pimec.png'?>">
            </div>
            <div class="icon">
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-timeout.png'?>">
            </div>
            <div class="icon">
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-inspirock.png'?>">
            </div>
            <div class="icon">
                <img src="<?=get_template_directory_uri() . '/assets/image/icon-globe-sailor.png'?>">
            </div>
        </div>
    </div>
    <div class="container">
            <div class="widget-area-init">
                <?php $home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>
                <a href="<?=$home_url?>"><img src="<?=get_template_directory_uri() . '/assets/image/logo-sondevela-blanc-footer.png'?>"></a>
                <div class="info">
                    <?php dynamic_sidebar( 'footer_widget_1' ); ?>
                </div>
                <div class="social-networks">
                    <?php dynamic_sidebar( 'footer_widget_2' ); ?>
                </div>
            </div>

            <div class="widget-area">
                <div>
                    <?php dynamic_sidebar( 'footer_widget_3' ); ?>
                </div>
                <div>
                    <?php dynamic_sidebar( 'footer_widget_4' ); ?>
                </div>
                <div>
                    <?php dynamic_sidebar( 'footer_widget_5' ); ?>
                </div>
                <div>
                    <?php dynamic_sidebar( 'footer_widget_6' ); ?>
                </div>

            </div>
    </div>

    <div class="links">
        <p class="copyright">© Sondevela <?=date('Y')?></p>
        <div class="bottom-footer">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-footer',
            ));
        ?>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/e49f4ea707.js" crossorigin="anonymous"></script>
</body>
</html>
