<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Project";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/project.css">

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
        $nav_first_link_path = "./services.php";

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
            <h1 class="big-heading hero-heading">Projects</h1>
        </div>

    </header>



    <section class="project-container-section bound">
        <div class="project-list-container">

            <!-- project list start -->
            <div class="project-list display-flex d-flex-space-between">

                <div class="project-flex-item">
                    <!-- a video container -->
                    <a href="#" class="project-list__video-container">
                        <img class="project-list__video-container__image" src="./source/media/project/studio.webp" alt="" height="100%" width="100%">
                        <video class="project-list__video-container__video" autoplay muted loop>
                            <source src="./source/media/project/studio.webm">
                        </video>
                    </a>
                </div>

                <div class="project-flex-item">
                    <p class="project-category-para">Brand Identity</p>
                    <p class="project-category-para">Web Design</p>
                    <a href="#" class="project-category-title">Debuk Studio Rebrand →</a>

                </div>
            </div>

            <hr>

            <div class="project-list display-flex d-flex-space-between">

                <div class="project-flex-item">
                    <!-- a video container -->
                    <a href="#" class="project-list__video-container">
                        <img class="project-list__video-container__image" src="./source/media/project/conway.webp" alt="" height="100%" width="100%">
                        <video class="project-list__video-container__video" autoplay muted loop>
                            <source src="./source/media/project/conway.webm">
                        </video>
                    </a>
                </div>

                <div class="project-flex-item">
                    <p class="project-category-para"> Brand Identity</p>
                    <p class="project-category-para">Web Design</p>
                    <a href="#" class="project-category-title">Conway →</a>

                </div>
            </div>

            <hr>


            <div class="project-list display-flex d-flex-space-between">

                <div class="project-flex-item">
                    <!-- a video container -->
                    <a href="#" class="project-list__video-container">
                        <img class="project-list__video-container__image" src="./source/media/project/luxio.webp" alt="" height="100%" width="100%">
                        <video class="project-list__video-container__video" autoplay muted loop>
                            <source src="./source/media/project/luxio.webm">
                        </video>
                    </a>
                </div>

                <div class="project-flex-item">
                    <p class="project-category-para"> Brand Identity</p>
                    <p class="project-category-para">Web Design</p>
                    <a href="#" class="project-category-title">Hotel Luxio →</a>

                </div>
            </div>

            <hr>


            <div class="project-list display-flex d-flex-space-between">

                <div class="project-flex-item">
                    <!-- a video container -->
                    <a href="#" class="project-list__video-container">
                        <img class="project-list__video-container__image" src="./source/media/project/gallery.webp" alt="" height="100%" width="100%">
                        <video class="project-list__video-container__video" autoplay muted loop>
                            <source src="./source/media/project/gallery.webm">
                        </video>
                    </a>
                </div>

                <div class="project-flex-item">
                    <p class="project-category-para"> Brand Identity</p>
                    <p class="project-category-para">Web Design</p>
                    <a href="#" class="project-category-title">Borrasude Gallery →</a>

                </div>
            </div>

            <hr>

        </div>
    </section>



    <!-- INCLUDE FOOTER -->
    <?php
    $footer_heading_text = "Have a brand to build?";
    $footer_main_btn_text = "Say hello";
    include "./source/_modules/footer.php";
    ?>


</body>


</html>