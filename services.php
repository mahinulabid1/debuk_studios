<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Services";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/services.css">

    <!-- fonts  -->
    <link rel="stylesheet" href="./source/css/fonts.css">

    <!-- navigation bar -->
    <link rel="stylesheet" href="./source/css/navigation_bar.css">

    <!-- UNIVERSAL CSS -->
    <link rel="stylesheet" href="./source/css/Universal_CSS.css">

    <!-- footer -->
    <link rel="stylesheet" href="./source/css/footer.css">
</head>

<body>
    <header class="bound">

        <!-- REUSEABLE NAVIGATION BAR -->
        <?php
        // SETTING UP REUSEABLE NAVIGATION BAR AND ITS PATH
        $nav_first_link_text = "Services";
        $nav_first_link_path = "#";

        $nav_second_link_text = "Project";
        $nav_second_link_path = "#";

        $nav_third_link_text = "Contact";
        $nav_third_link_path = "#";

        $nav_bar_logolink =  "./source/media/logoicon.png";
        $path_to_hamburger_icon = "./source/media/hamburger.png";
        $path_to_themeChange_btn = "./source/media/ThemeChange_btn.png";
        $path_to_cross_btn = "./source/media/cross-btn.png";

        include "./source/_modules/navigation_bar.php";
        ?>



        <!-- HERO CONTENT -->
        <div class="hero-content-container">
            <h1 class="big-heading hero-heading">Services</h1>
            <div class="display-flex d-flex-space-between d-flex-wrap-true hero-flex-container">

                <div class="flex-item-hero">
                    <!-- putting in another container to make image stay at -->
                    <div class="hero-container-relative">
                        <h2 class="hero-flex-item__header normal-heading">Branding Identity</h2>
                        <p class="paragraph-text">Branding</p>
                        <p class="paragraph-text">Branding Strategy</p>
                        <p class="paragraph-text">Branding style guide</p>
                        <p class="paragraph-text">Visual Identity System</p>
                        <img class="hero-flex-image" src="./source/media/service/brand.webp" alt="" width="100%" height="196" style="object-fit:cover ;">
                    </div>
                </div>

                <div class="flex-item-hero">
                    <div class="hero-container-relative">
                        <h2 class="hero-flex-item__header normal-heading">Online appearance</h2>
                        <p class="paragraph-text">Web Development</p>
                        <p class="paragraph-text">Web Design</p>
                        <p class="paragraph-text">UI / UX</p>
                        <p class="paragraph-text">Social Media Design</p>
                        <img class="hero-flex-image" src="./source/media/service/online.webp" alt="" width="100%" height="196" style="object-fit:cover ;">
                    </div>

                </div>

                <div class="flex-item-hero">
                    <div class="hero-container-relative">
                        <h2 class="hero-flex-item__header normal-heading">Printed Media</h2>
                        <p class="paragraph-text">Packaging</p>
                        <p class="paragraph-text">Graphic Design</p>
                        <p class="paragraph-text">Printed Collateral</p>
                        <img class="hero-flex-image" src="./source/media/service/print.webp" alt="" width="100%" height="196" style="object-fit:cover ;">
                    </div>

                </div>

                <div class="flex-item-hero">
                    <div class="hero-container-relative">
                        <h2 class="hero-flex-item__header normal-heading">Brand Consultancy</h2>
                        <p class="paragraph-text">Consulting about your brand</p>
                        <img class="hero-flex-image" src="./source/media/service/consultancy.webp" alt="" width="100%" height="196" style="object-fit:cover ;">
                    </div>

                </div>
            </div>
        </div>



    </header>





    <!-- INCLUDE FOOTER -->
    <?php
    $footer_heading_text = "Have a brand to build";
    $footer_main_btn_text = "Say hello";
    include "./source/_modules/footer.php";
    ?>


</body>


</html>