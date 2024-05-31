<?php
/* Template Name: Blog */

get_header();
$id = get_queried_object_id();
?>
    <main id="primary" class="site-main blog">

        <?php if ( have_posts() ) : ?>
            <header class="page-header" style="background-image:url(<?=get_the_post_thumbnail_url($id,'full')?>)">
                <div class="container">
                    <h2><?=__('Sondevela','sondevela')?></h2>
                    <h1><?=__('El Blog','sondevela')?></h1>
                </div>
            </header><!-- .page-header -->
            <div class="container">
                <div class="posts">
                    <?php

                    $args = array(
                        'status'      => 'publish',
                        'numberposts' => '-1'
                    );

                    $latest_posts = get_posts( $args );

                    if ( $latest_posts ) :
                        foreach($latest_posts as $post){
                            get_template_part('template-parts/content-post');
                        }
                    endif;
                    ?>
                </div>
            </div>

        <?php endif;?>

    </main><!-- #main -->

<?php
get_footer();
