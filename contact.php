<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Contact";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/contact.css">

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

        $nav_third_link_text = "About";
        $nav_third_link_path = "./About.php";

        $nav_bar_logolink =  "./source/media/logoicon.png";
        $path_to_hamburger_icon = "./source/media/hamburger.png";
        $path_to_themeChange_btn = "./source/media/ThemeChange_btn.png";
        $path_to_cross_btn = "./source/media/cross-btn.png";

        include "./source/_modules/navigation_bar.php";
        ?>



        <!-- HERO CONTENT -->
        <div class="hero-content-container">
            <h1 class="big-heading hero-heading">Contact</h1>
            <h2 class="normal-heading hero-sub-heading">Let’s talk about your next big brand.</h2>
        </div>

    </header>

    <section class="form-container bound">
        <form action="#">

            <div class="display-flex d-flex-space-between">

                <div class="form-flex-item">
                    <label class="paragraph-text" for="full_name">Full name *</label>
                    <input type="text" id="full_name" name="full_name" placeholder="e.g. John Smith">
                </div>

                <div class="form-flex-item">
                    <label class="paragraph-text" for="Email">Email *</label>
                    <input type="email" id="Email" name="email" placeholder="you@company">
                </div>

            </div>

            <div class="display-flex d-flex-space-between">

                <div class="form-flex-item">
                    <label class="paragraph-text" for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" placeholder="Branding">
                </div>

                <div class="form-flex-item">
                    <label class="paragraph-text" for="budget">Budget *</label>
                    <input type="text" id="budget" name="budget" placeholder="6000e">
                </div>

            </div>
            
            <label class="paragraph-text" for="message">Message *</label>
            <textarea name="message" id="message">Dear Debuk Studio</textarea>

            <input class="submit-btn" type="submit" value="Send →">
        </form>
    </section>





    <!-- INCLUDE FOOTER -->
    <?php
    $is_it_contact_footer =true;
    $footer_heading_text = "";
    $footer_main_btn_text = "";
    include "./source/_modules/footer.php";
    ?>


</body>


</html>