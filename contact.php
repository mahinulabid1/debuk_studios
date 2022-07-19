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
                    <!-- <input class="paragraph-text" type="text" id="subject" name="subject" placeholder="Branding"> -->
                    <select name="select_subject" id="subject" class="paragraph-text">
                        <option value="Branding" selected class="paragraph-text">Branding</option>
                        <option value="Branding & Printed Media" class="paragraph-text">Branding & Printed Media</option>
                        <option value="Web Design & development" class="paragraph-text">Web Design & development</option>
                        <option value="Branding, Printed Media & Web Design & Development" class="paragraph-text">Branding, Printed Media & Web Design & Development</option>
                        <option value="Brand Consultancy" class="paragraph-text">Brand Consultancy</option>
                    </select>
                </div>

                <div class="form-flex-item">
                    <label class="paragraph-text" for="budget">Budget *</label>
                    <input class="paragraph-text" type="text" id="budget" name="budget" placeholder="6000e">
                </div>

            </div>
            
            <label class="paragraph-text" for="message">Message *</label>
            <textarea class="paragraph-text" name="message" id="message">Dear Debuk Studio</textarea>

            <input class="submit-btn paragraph-text" type="submit" value="Send →">
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