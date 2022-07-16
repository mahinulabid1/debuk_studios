<footer class="bound">
        <div class="footer-flex-container display-flex d-flex-space-between">
            <div class="footer-flex-item">
                <h1 class="big-heading"> <?php echo $footer_heading_text; ?> </h1>
                <a href="#" class="footer-link-take-action normal-heading"> <?php echo $footer_main_btn_text; ?> </a>
                <?php
                    if($is_it_contact_footer == true){
                        echo "<p class='normal-heading'>Email address</p>";
                    }
                ?>

                <a class="footer-email " href="mailto:contact@debukstudio.com">contact@debukstudio.com</a>
            </div>

            <div class="footer-flex-item" >
                <div class="fist_link-list">
                    <a href="#" class="display-block footer-links-a">Home →</a>
                    <a href="#" class="display-block footer-links-a">About →</a>
                    <a href="#" class="display-block footer-links-a">Project →</a>
                    <a href="#" class="display-block footer-links-a">Services →</a>
                </div>

                <div class="second_link-list">
                    <p class="footer-links-a comming-soon-text">Coming Soon</p>
                    <a href="#" class="display-block footer-links-a">Shop →</a>
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