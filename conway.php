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

    <!-- fonts  -->
    <link rel="stylesheet" href="./source/css/fonts.css">

    <!-- navigation bar -->
    <!-- <link rel="stylesheet" href="./source/css/navigation_bar.css"> -->

    <!-- UNIVERSAL CSS -->
    <link rel="stylesheet" href="./source/css/Universal_CSS.css">

    <!-- footer -->
    <link rel="stylesheet" href="./source/css/footer.css">

    <!-- project page component css -->
    <link rel="stylesheet" href="./source/css/project_page_component.css">
</head>

<body>


    <?php
    $page_main_heading= 'Conway';
    $page_sub_heading_one="Brand Identity";
    $page_sub_heading_two="Web Design";
    $page_main_para="Conway is a brand that provides products for cleaning the skin.";
    $characteristics_one_heading = "Goal";
    $characteristics_one_paragraph = "Creating a brand identity for Conway. Creating a home page for the product's awareness and SEO ranking with a UI design that goes into brand guidelines and clear UX to easily navigate thru pages.";
    $characteristics_two_heading = "Opportunity";
    $characteristics_two_paragraph = "Clean design communicates with an audience that Conway is selling premium products for their customers.";
    $source_to_image_1 = "./source/media/conway/image1.webp";
    $source_to_image_2 = "./source/media/conway/image2.webp";
    $source_to_video_file = "./source/media/conway/video-desktop.webm";

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


</body>


</html>