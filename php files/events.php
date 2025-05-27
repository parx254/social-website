<?php
  include('functions.php');
  $title = "Events | Social Destinations";   // Set the title
  $activePage = 'explore';          // Set the active page
  $city = 'Nashville';              // Set the city
    $keywords = 'Events, Travel, Trips, Travel Tips, Moments, Events, Holidays, Social Destinations, Social, Destinations';          // Set the keywords
  $description = 'Discover Events'; //Set the description
  $currentcolor = '#000';           // (5) Set the color
  include "header.php";             // Include the header
  ?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBS5FHD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">
        <div class="topslide">
            <video playsinline autoplay loop muted>
                <source src="SiteVideos/Events.mp4" type="video/mp4">
                <source src="SiteVideos/Events.webm" type="video/webm">
                <source src="SiteVideos/Events.ogv" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <div class="city-hero-text">
                <h1>Events</h1>
                <p>
                    <a href="#" class="scroll-down" address="true"></a>
                </p>
            </div>
        </div>
        <div class="bodycontainer">
            <div class="maintitle">
                <div class="text-box">
                    <h2>posts</h2>
                </div>
            </div>
            <div class='feedposts'>
                <?php all_Events(); ?>
            </div>
            <div class='videofeedposts'>
                <?php all_Events_videos(); ?>
            </div>
        </div>
        <?php citysearch(); ?>
    </div>
    <?php
  include "footer.php";
  ?>
</body>
<style>
    .topslide {
        background: #1B1B1B !important
    }
</style>

</html>