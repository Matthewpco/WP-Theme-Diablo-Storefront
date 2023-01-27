<?php

/**
 * Displays the story section
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Storefront
 * @subpackage Diablo_4_Storefront_Child
 * @since Diablo 4 Storefront Child 1.0
 */

?>
<!-- Begin Story Section -->
<div id="story" class="story-content">

    <div class="story-header row">
        <h2 class="color-brown alegreya-sans" style="margin-top: 1%;">Story</h2>
        <h3 class="color-tan size-xl old-fenris">MEET YOUR MAKER</h3>
        <p class="color-gray size-text alegreya-sans">Lilith has returned to Sanctuary, summoned by a dark ritual after eons in exile. Her return ushers in an age of darkness and misery.</p>
    </div>

    <div class="story-body video-container">
        <video autoplay muted loop id="myVideo" width="100%">
            <source src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/fenris-story-bg-loop-ultra.webm" type="video/webm">
        </video>

        <div class="caption">
            <button class="color-beige cursor" onclick="openTrailer();">CINEMATIC TRAILER<i class="fa-solid fa-caret-right" style="margin-left: 8px;"></i></button>

            <div id="story-trailer" class="story-trailer-modal hidden">
                <span class="story-trailer-close cursor" onclick="closeTrailer()">&times;</span>
                <div class="story-trailer-content">
                    <div class="story-trailer">
                        <iframe width="1200" height="675" src="https://www.youtube.com/embed/9bRWIdOMfro" title="Diablo IV Announce Cinematic | By Three They Come" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="story-footer row">

        <div class="two-thirds-section">

            <div id="story-img-1">
                <img src="https://garyp38.sg-host.com/wp-content/uploads/2023/01/Story01-Large.webp" alt="Story-1" width="854" height="480">
            </div>

            <div id="story-img-2" class="hidden">
                <img src="https://garyp38.sg-host.com/wp-content/uploads/2023/01/Story02-Large.webp" alt="Story-2" width="854" height="480">
            </div>

            <div id="story-img-3" class="hidden">
                <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/Story03-Medium.webp" alt="Story-3" width="854" height="480">
            </div>

            <div id="story-img-4" class="hidden">
                <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/Story04-Medium.webp" alt="Story-4" width="854" height="480">
            </div>

            <div id="story-img-5" class="hidden">
                <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/Story05-Medium.webp" alt="Story-5" width="854" height="480">
            </div>

        </div>

        <div class="one-third-section">

            <div id="story-sidebar-1" class="story-sidebar" onclick="revealContent(event)">
                <h3 class="color-tan size-lrg cursor exocet-blizzard">LEGENDS OF CREATION</h3>
                <p id="story-dropdown-1" class="color-gray size-text alegreya-sans">An old legend has it that Sanctuary was created by the union of an angel and a demon, and that their descendants—humanity—built villages, then cities and empires, spreading across the land to form the world's cultures and civilization.</p>
            </div>

            <div id="story-sidebar-2" class="story-sidebar" onclick="revealContent(event)">
                <h3 class="color-tan size-lrg cursor exocet-blizzard">A REIGN OF ENMITY</h3>
                <p id="story-dropdown-2" class="hidden color-gray size-text alegreya-sans">Chaos threatens to consume Sanctuary as evil and impiety continue to spread. Depraved demons and corrupted wildlife roam the land unchecked, as terrified townsfolk huddle in dark corners trying to survive one more day.</p>
            </div>

            <div id="story-sidebar-3" class="story-sidebar" onclick="revealContent(event)">
                <h3 class="color-tan size-lrg cursor exocet-blizzard">CULT OF PERSONALITY</h3>
                <p id="story-dropdown-3" class="hidden color-gray size-text alegreya-sans">The pious plead for guidance from their faith, but doubts have them feeling that their devotion is misplaced. Lilith's return has spawned a new wave of cultists and worshippers, but regardless of dogma, all prayers remain unanswered.</p>
            </div>

            <div id="story-sidebar-4" class="story-sidebar" onclick="revealContent(event)">
                <h3 class="color-tan size-lrg cursor exocet-blizzard">DAUGHTER OF HATRED</h3>
                <p id="story-dropdown-4" class="hidden color-gray size-text alegreya-sans">The daughter of Mephisto awakens burning urges in the hearts of those around her, be it demon, human or beast. Profound fears, unchecked rage, repressed impulses, sinful desires—all are brought forth violently and irresistibly by her mere presence.</p>
            </div>

            <div id="story-sidebar-5" class="story-sidebar" onclick="revealContent(event)">
                <h3 class="color-tan size-lrg cursor exocet-blizzard">UNSTOPPABLE EVIL</h3>
                <p id="story-dropdown-5" class="hidden color-gray size-text alegreya-sans">As darkness returns to Sanctuary, a brave few dare to face this threat. But what fate awaits them in a land forsaken by hope, valor, wisdom, and justice?</p>
            </div>

        </div>
    </div>
</div><!-- End Story Section -->