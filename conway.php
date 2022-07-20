<!DOCTYPE html>
<html lang="en-US">

<head>

    <!-- REUSEABLE HEADER INFO -->
    <?php
    // Specify the current page to update info in header
    $current_page_head = "Studio";
    $location_to_logo_icon = "./source/media/web_title_icon.png";
    include "./source/_modules/head_info.php";
    ?>

    <!-- main stylesheet -->
    <link rel="stylesheet" href="./source/css/studio.css">

    <!-- navigation bar -->
    <link rel="stylesheet" href="./source/css/navigation_bar.css">

    <!-- project page component css -->
    <link rel="stylesheet" href="./source/css/project_page_component.css">
</head>

<body>


    <?php
    // PROJECT PAGE TEXT CONTENT (PUT CONTENT ACCORDING TO DIFFERENT PROJECT PAGES)
    $page_main_heading = 'Conway';
    $page_sub_heading_one = "Brand Identity";
    $page_sub_heading_two = "Web Design";
    $page_main_para = "Conway is a brand that provides products for cleaning the skin.";
    $characteristics_one_heading = "Goal";
    $characteristics_one_paragraph = "Creating a brand identity for Conway. Creating a home page for the product's awareness and SEO ranking with a UI design that goes into brand guidelines and clear UX to easily navigate thru pages.";
    $characteristics_two_heading = "Opportunity";
    $characteristics_two_paragraph = "Clean design communicates with an audience that Conway is selling premium products for their customers.";

    //source file's path of the image
    $source_to_image_1 = "./source/media/conway/image1.webp";
    $source_to_image_2 = "./source/media/conway/image2.webp";

    //souce file's path of the page video
    $source_to_video_file = "./source/media/conway/video-desktop.webm";
    $source_to_video_file_tablet_version = "./source/media/conway/video-tablet.webm";
    $source_to_video_file_mobile_version = "./source/media/conway/video-phone.webm";

    // including the whole project page with changeable content(content defined by php variables in above ↑)
    include "./source/_modules/project_modules/project_page_component.php";
    ?>
    <div class="full-width-image bound">
        <img class="characteristics-image c-image-margin" src="./source/media/conway/image3.webp" alt="" width="100%" height="auto">
        <img class="characteristics-image c-image-margin" src="./source/media/conway/image4.webp" alt="" width="100%" height="auto">
    </div>



    <!-- INCLUDE FOOTER -->
    <?php

    $footer_heading_text = "Have a brand to build?";
    $footer_main_btn_text = "Say hello →";
    include "./source/_modules/footer.php";
    ?>


    <script src="./source/js/theme.js"></script>
</body>


</html>