<?php

/**
 * Displays the overview section
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Storefront
 * @subpackage Diablo_4_Storefront_Child
 * @since Diablo 4 Storefront Child 1.0
 */

?>
<style>
    .overview-content {
        padding-top: 7%;
        background-color: #000;
    }

    .overview-content .video-container {
        width: 100%;
        height: 80vh;
        position: relative;
    }

    .overview-content .video-container video {
        width: 100%;
        height: 100%;
        position: absolute;
        object-fit: cover;
        z-index: 0;
    }

    /* Just styling the content of the div, the *magic* in the previous rules */
    .overview-content .video-container .caption {
        z-index: 1;
        position: relative;
        text-align: center;
        color: #dc0000;
        padding: 10px;
    }
</style>
<!-- Begin overview- Section -->
<div id="overview" class="overview-content video-container">

    <div class="overview-body video-container">
        <video autoplay muted loop id="overviewVideo" width="100%">
            <source src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/fenris-introduction-bg-loop-ultra.webm" type="video/webm">
        </video>

        <div class="caption">
            <h2 class="color-brown alegreya-sans" style="margin-top: 1%;">Story</h2>
            <h3 class="color-tan size-xl old-fenris">MEET YOUR MAKER</h3>
            <p class="color-gray size-text alegreya-sans">Lilith has returned to Sanctuary, summoned by a dark ritual after eons in exile. Her return ushers in an age of darkness and misery.</p>
            <button id="menu-item-85" class="color-beige cursor" onclick="openTrailer();">PRE-PURCHASE</button>
        </div>
    </div>
</div><!-- End overview- Section -->