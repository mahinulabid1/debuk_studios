<header class="bound">

    <!-- REUSEABLE NAVIGATION BAR -->
    <?php
    // SETTING UP REUSEABLE NAVIGATION BAR AND ITS PATH
    $nav_first_link_text = "Services";
    $nav_first_link_path = "./services.php";

    $nav_second_link_text = "Project";
    $nav_second_link_path = "#";

    $nav_third_link_text = "About";
    $nav_third_link_path = "#";

    $nav_bar_logolink =  "./source/media/logoicon-white.png";
    $path_to_hamburger_icon = "./source/media/hamburger-white.png";
    $path_to_themeChange_btn = "./source/media/ThemeChange_btn.png";
    $path_to_cross_btn = "./source/media/cross-btn.png";

    include "./source/_modules/navigation_bar.php";
    ?>






</header>

<?php
// some values to set for dynamic information
$page_main_heading;
$page_sub_heading_one;
$page_sub_heading_two;
$page_main_para;
$source_to_video_file;

$characteristics_one_heading;
$characteristics_one_paragraph;
$characteristics_two_heading;
$characteristics_two_paragraph;
$source_to_image_1;
$source_to_image_2;
?>

<!-- hero video -->
<video class="hero-video" muted autoplay loop>
    <source src=<?php echo $source_to_video_file; ?>>
</video>

<!-- banner section -->
<section class="banner-section bound">
    <!-- HERO CONTENT -->
    <h1 class="big-heading banner-heading"><?php echo $page_main_heading; ?></h1>
    <h2 class="banner-sub-heading"><?php echo $page_sub_heading_one; ?></h2>
    <h2 class="banner-sub-heading"><?php echo $page_sub_heading_two; ?></h2>
    <p class="paragraph-text banner-para"><?php echo $page_main_para; ?></p>
</section>


<section class="characteristics-section bound">
    <div class="display-flex d-flex-space-between characteristics-flex-container">
        <div class="flex-item-characteristics">

            <h2 class="normal-heading characteristics-flex-heading"><?php echo $characteristics_one_heading; ?></h2>
            <p class="paragraph-text characteristics-flex-heading"><?php echo $characteristics_one_paragraph; ?></p>
        </div>

        <div class="flex-item-characteristics">
            <h2 class="normal-heading characteristics-flex-heading"><?php echo $characteristics_two_heading; ?></h2>
            <p class="paragraph-text characteristics-flex-heading"><?php echo $characteristics_two_paragraph; ?></p>
        </div>
    </div>

    <div class="display-flex d-flex-space-between characteristics-flex-container">
        <div class="flex-item-characteristics">
            <img class="characteristics-image" src=<?php echo $source_to_image_1; ?> alt="" height="auto" width="100%">
        </div>

        <div class="flex-item-characteristics">
            <img class="characteristics-image" src=<?php echo $source_to_image_2; ?> alt="" height="auto" width="100%">
        </div>
    </div>



</section>