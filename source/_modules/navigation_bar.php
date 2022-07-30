<?php ?>
<nav class="display-flex d-flex-space-between">
    <div class="nav-flex-item display-flex">
        <!-- <img class=" website-logo-icon align-self-center" src=<?php echo $nav_bar_logolink ?> alt="website logo" height="17" width="11"> -->
        <svg class="website-logo-icon align-self-center" width="11.76" viewBox="0 0 62 95" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.9448 35.6309C8.47767 35.6309 6.10352e-05 43.6728 6.10352e-05 53.602V94.0402H42.6289C53.096 94.0402 61.5736 85.9982 61.5736 76.069V35.6309H18.9448ZM50.004 71.8377C50.004 78.0404 44.7071 83.0651 38.1683 83.0651H11.557V57.8093C11.557 51.6066 16.8539 46.5819 23.3927 46.5819H50.0167V71.8377H50.004Z" fill="#070606" />
            <path d="M44.2125 0C39.9547 0 36.4952 3.26967 36.4952 7.3207V23.7773H47.2538C55.1485 23.7773 61.5605 17.7067 61.5605 10.2057V0H44.2125ZM54.743 11.1193C54.743 14.5332 51.8284 17.298 48.2295 17.298H43.3381V9.80902C43.3381 7.96983 44.9095 6.47924 46.8483 6.47924H54.743V11.1193Z" fill="#070606" />
        </svg>

        <a href="./index.php" class="logo-text align-self-center">debuk studio</a>
    </div>
    <div class="nav-flex-item display-flex">

        <?php
        $nav_first_link_text;
        $nav_first_link_path;
        $nav_second_link_text;
        $nav_second_link_path;
        $nav_third_link_text;
        $nav_third_link_path;
        ?>
        <div class="nav-menu-item small-device-none"><a class="nav-link-a" href=<?php echo $nav_first_link_path; ?>> <?php echo $nav_first_link_text; ?> </a> </div>
        <div class="nav-menu-item small-device-none"><a class="nav-link-a" href=<?php echo $nav_second_link_path; ?>> <?php echo $nav_second_link_text; ?> </a> </div>
        <div class="nav-menu-item small-device-none"><a class="nav-link-a" href=<?php echo $nav_third_link_path; ?>> <?php echo $nav_third_link_text; ?> </a> </div>
        <!-- <div class="nav-menu-item hamberger-icon-container"><img class="ham-berger-icon-img" src=<?php //echo $path_to_hamburger_icon; 
                                                                                                        ?> alt="hamburger" style="cursor: pointer;"></div> -->
        <div class="nav-menu-item hamberger-icon-container">
            <div class="ham-bar h-bar-1"></div>
            <div class="ham-bar h-bar-2"></div>
            <div class="ham-bar h-bar-3"></div>
        </div>
    </div>
</nav>



