<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sondevela
 */


$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-content" style="background-image: url('<?=$image[0]?>')">
        <div class="content">
            <span class="meta">
                <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo esc_html( $categories[0]->name );
                }
                ?>
            </span>
            <a href="<?=get_permalink()?>"><h2 class="title"><?=the_title()?></h2></a>
            <span class="excerpt"><?=the_excerpt()?></span>
        </div>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
