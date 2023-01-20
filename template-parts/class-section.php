<?php

/**
 * Displays the class section
 */

?>
<style>
    .classes-content {
        background-color: #000;
    }

    .classes-header {
        text-align: center;
        display: flex;
        flex-direction: column;
        padding: 1% 30% 1% 30%;
    }

    .classes-header h2 {
        font-size: 1.2rem;
        font-family: 'Alegreya Sans';
    }

    .classes-header h3 {
        font-size: 3rem;
        font-family: 'Old Fenris';
        padding-top: 0;
    }

    .classes-header p {
        font-family: 'Alegreya Sans';
        font-size: 1.2rem;
    }

    .classes-body {
        background-image: url(http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-class-bg-desktop-background-001-scaled.webp);
        background-position: center;
        background-size: cover;
    }
</style>
<div class="classes-content"><!-- Begin Class Section -->
    <div class="classes-header">
        <h2 class="color-brown">Classes</h2>
        <h3 class="color-tan">HEROES OF SANCTUARY</h3>
        <p class="color-gray">Create and customize your character to battle onward against the unspeakable horrors that blight this land. Choose from one of five classes, discover and experiment with a vast array of powerful equipment, and carefully select your talents and abilities to become steadfast in the face of darkness. But choose wisely; your world depends on it.</p>
    </div>
    <div class="classes-body">
        <d4s-classes></d4s-classes>
    </div>
    <div style="margin-top: -5%"></div>
</div><!-- End Class Section -->