<!-- This nav is hamberger navigation -->
<div class="hamberger-navigation-container bound">
    <header class="display-flex d-flex-space-between">
        <div class="ham-header-navigation--item">
            <div class="ham-header-nav__first-section">
                <a class="ham-header-nav__first-section__links display-block big-heading js-nav-animation" href="./index.php">HOME</a>
                <a class="ham-header-nav__first-section__links display-block big-heading js-nav-animation" href="./About.php">ABOUT</a>
                <a class="ham-header-nav__first-section__links display-block big-heading js-nav-animation" href="./services.php">SERVICES</a>
                <a class="ham-header-nav__first-section__links display-block big-heading js-nav-animation" href="./project_page.php">PROJECTS</a>
                <a class="ham-header-nav__first-section__links display-block big-heading js-nav-animation" href="./contact.php">CONTACT</a>
            </div>

            <div class="ham-header-nav__second-section">
                <p class="ham-header-nav__first-section__text normal-heading  js-nav-animation">COMING SOON</p>
                <a class="ham-header-nav__first-section__links display-block big-heading js-nav-animation" href="#">SHOP</a>
                <!-- <a class="ham-header-nav__second-section__links display-block normal-heading" href="#">POSTERS</a> -->
            </div>
        </div>

        <!-- notif bar big devices -->
        <div class="ham-header-navigation--item" style="position: relative;">
            <svg class="theme-change-btn" style="cursor:pointer;" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M56 28C56 12.537 43.463 -1.09602e-06 28 -2.44784e-06C12.537 -3.79966e-06 -1.50414e-08 12.537 -1.36686e-06 28C-2.71868e-06 43.463 12.537 56 28 56C43.463 56 56 43.463 56 28ZM51.3333 28C51.3333 40.866 40.866 51.3333 28 51.3333L28 4.66667C40.866 4.66667 51.3333 15.134 51.3333 28Z" fill="#070606" />
            </svg>
            <div class="display-block cookie-ham-notif big-device-notif">
                <p class="cookie-ham-para">
                    This website uses
                    cookies for the better experience
                </p>

                <div class="close-notif-container">
                    <!-- <img src=<?php //echo $path_to_cross_btn; 
                                    ?> alt="" class="ham-close-notification-btn" height="22.5" width="22.5"> -->
                    <svg class="ham-close-notification-btn" width="22.5" height="22.5" viewBox="0 0 222 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M111.022 0.222656C172.18 0.222656 221.833 49.876 221.833 111.023C221.833 172.181 172.18 221.834 111.022 221.834C49.8755 221.834 0.222168 172.181 0.222168 111.023C0.222168 49.876 49.8755 0.222656 111.022 0.222656ZM111.022 16.8477C59.0414 16.8477 16.8472 59.0419 16.8472 111.023C16.8472 163.004 59.0414 205.209 111.022 205.209C163.003 205.209 205.208 163.004 205.208 111.023C205.208 59.0419 163.003 16.8477 111.022 16.8477ZM111.022 99.1414L141.136 69.0169C142.754 67.3987 144.893 66.5897 147.021 66.5897C151.499 66.5897 155.333 70.1917 155.333 74.9022C155.333 77.0412 154.524 79.1582 152.906 80.7874L122.793 110.901L153.017 141.136C154.646 142.765 155.455 144.893 155.455 147.021C155.455 151.754 151.587 155.334 147.143 155.334C145.015 155.334 142.887 154.525 141.269 152.907L111.022 122.671L80.7869 152.907C79.1688 154.525 77.0408 155.334 74.9128 155.334C70.4683 155.334 66.5892 151.754 66.5892 147.021C66.5892 144.893 67.3983 142.765 69.0275 141.136L99.2628 110.901L69.094 80.732C67.4758 79.1027 66.6667 76.9858 66.6667 74.8467C66.6667 70.1363 70.5016 66.5453 74.9792 66.5453C77.1072 66.5453 79.2463 67.3544 80.8645 68.9726L111.022 99.1414Z" fill="#070606" />
                    </svg>

                </div>

            </div>
        </div>



        <!-- close btn -->
        <section class="display-flex d-flex-space-between ham-nav-footer">
            <div class="ham-footer-flex-item"><i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-twitter"></i></div>
            <div class="ham-footer-flex-item">
                <button class="close-ham-bar-btn paragraph-text">Close</button>
            </div>
        </section>
    </header>


    <!-- notif for small devices -->
    <section class="ham-notif-small-devices bound">
        <div class="display-block cookie-ham-notif">
            <p class="cookie-ham-para">
                This website uses
                cookies for the better experience
            </p>

            <div class="close-notif-container">
                <!-- <img src=<?php //echo $path_to_cross_btn;
                                ?> alt="" class="ham-close-notification-btn" height="27" width="27"> -->
                <svg class="ham-close-notification-btn" width="22.5" height="22.5" viewBox="0 0 222 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M111.022 0.222656C172.18 0.222656 221.833 49.876 221.833 111.023C221.833 172.181 172.18 221.834 111.022 221.834C49.8755 221.834 0.222168 172.181 0.222168 111.023C0.222168 49.876 49.8755 0.222656 111.022 0.222656ZM111.022 16.8477C59.0414 16.8477 16.8472 59.0419 16.8472 111.023C16.8472 163.004 59.0414 205.209 111.022 205.209C163.003 205.209 205.208 163.004 205.208 111.023C205.208 59.0419 163.003 16.8477 111.022 16.8477ZM111.022 99.1414L141.136 69.0169C142.754 67.3987 144.893 66.5897 147.021 66.5897C151.499 66.5897 155.333 70.1917 155.333 74.9022C155.333 77.0412 154.524 79.1582 152.906 80.7874L122.793 110.901L153.017 141.136C154.646 142.765 155.455 144.893 155.455 147.021C155.455 151.754 151.587 155.334 147.143 155.334C145.015 155.334 142.887 154.525 141.269 152.907L111.022 122.671L80.7869 152.907C79.1688 154.525 77.0408 155.334 74.9128 155.334C70.4683 155.334 66.5892 151.754 66.5892 147.021C66.5892 144.893 67.3983 142.765 69.0275 141.136L99.2628 110.901L69.094 80.732C67.4758 79.1027 66.6667 76.9858 66.6667 74.8467C66.6667 70.1363 70.5016 66.5453 74.9792 66.5453C77.1072 66.5453 79.2463 67.3544 80.8645 68.9726L111.022 99.1414Z" fill="#070606" />
                </svg>
            </div>

        </div>
    </section>




