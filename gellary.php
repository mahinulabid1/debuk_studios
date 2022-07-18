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
    $page_main_heading= 'Borrasude Gallery';
    $page_sub_heading_one="Brand Identity";
    $page_sub_heading_two="";
    $page_main_para="The art gallery filled up with vintage paintings.";
    $characteristics_one_heading = "Goal";
    $characteristics_one_paragraph = "Attract people to see vintage paintings in Vienna, Austria.";
    $characteristics_two_heading = "Opportunity";
    $characteristics_two_paragraph = "Design is minimal and made for people who loves art.";
    $source_to_image_1 = "./source/media/gallery/image1.webp";
    $source_to_image_2 = "./source/media/gallery/image2.webp";
    $source_to_video_file = "./source/media/gallery/video-desktop.webm";

    include "./source/_modules/project_modules/project_page_component.php";
    ?>
    <div class="full-width-image bound">
        <img class="characteristics-image c-image-margin" src="./source/media/gallery/image3.webp" alt="" width="100%" height="auto">
        <img class="characteristics-image c-image-margin" src="./source/media/gallery/image4.webp" alt="" width="100%" height="auto">
    </div>



    <!-- INCLUDE FOOTER -->
    <?php

    $footer_heading_text = "Have a brand to build?";
    $footer_main_btn_text = "Say hello →";
    include "./source/_modules/footer.php";
    ?>


</body>


</html>