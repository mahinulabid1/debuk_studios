// the state of the theme
let readThemeStatus = localStorage.getItem("Debuk_theme_state");
// console.log(readThemeStatus);
if (readThemeStatus == null) {
    console.log("local storage is null");
    localStorage.setItem("Debuk_theme_state", "white");
}
// localStorage.setItem("Debuk_theme_state", "white");


// REUSEABLE FUNCTIONS
const body = document.querySelector("body");
const AddClassToElements = (element, classToAdd) => {
    let SelectorInit = document.querySelectorAll(element);
    for (let counter = 0; counter < SelectorInit.length; counter++) {
        let Selector = SelectorInit[counter];
        Selector.classList.add(classToAdd);
    }
}

const RemoveClassElements = (element, classToRemove) => {
    let SelectorInit = document.querySelectorAll(element);
    for (let counter = 0; counter < SelectorInit.length; counter++) {
        let Selector = SelectorInit[counter];
        Selector.classList.remove(classToRemove);
    }
}

// REUSEABLE FUNCTIONS
const ElementSourceChange = (SingleSelector, source) => {
    document.querySelector(SingleSelector).src = source;
}

const Run_black_theme = () => {
    // DARK THEME SETUP
    // navigation section
    AddClassToElements("body", "js_background_black");
    AddClassToElements("body", "js_color_white");
    AddClassToElements(".logo-text", "js_color_white");
    AddClassToElements(".nav-menu-item a", "js_link_color");
    AddClassToElements(".hamberger-navigation-container", "js_background_black");
    AddClassToElements(".ham-header-nav__first-section__links", "js_link_color");
    AddClassToElements(".cookie-ham-para", "js_color_black");
    AddClassToElements(".close-ham-bar-btn", "js_ham_close_btn");
    AddClassToElements(".ham-bar", "js_background_white");

    // change the source of the navigation and stuff
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



const Run_white_theme = () => {
    // DARK THEME SETUP
    // navigation section
    RemoveClassElements("body", "js_background_black");
    RemoveClassElements("body", "js_color_white");
    RemoveClassElements(".logo-text", "js_color_white");
    RemoveClassElements(".nav-menu-item a", "js_link_color");
    RemoveClassElements(".hamberger-navigation-container", "js_background_black");
    RemoveClassElements(".ham-header-nav__first-section__links", "js_link_color");
    AddClassToElements(".cookie-ham-para", "js_color_black");
    RemoveClassElements(".close-ham-bar-btn", "js_ham_close_btn");
    RemoveClassElements(".ham-bar", "js_background_white");

    // change the source of the navigation and stuff
    ElementSourceChange(".website-logo-icon", "./source/media/logoicon.png");
    ElementSourceChange(".theme-change-btn", "./source/media/ThemeChange_btn.png");

    //footer section
    RemoveClassElements(".footer-links-a", "js_link_color");
    RemoveClassElements(".footer-copyright-item a", "js_color_white");
    RemoveClassElements(".footer-link-take-action", "js_link_color");
    RemoveClassElements(".footer-link-take-action", "js-after-pseudo-background");
    RemoveClassElements(".footer-email", "js_color_white");
    RemoveClassElements(".footer-link-border", "js_border_bottom_white");

    // some other things
    RemoveClassElements(".flex-item-hero", "js_background_black");
    RemoveClassElements(".flex-item-hero", "js_box_shadow_one");
    RemoveClassElements("input[type='text'], input[type='email'], textarea, select", "js_background_black");
    RemoveClassElements("input[type='text'], input[type='email'], textarea, select", "js_color_white");
    RemoveClassElements("input[type='text'], input[type='email'], textarea, select", "js_form_border");
    RemoveClassElements("input[type='submit']", "js_submit_black_theme");
    RemoveClassElements(".project-category-title ", "js_link_color");
};



// initial theme setup 
if (readThemeStatus == "black") {
    console.log("initial theme set to black");
    // body.style.color = "white";
    // body.style.backgroundColor = "black";
    Run_black_theme();
}else{
    console.log("initial theme is set to white");
}




// get theme state

document.querySelector(".theme-change-btn").addEventListener("click", () => {
    console.log("clicked theme changer button");
    let theme_state = localStorage.getItem("Debuk_theme_state");
    if (theme_state == "white") {
        localStorage.setItem("Debuk_theme_state", "black");
        console.log("theme white present");
        // body.style.color = "white";
        // body.style.backgroundColor = "black";
        Run_black_theme();
    } else if (theme_state == "black") {
        localStorage.setItem("Debuk_theme_state", "white");
        console.log("theme black present");
        // body.style.color = "black";
        // body.style.backgroundColor = "white";
        Run_white_theme();
    }
});