</div>



<!-- project page bottom nav -->
<section class="bottom_page_navigation_container">
    <div class="bottom-nav-container display-flex">
        <div class="bottom-nav-flex-item">
            <a class="paragraph-text" href="./services.php">Services</a>
        </div>

        <div class="bottom-nav-flex-item">
            <a class="paragraph-text" href="./project_page.php">Projects</a>
        </div>

        <div class="bottom-nav-flex-item">
            <a class="paragraph-text" href="./contact.php">Contacts</a>
        </div>
    </div>
</section>




<!-- FUNCTIONALITY OF HAMBERGER NAVIGATION -->
<script>
    const hamberGer_icon = document.querySelector(".hamberger-icon-container");
    const hamberger_navigation_container = document.querySelector(".hamberger-navigation-container");
    const close_hambar_btn = document.querySelector(".close-ham-bar-btn");


    hamberGer_icon.addEventListener("click", () => {
        hamberger_navigation_container.style.display = "block";
        document.querySelector("body").style.overflowY = "hidden";
    });
    close_hambar_btn.addEventListener("click", () => {
        hamberger_navigation_container.style.display = "none";
        document.querySelector("body").style.overflowY = "scroll";
    });


    let ham_notif_close = document.querySelectorAll(".ham-close-notification-btn");
    for (let counter = 0; counter < ham_notif_close.length; counter++) {
        let close_btn = ham_notif_close[counter];

        close_btn.addEventListener("click", () => {
            let notifBar = document.getElementsByClassName("cookie-ham-notif");
            notifBar[0].style.display = "none";
            notifBar[1].style.display = "none";
        });
    }
</script>

<!-- NAVIGATION ANIMATION -->
<script>
    let Nav_element_init = document.querySelectorAll(".js-nav-animation");
    let Ham_btn = document.querySelector(".hamberger-icon-container");

    Ham_btn.addEventListener("click", () => {
        console.log("init animation");

        for (let counter = 0; counter < Nav_element_init.length; counter++) {
            let timer = 170 * counter;
            let initial_timer = timer + 300;
            let Nav_element = Nav_element_init[counter];
            Nav_element.style.animation = `navAnimation ${initial_timer}ms ease-out`;
        }
    });
</script>