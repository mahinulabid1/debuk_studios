<?php
// Specify the current page to update info in header
$current_page_head = "Home";
$location_to_logo_icon = "./source/media/web_title_icon.png";

// the nav bar logo link
$nav_bar_logolink =  "./source/media/logoicon.png";
$path_to_hamburger_icon= "./source/media/hamburger.png";
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
                <h1 class="hero-heading big-heading">
                    404 the header is missing.. dont let your brand be missed too
                </h1>
                <h2 class="hero-sub-heading normal-heading">welcome to debuk studio</h2>

                <p class="hero-description paragraph-text">
                    Excite your audience with the quality of your <sapn style="font-family: font-bold">brand</span>
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
                <img src="./source/media/home/image1.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="auto" width="100%">
                <p class="paragraph-text banner-para">
                    Strong branding makes an impact in the market
                </p>
            </div>

            <div class="banner-flex-item">
                <img src="./source/media/home/image2.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="auto" width="100%">
                <p class="paragraph-text banner-para">
                    Stands out from the crowd
                </p>
            </div>

            <div class="banner-flex-item">
                <img src="./source/media/home/image3.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="auto" width="100%">
                <p class="paragraph-text banner-para">
                    Filters out improper leads
                </p>
            </div>

            <div class="banner-flex-item">
                <img src="./source/media/home/image4.webp" alt="" class="display-block banner-flex-image" style="object-fit: cover;" height="auto" width="100%">
                <p class="paragraph-text banner-para">
                    Brand identity supports product launches.
                </p>
            </div>
        </div>

        <h1 class="banner-heading normal-heading">Everything your customer wants to see from their favorite brand.</h1>
    </section>

    <section class="text-slider-section">
        <div class="text-slider-container">
            <span> BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN | BRAND IDENTITY | WEB DESIGN |
        </div>
        </div>

        <p class="paragraph-text text-slider-paragraph  bound">
            Logo is not just a drawing or a shape, brand strategy is not a waste of time. Don’t let your time and lack of experience be your excuse
            for not creating a good brand. Brands without proper planning, strategy, and with bad design decay in a hidden
            market and stay on the same level without making a step forward.
        </p>
    </section>



    <footer class="bound">
        <div class="footer-flex-container display-flex d-flex-space-between">
            <div class="footer-flex-item">
                <h1 class="big-heading">Let’s talk about your next big brand.</h1>
                <a href="#" class="footer-link-take-action normal-heading">Take action →</a>
                <a class="footer-email " href="mailto:contact@debukstudio.com">contact@debukstudio.com</a>
            </div>

            <div class="footer-flex-item" >
                <div class="fist_link-list">
                    <a href="#" class="display-block footer-links-a">Home →</a>
                    <a href="#" class="display-block footer-links-a">About →</a>
                    <a href="#" class="display-block footer-links-a">Project →</a>
                    <a href="#" class="display-block footer-links-a">Services →</a>
                </div>

                <div class="second_link-list">
                    <p class="footer-links-a comming-soon-text">Coming Soon</p>
                    <a href="#" class="display-block footer-links-a">Shop →</a>
                </div>
            </div>

        </div>

        <div class="footer-copyright display-flex d-flex-space-between">
            <div class="footer-copyright-item">©2022 debukstudio</div>
            <div class="footer-copyright-item">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                
            </div>
        </div>
    </footer>
</body>


</html>