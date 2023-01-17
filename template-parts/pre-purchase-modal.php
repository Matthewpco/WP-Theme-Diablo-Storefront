<?php

/**
 * Displays the pre-purchase modal
 */

?>

<!-- The Pre-Purchase Modal -->
<div id="purchase-modal" class="modal">
    <!-- Modal content -->
    <div class="purchase-modal-content">
        <div class="purchase-modal-header">
            <span class="purchase-close">&times;</span>
        </div>

        <div class="purchase-modal-body">
            <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-logo-002.webp" />
            <h3>Pre-order Diablo® IV and receive Early Access to the Open Beta* and Light Bearer Mount in Diablo® IV.</h3>
            <div class="full-section">
                <button>BATTLE.NET</button>
                <button>XBOX</button>
                <button>PLAYSTATION</button>
            </div>
            <div class="full-section">
                <p>Windows</p>
                <p>Xbox Series X|S</p>
                <p>Playstation 5</p>
            </div>
            <div class="full-section">
                <p></p>
                <p>Xbox One</p>
                <p>Playstation 4</p>
            </div>
            <h2>COMPARE EDITIONS</h2>
            <p>Upgrade your Diablo IV experience with the Digital Deluxe or Ultimate Edition.</p>
            <div class="full-section">

                <div class="one-third-section">
                    <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-base-edition.webp" width="350px" />
                    <h4>Standard Edition:</h4>
                    <div class="purchase-modal-description">
                        <ul>
                            <li>
                                Inarius Wings & Inarius Murloc Pet in Diablo® III**
                            </li>
                            <li>
                                Amalgam of Rage Mount in World of Warcraft®**
                            </li>
                            <li>
                                Umber Winged Darkness Cosmetics Set in Diablo Immortal™**
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="one-third-section">
                    <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-deluxe-edition.webp" width="350px" />
                    <h4>Digital Deluxe Edition:</h4>
                    <div class="purchase-modal-description">
                        <ul>
                            <li>
                                Inarius Wings & Inarius Murloc Pet in Diablo® III**
                            </li>
                            <li>
                                Amalgam of Rage Mount in World of Warcraft®**
                            </li>
                            <li>
                                Umber Winged Darkness Cosmetics Set in Diablo Immortal™**
                            </li>
                            <li>
                                Inarius Wings & Inarius Murloc Pet in Diablo® III**
                            </li>
                            <li>
                                Amalgam of Rage Mount in World of Warcraft®**
                            </li>
                            <li>
                                Umber Winged Darkness Cosmetics Set in Diablo Immortal™**
                            </li>
                            <li>
                                Amalgam of Rage Mount in World of Warcraft®**
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="one-third-section">
                    <img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-ultimate-edition.webp" width="350px" />
                    <h4>Ultimate Edition:</h4>
                    <div class="purchase-modal-description">
                        <ul>
                            <li>
                                Inarius Wings & Inarius Murloc Pet in Diablo® III**
                            </li>
                            <li>
                                Amalgam of Rage Mount in World of Warcraft®**
                            </li>
                            <li>
                                Umber Winged Darkness Cosmetics Set in Diablo Immortal™**
                            </li>
                            <li>
                                Inarius Wings & Inarius Murloc Pet in Diablo® III**
                            </li>
                            <li>
                                Amalgam of Rage Mount in World of Warcraft®**
                            </li>
                            <li>
                                Umber Winged Darkness Cosmetics Set in Diablo Immortal™**
                            </li>
                            <li>
                                Inarius Wings & Inarius Murloc Pet in Diablo® III**
                            </li>
                            <li>
                                Amalgam of Rage Mount in World of Warcraft®**
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="purchase-modal-footer">
            <p>*Actual platform availability and launch date(s) of the Beta subject to change. See Diablo.com for more details. Minimum Open Beta duration is 2 days. Limited time only. Internet connection required.
            <p>**Downloaded separately. Availability varies by platform and region. Diablo® III, Diablo Immortal™ and World of Warcraft® sold separately.</p>
            <p>***Up to 4 days based on estimated access; actual play time subject to possible outages and applicable time zone differences.</p>
            </p>
        </div>

    </div>
</div>

<script>
    // Get the pre-purchase modal
    var purchaseModal = document.getElementById("purchase-modal");

    // Get the button that opens the modal
    var purchaseBtn = document.querySelectorAll("#menu-item-85");

    // Get the <span> element that closes the modal
    var purchaseSpan = document.getElementsByClassName("purchase-close")[0];

    // When the user clicks the main header button, open the modal 
    purchaseBtn[0].onclick = function() {
        purchaseModal.style.display = "flex";
    }

    // When the user clicks the mobile header button, open the modal 
    purchaseBtn[1].onclick = function() {
        purchaseModal.style.display = "flex";
    }

    // When the user clicks on <span> (x), close the modal
    purchaseSpan.onclick = function() {
        purchaseModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == purchaseModal) {
            purchaseModal.style.display = "none";
        }
    }
</script>