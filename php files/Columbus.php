<?php
  include('functions.php');
  $title = "Columbus | Social Destinations";      // (1) Set the title
  $description = 'Discover Columbus';           // (2) Set the description
  $city = 'Columbus';                  // (3) Set the city
  $keywords = 'Columbus, Travel, Trips, Travel Tips, Adventures, Events, Holidays, Social Destinations, Social, Destinations';          // Set the keywords
  $activePage = 'explore';             // (4) Set the active page
  $currentcolor = '#61259E';           // (5) Set the color
  include "header.php";                // (6) Include the header
  ?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBS5FHD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">
        <div class="topslide">
            <video playsinline autoplay loop muted>
                <source src="SiteVideos/columbus.mp4" type="video/mp4">
                <source src="SiteVideos/columbus.webm" type="video/webm">
                <source src="SiteVideos/columbus.ogv" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <div class="city-hero-text">
                <h1>Columbus</h1>
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
                <?php all_Columbus(); ?>
            </div>
            <div class='videofeedposts'>
                <?php all_Columbus_Videos(); ?>
            </div>
            <?php cityweather(); ?>
        </div>
        <?php citysearch(); ?>
    </div>
    <?php
  include "footer.php";
  ?>
</body>

</html>