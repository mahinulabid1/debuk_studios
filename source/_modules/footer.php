<?php 
error_reporting(0);
ini_set('display_errors', 0);
?>
<footer class="bound">
        <div class="footer-flex-container display-flex d-flex-space-between">
            <div class="footer-flex-item">
                <h1 class="big-heading"> <?php echo $footer_heading_text; ?> </h1>
                <a href="#" class="footer-link-take-action normal-heading" style="text-align: left;"> <?php echo $footer_main_btn_text; ?> </a>
                <?php
                    $is_it_contact_footer;
                    if($is_it_contact_footer == true){
                        echo "<p class='normal-heading'>Email address</p>";
                    }
                ?>

                <a class="footer-email " href="mailto:contact@debukstudio.com">contact@debukstudio.com</a>
            </div>

            <div class="footer-flex-item" >
                <div class="fist_link-list">
                    <a href="./index.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Home →</a>
                    <a href="./About.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">About →</a>
                    <a href="project_page.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Project →</a>
                    <a href="./services.php" class="display-block footer-links-a footer-link-border paragraph-text-regular">Services →</a>
                </div>

                <div class="second_link-list">
                    <div class="display-flex Coming-soon-container footer-link-border d-flex-space-between">
                    <p class="footer-links-a comming-soon-text paragraph-text-regular">Coming Soon</p>
                    <a href="#" class="display-block footer-links-a paragraph-text-regular">Shop →</a>
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

    <!-- Let’s talk about your next big brand. -->
    <!-- Take action -->