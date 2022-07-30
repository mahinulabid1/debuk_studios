<?php
error_reporting(0);
ini_set('display_errors', 0);
?>

<?php
$arrow_icon = '<svg class="arrow-icon-normal" height="15" viewBox="0 0 74 62" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 26.04V35.712H55.3767L36.3833 54.684L43.4133 61.752L74 30.876L43.4133 0L36.63 6.944L55.6233 26.04H0Z" fill="#070606"/>
</svg>
';
$arrow_icon_big = '<svg class="arrow-icon-big" width="32" viewBox="0 0 74 62" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 26.04V35.712H55.3767L36.3833 54.684L43.4133 61.752L74 30.876L43.4133 0L36.63 6.944L55.6233 26.04H0Z" fill="#070606"/>
</svg>
';
?>
<footer class="bound">
    <div class="footer-flex-container display-flex d-flex-space-between">
        <div class="footer-flex-item">
            <h1 class="big-heading"> <?php echo $footer_heading_text; ?> </h1>
            <a href="#" class="footer-link-take-action normal-heading" style="text-align: left;"> <?php echo $footer_main_btn_text; echo $arrow_icon_big; ?> </a>
            <?php
            $is_it_contact_footer;
            if ($is_it_contact_footer == true) {
                echo "<p class='normal-heading'>Email address</p>";
            }
            ?>

            <a class="footer-email " href="mailto:contact@debukstudio.com">contact@debukstudio.com</a>
        </div>

        <div class="footer-flex-item">
            <div class="fist_link-list">
                <a href="./index.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Home <?php echo $arrow_icon; ?></a>
                <a href="./About.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">About <?php echo $arrow_icon; ?></a>
                <a href="project_page.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Project <?php echo $arrow_icon; ?></a>
                <a href="./services.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Services <?php echo $arrow_icon; ?></a>
                <a href="./contact.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Contact <?php echo $arrow_icon; ?></a>
            </div>

            <div class="second_link-list">
                <div class="display-flex Coming-soon-container footer-link-border d-flex-space-between">
                    <p class="footer-links-a comming-soon-text paragraph-text-regular">Coming Soon</p>
                    <a href="#" class="display-block footer-links-a paragraph-text-regular">Shop <?php echo $arrow_icon; ?></a>
                </div>

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