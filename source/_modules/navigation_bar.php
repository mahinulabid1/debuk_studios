<?php ?>
<nav class="display-flex d-flex-space-between">
    <div class="nav-flex-item">
        <img class="display-inline-block" src=<?php echo $nav_bar_logolink ?> alt="website logo">
        <a href="./index.php" class="logo-text display-inline-block">debuk studio</a>
    </div>
    <div class="nav-flex-item display-flex">

        <?php
            $nav_first_link_text; $nav_first_link_path; 
            $nav_second_link_text; $nav_second_link_path; 
            $nav_third_link_text; $nav_third_link_path; 
        ?>
        <div class="nav-menu-item small-device-none"><a href=<?php echo $nav_first_link_path; ?> > <?php echo $nav_first_link_text; ?> </a> </div>
        <div class="nav-menu-item small-device-none"><a href=<?php echo $nav_second_link_path; ?>> <?php echo $nav_second_link_text; ?> </a> </div>
        <div class="nav-menu-item small-device-none"><a href=<?php echo $nav_third_link_path; ?> > <?php echo $nav_third_link_text; ?> </a> </div>
        <div class="nav-menu-item"><img src=<?php echo $path_to_hamburger_icon; ?> alt="hamburger" style="cursor: pointer;"></div>
    </div>
</nav>



<!-- This nav is hamberger navigation -->
<div class="hamberger-navigation-container bound">
    <header class="display-flex d-flex-space-between">
        <div class="ham-header-navigation--item">
            <div class="ham-header-nav__first-section">
                <a class="ham-header-nav__first-section__links display-block" href="#">HOME</a>
                <a class="ham-header-nav__first-section__links display-block" href="#">ABOUT</a>
                <a class="ham-header-nav__first-section__links display-block" href="#">SERVICES</a>
                <a class="ham-header-nav__first-section__links display-block" href="#">PROJECTS</a>
                <a class="ham-header-nav__first-section__links display-block" href="#">CONTACT</a>
            </div>

            <div class="ham-header-nav__second-section">
                <p class="ham-header-nav__first-section__text">COMING SOON</p>
                <a class="ham-header-nav__first-section__links display-block" href="#">CONTACT</a>
                <a class="ham-header-nav__second-section__links display-block" href="#">POSTERS</a>
            </div>
        </div>

        <div class="ham-header-navigation--item" style="position: relative;">
            <img src=<?php echo $path_to_themeChange_btn; ?> alt="" height="56" width="56" style= "cursor:pointer;">
            <div class="display-block cookie-ham-notif">
                <p class="cookie-ham-para">
                    This website uses
                    cookies for the better experience
                </p>
                
                <div class="close-notif-container">
                    <img src=<?php echo $path_to_cross_btn; ?> alt="" class="ham-close-notification-btn">
                </div>

            </div>
        </div>
    </header>

    <section class="display-flex d-flex-space-between ham-nav-footer">
        <div class="ham-footer-flex-item"><i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-twitter"></i></div>
        <div class="ham-footer-flex-item">
            <button class="close-ham-bar paragraph-text">Close</button>
        </div>
    </section>
</div>