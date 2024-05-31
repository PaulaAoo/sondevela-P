<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sondevela
 */

get_header();

?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');

            ?>

            <header class="page-header" style="background-image: url('<?=$image[0]?>')">
                <div class="container">
                    <span class="meta">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo esc_html( $categories[0]->name );
                        }
                        ?>
                    </span>
                    <h2 class="title"><?=the_title()?></h2>
                    <?php sondevela_posted(); ?>
                </div>
            </header><!-- .page-header -->

            <header class="entry-content">
                <div class="container">
                    <span class="post-breadcrumbs"><a href="/">Home</a> > <a href="/blog">Blog</a> > <a href="<?=the_permalink()?>"><?=the_title()?></a></span>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </header><!-- .entry-header -->



		<?php
        endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
