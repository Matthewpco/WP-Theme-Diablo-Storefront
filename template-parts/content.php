<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


if (is_single()) {
    add_action('wp_enqueue_scripts', 'dequeue_parent_scripts', 100);
}
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

        <div class="entry-content">

            <?php
            if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
                the_excerpt();
            } else {
                the_content(__('Continue reading', 'twentytwenty'));
            }
            ?>

        </div><!-- .entry-content -->

    </div><!-- .post-inner -->

    <?php

    if (is_single()) {

        get_template_part('template-parts/navigation');
    }

    ?>

</article><!-- .post -->