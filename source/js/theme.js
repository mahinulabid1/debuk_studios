// REUSEABLE FUNCTIONS
document.querySelector("body").style.color = "white";
document.querySelector("body").style.backgroundColor = "black";
const AddClassToElements = (element, classToAdd) => {
    let SelectorInit = document.querySelectorAll(element);
    for (let counter = 0; counter < SelectorInit.length; counter++) {
        let Selector = SelectorInit[counter];
        Selector.classList.toggle(classToAdd);
    }
}

// REUSEABLE FUNCTIONS
const ElementSourceChange = (SingleSelector, source) => {
    document.querySelector(SingleSelector).src = source;
}

const Run_changing_state = () => {
    // DARK THEME SETUP
    // navigation section
    AddClassToElements(".logo-text", "js_color_white");
    AddClassToElements(".nav-menu-item a", "js_link_color");
    AddClassToElements(".hamberger-navigation-container", "js_background_black");
    AddClassToElements(".ham-header-nav__first-section__links", "js_link_color");
    AddClassToElements(".cookie-ham-para", "js_color_black");
    AddClassToElements(".close-ham-bar-btn", "js_ham_close_btn");

    // change the source of the navigation and stuff
    ElementSourceChange(".hamberger-icon-container img", "./source/media/Hamburger-white.png");
    ElementSourceChange(".website-logo-icon", "./source/media/logoicon-white.png");
    ElementSourceChange(".theme-change-btn", "./source/media/ThemeChange_btn_white.png");

    //footer section
    AddClassToElements(".footer-links-a", "js_link_color");
    AddClassToElements(".footer-copyright-item a", "js_color_white");
    AddClassToElements(".footer-link-take-action", "js_link_color");
    AddClassToElements(".footer-link-take-action", "js-after-pseudo-background");
    AddClassToElements(".footer-email", "js_color_white");
    AddClassToElements(".footer-link-border", "js_border_bottom_white");

    // some other things
    AddClassToElements(".flex-item-hero", "js_background_black");
    AddClassToElements(".flex-item-hero", "js_box_shadow_one");
    AddClassToElements("input[type='text'], input[type='email'], textarea, select", "js_background_black");
    AddClassToElements("input[type='text'], input[type='email'], textarea, select", "js_color_white");
    AddClassToElements("input[type='text'], input[type='email'], textarea, select", "js_form_border");
    AddClassToElements("input[type='submit']", "js_submit_black_theme");
    AddClassToElements(".project-category-title ", "js_link_color");
}




