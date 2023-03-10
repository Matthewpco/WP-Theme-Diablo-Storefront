<?php

/**
 * Displays the world section
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Storefront
 * @subpackage Diablo_4_Storefront_Child
 * @since Diablo 4 Storefront Child 1.0
 */

?>
<!-- Begin World Section -->
<div id="world" class="world-content row">
    <div class="world-header">
        <h2 class="color-brown">World</h3>
            <h3 class="color-tan">EXPLORE SANCTUARY</h3>
            <p class="color-gray">Explore Sanctuary – Discover the world of Sanctuary as you battle through its expansive lands. Join fellow adventurers, retake besieged towns, delve into corrupted dungeons, and uncover lost secrets as you fight for the fate of the world.</p>
    </div>

    <div class="world-body">

        <div class="row">

            <div class="row">
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World01-Scosglen-Small.webp" style="width:100%" onclick="openWorldModal();currentSlide(1)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World02-Scosglen.webp" style="width:100%" onclick=" openWorldModal();currentSlide(2)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World03-Scosglen-Small.webp" style="width:100%" onclick="openWorldModal();currentSlide(3)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World04-Scosglen-Medium.webp" style="width:100%" onclick="openWorldModal();currentSlide(4)" class="hover-shadow cursor">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World05-Scosglen-Small.webp" style="width:100%" onclick="openWorldModal();currentSlide(5)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World06-Fractured_Peaks-Small.webp" style="width:100%" onclick="openWorldModal();currentSlide(6)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World07-Dry_Steppes-Small.webp" style="width:100%" onclick="openWorldModal();currentSlide(7)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World08-Dry_Steppes-Small.webp" style="width:100%" onclick="openWorldModal();currentSlide(8)" class="hover-shadow cursor">
                </div>
            </div>

            <div class="hidden" id="view-more-div">
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World09-Hawezar-Small.webp" style="width:100%" onclick="openWorldModal();currentSlide(9)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World010-Hawezar-Large.webp" style="width:100%" onclick="openWorldModal();currentSlide(10)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World011-Hawezar-Large.webp" style="width:100%" onclick="openWorldModal();currentSlide(11)" class="hover-shadow cursor">
                </div>
                <div class="column">
                    <img src="/wp-content/uploads/2023/01/World12-Kehjistan-Large.webp" style="width:100%" onclick="openWorldModal();currentSlide(12)" class="hover-shadow cursor">
                </div>
            </div>

            <div class="world-view-all" id="world-view-btn">
                <button class="color-beige" onclick="viewAll()">VIEW ALL</button>
            </div>

        </div>

        <div id="world-modal" class="world-modal">
            <span class="close cursor color-tan" onclick="closeWorldModal()">&times;</span>
            <div class="world-modal-content">

                <div class="worldSlides">
                    <div class="numbertext">1 / 12</div>
                    <video width="100%" height="" controls>
                        <source src="/wp-content/uploads/2023/01/Scosglen-01-540p.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="worldSlides">
                    <div class="numbertext">2 / 12</div>
                    <video width="100%" height="" controls>
                        <source src="/wp-content/uploads/2023/01/Scosglen-02-540p.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="worldSlides">
                    <div class="numbertext">3 / 12</div>
                    <video width="100%" height="" controls>
                        <source src="/wp-content/uploads/2023/01/Scosglen-03-540p.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="worldSlides">
                    <div class="numbertext">4 / 12</div>
                    <video width="100%" height="" controls>
                        <source src="/wp-content/uploads/2023/01/Scosglen-04-540p.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="worldSlides">
                    <div class="numbertext">5 / 12</div>
                    <img src="/wp-content/uploads/2023/01/World05-Scosglen-Small.webp" style="width:100%">
                </div>

                <div class="worldSlides">
                    <div class="numbertext">6 / 12</div>
                    <img src="/wp-content/uploads/2023/01/World06-Fractured_Peaks-Small.webp" style="width:100%">
                </div>

                <div class="worldSlides">
                    <div class="numbertext">7 / 12</div>
                    <img src="/wp-content/uploads/2023/01/World07-Dry_Steppes-Small.webp" style="width:100%">
                </div>

                <div class="worldSlides">
                    <div class="numbertext">8 / 12</div>
                    <img src="/wp-content/uploads/2023/01/World08-Dry_Steppes-Small.webp" style="width:100%">
                </div>

                <div class="worldSlides">
                    <div class="numbertext">9 / 12</div>
                    <img src="/wp-content/uploads/2023/01/World09-Hawezar-Small.webp" style="width:100%">
                </div>

                <div class="worldSlides">
                    <div class="numbertext">10 / 12</div>
                    <img src="/wp-content/uploads/2023/01/World010-Hawezar-Large.webp" style="width:100%">
                </div>

                <div class="worldSlides">
                    <div class="numbertext">11 / 12</div>
                    <img src="/wp-content/uploads/2023/01/World011-Hawezar-Large.webp" style="width:100%">
                </div>

                <div class="worldSlides">
                    <div class="numbertext">12 / 12</div>
                    <img src="/wp-content/uploads/2023/01/World12-Kehjistan-Large.webp" style="width:100%">
                </div>

                <a class="prev color-brown" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next color-brown" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>
                <!-- Slide Gallery displayed after clicking on an image, left out for full screen view.
                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World01-Scosglen-Small.webp" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World02-Scosglen.webp" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World03-Scosglen-Small.webp" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World04-Scosglen-Medium.webp" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World05-Scosglen-Small.webp" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World06-Fractured_Peaks-Small.webp" style="width:100%" onclick="currentSlide(6)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World07-Dry_Steppes-Small.webp" style="width:100%" onclick="currentSlide(7)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World08-Dry_Steppes-Small.webp" style="width:100%" onclick="currentSlide(8)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World09-Hawezar-Small.webp" style="width:100%" onclick="currentSlide(9)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World010-Hawezar-Large.webp" style="width:100%" onclick="currentSlide(10)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World011-Hawezar-Large.webp" style="width:100%" onclick="currentSlide(11)" alt="Northern Lights">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/World12-Kehjistan-Large.webp" style="width:100%" onclick="currentSlide(12)" alt="Northern Lights">
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>

    <div class="world-footer">

        <div class="one-half-section">
            <div id="world-comparison">
                <figure>
                    <div id="world-divisor"></div>
                </figure>
                <input type="range" min="0" max="100" value="50" id="world-slider" oninput="moveDivisor()">
            </div>
            <h3 class="color-tan">STRONGHOLDS</h3>
            <p class="color-gray">Heroic adventurers can clear out Strongholds such as this one, claiming them once again for the citizens of Sanctuary. The town will never be the same, but victory here can leave a lasting mark and transform this hostile region into a safe haven.</p>
        </div>

        <div class="one-half-section">
            <picture>
                <source media="(min-width:768px)" srcset="/wp-content/uploads/2023/01/PvP03-Medium-416x178.webp">
                <source media="(min-width:320px)" srcset="/wp-content/uploads/2023/01/PvP03-Medium-300x129.webp">
                <img src="/wp-content/uploads/2023/01/PvP03-Medium-416x178.webp" alt="PVP" style="width:auto;">
            </picture>
            <h3 class="color-tan">PVP</h3>
            <p class="color-gray">Battles take a turn when you enter PvP zones. Mark yourself as “hostile” and these high-risk, high-reward areas of Sanctuary allow you to take a swing at other players for their valuable loot. But be warned. This also opens you up to being swung at.
            </p>
        </div>
    </div>
</div><!-- End World Section -->