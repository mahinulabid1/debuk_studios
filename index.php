<?php 
// first set the some variable for the HEAD section information
// Specify the current page to update info in header
$current_page_head = "Home";
$location_to_logo_icon = "./source/media/web_title_icon.png";

// the nav bar logo link
$nav_bar_logolink =  "./source/media/logoicon.png";
?>

<!DOCTYPE html>
<html lang="en-US">

    <head>
        <?php include "./source/_modules/head_info.php"; ?>
        <!-- fonts  -->
        <link rel="stylesheet" href="./source/css/fonts.css">

        <!-- main stylesheet -->
        <link rel="stylesheet" href="./source/css/style.css">

        <!-- navigation bar -->
        <link rel="stylesheet" href="./source/css/navigation_bar.css">

        <!-- UNIVERSAL CSS -->
        <link rel="stylesheet" href="./source/css/Universal_CSS.css">
    </head>

    <body>
        <header class="bound">
            <?php include "./source/_modules/navigation_bar.php"; ?>
            <div class="hero-container display-flex d-flex-space-between">
                <div class="hero-flex-item">
                    <h1 class="hero-heading">
                        404 the header is missing.. dont let your brand be missed too
                    </h1>
                    <h2 class="hero-sub-heading">welcome to debuk studio</h2>

                    <p class="hero-description paragraph-text">
                        Excite your audience with the quality of your <b>brand</b>
                    </p>

                    <p class="hero-description paragraph-text">
                        Raise your brand to professional level. Build a brand with a logo that means something to your audience. 
                    </p>

                </div>
                <div class="hero-flex-item">
                    <div class="hero-video-placeholder">
                        <!-- a video will be here -->
                        <video loop muted autoplay width="100%" height="100%" style="object-fit: cover;">
                            <source src="./source/media/home/video-desktop.webm" type="video/webm">
                        </video>
                    </div>
                </div>
            </div>
        </header>
        

        <section class="banner-section bound">
            <div class="banner-flex-container display-flex d-flex-space-between">
                <div class="banner-flex-item">
                    <img src="./source/media/home/image1.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="100%" width="100%">
                    <p class="paragraph-text">
                        Strong branding makes an impact in the market
                    </p>
                </div>

                <div class="banner-flex-item">
                    second section
                </div>

                <div class="banner-flex-item">
                    third section
                </div>

                <div class="banner-flex-item">
                    fourth section
                </div>
            </div> 
        </section>
    </body>


</html>