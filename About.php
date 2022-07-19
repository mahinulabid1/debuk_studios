<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "About";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/about.css">

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
        $nav_first_link_text = "Home";
        $nav_first_link_path = "./index.php";

        $nav_second_link_text = "Services";
        $nav_second_link_path = "./services.php";

        $nav_third_link_text = "About";
        $nav_third_link_path = "./About.php";

        $nav_bar_logolink =  "./source/media/logoicon.png";
        $path_to_hamburger_icon = "./source/media/Hamburger.png";
        $path_to_themeChange_btn = "./source/media/ThemeChange_btn.png";
        $path_to_cross_btn = "./source/media/cross-btn.png";

        include "./source/_modules/navigation_bar.php";
        ?>

        <!-- hero image -->
        <img src="./source/media/about/about-bar.webp" alt="about-bar" class="hero-image">

        <!-- HERO CONTENT -->
        <div class="hero-content-container">
            <h1 class="big-heading hero-heading">About Debuk Studio</h1>
            <h2 class="normal-heading hero-sub-heading">Brand and Web design studio created to solve your problems with design</h2>
        </div>

    </header>

    <section class="about-section bound">

        <div class="display-flex about-flex-container">
            <div class="about-me-flex-item ">
                <!-- <picture>

                    <source media="(max-width:834px)" srcset="./source/media/about/person-tablet.webp" height="564" width="700">
                    <img src="./source/media/about/person.webp" alt="" height="564" width="700">
                </picture> -->
                <img src="./source/media/about/person.webp" alt="" height="564" width="700">
            </div>
            <div class="about-me-flex-item">
                <h1 class="normal-heading about-me-heading">Hi, I’m Matija! 👋</h1>
                <p class="paragraph-text">
                    Europian-based Brand and Web(UX/UI) Designer and founder of Debuk Studio. I am inspired by the modern brand 
                    design and how they work. I create brands with you so your audience can see your full potential.
                </p>
            </div>
        </div>

    </section>


    <!-- INCLUDE FOOTER -->
    <?php

    $footer_heading_text = "Have a brand to build?";
    $footer_main_btn_text = "Say hello →";
    include "./source/_modules/footer.php";
    ?>


</body>


</html>