<?php

/**
 * Displays the news section
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Storefront
 * @subpackage Diablo_4_Storefront_Child
 * @since Diablo 4 Storefront Child 1.0
 */

?>
<!-- Begin News template -->
<div class="news-content">
    <div class="news-header">
        <h2 class="color-brown alegreya-sans center" style="padding-top: 1%;">NEWS</h2>
        <h3 class="color-tan size-xl old-fenris center">DEVELOPER UPDATES</h3>
        <p class="color-gray size-text alegreya-sans center">Head over to Blizzard News to get the latest Diablo IV updates.</p>
    </div>

    <div class="news-body row">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();

        ?>

                <div class="one-quarter-section center">
                    <a href="https://news.blizzard.com/en-us/diablo4"><img src="<?php the_post_thumbnail() ?>" /></a>
                    <div class="news-title center">
                        <a href="https://news.blizzard.com/en-us/diablo4">
                            <h3 class="color-tan center exocet-blizzard size-text">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                    </div>
                </div>

        <?php

            endwhile;
        endif;
        ?>

    </div>

    <div class="news-footer center">
        <a href="https://news.blizzard.com/en-us/diablo4"><button class="color-beige cursor">VIEW ALL</button></a>
    </div>
</div><!-- End News template -->