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


    <!-- navigation bar -->
    <link rel="stylesheet" href="./source/css/navigation_bar.css">

    <!-- loading section CSS -->
    <link rel="stylesheet" href="./source/css/loading_section.css">

</head>

<body>
    <!-- adding loading state -->
    <?php include "./source/_modules/loading_section.php"; ?>

    <div class="butter-js-container" id="butter">
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



            <!-- HERO CONTENT -->
            <div class="hero-content-container">
                <h1 class="big-heading hero-heading">Contact</h1>
                <h2 class="normal-heading hero-sub-heading">Let’s talk about your next big brand.</h2>
            </div>

        </header>

        <section class="form-container bound">
            <form action="#">

                <div class="display-flex d-flex-space-between d-flex-wrap-true">

                    <div class="form-flex-item">
                        <label class="paragraph-text" for="full_name">Full name *</label>
                        <input class="paragraph-text" type="text" id="full_name" name="full_name" placeholder="e.g. John Smith">
                    </div>

                    <div class="form-flex-item">
                        <label class="paragraph-text" for="Email">Email *</label>
                        <input class="paragraph-text" type="email" id="Email" name="email" placeholder="you@company">
                    </div>

                </div>

                <div class="display-flex d-flex-space-between d-flex-wrap-true">

                    <div class="form-flex-item">
                        <label class="paragraph-text" for="subject">Subject *</label>
                        <input class="paragraph-text" type="text" list="subject_list" id="subject" name="subject" placeholder="Branding">
                        <datalist id="subject_list" class="paragraph-text">
                            <option value="Branding" class="paragraph-text" >
                            <option value="Branding & Printed Media" class="paragraph-text">
                            <option value="Web Design & development" class="paragraph-text">
                            <option value="Branding, Printed Media & Web Design & Development" class="paragraph-text">
                            <option value="Brand Consultancy" class="paragraph-text">
                        </datalist>
                    </div>

                    <div class="form-flex-item">
                        <label class="paragraph-text" for="budget">Budget *</label>
                        <input class="paragraph-text" type="text" id="budget" name="budget" placeholder="6000e">
                    </div>

                </div>

                <label class="paragraph-text" for="message">Message *</label>
                <textarea class="paragraph-text" name="message" id="message" placeholder="Dear Debuk Studio,"></textarea>

                <input class="submit-btn paragraph-text" type="submit" value="Send →">
            </form>
        </section>





        <!-- INCLUDE FOOTER -->
        <?php
        $is_it_contact_footer = true;
        $footer_heading_text = "";
        $footer_main_btn_text = "";
        include "./source/_modules/footer.php";
        ?>


    </div>
    <!-- butter.js container ended here -->


    <script src="./source/js/theme.js"></script>
    <script src="./source/js/loading.js"></script> <!-- adding loading js -->

    <!-- implemented the butter.js library -->
    <?php include "./source/_modules/butter_js_implement.php" ?>
</body>


</html>