// REUSEABLE FUNCTIONS
document.querySelector("body").style.color= "white";
document.querySelector("body").style.backgroundColor= "black";
const AddClassToElements = (element, classToAdd)=>{
    let SelectorInit = document.querySelectorAll(element);
    for(let counter = 0; counter < SelectorInit.length; counter++){
        let Selector = SelectorInit[counter];
        Selector.classList.toggle(classToAdd);
    }
}

// REUSEABLE FUNCTIONS
const ElementSourceChange = (SingleSelector, source) =>{
    document.querySelector(SingleSelector).src = source;
}





// DARK THEME SETUP
//navigation section
AddClassToElements(".logo-text", "js_color_white");
AddClassToElements(".nav-menu-item a", "js_link_color");
AddClassToElements(".hamberger-navigation-container", "js_background_black");

//footer section
AddClassToElements(".footer-links-a", "js_link_color");
AddClassToElements(".footer-copyright-item a", "js_color_white");
AddClassToElements(".footer-link-take-action", "js_link_color");
AddClassToElements(".footer-link-take-action", "js-after-pseudo-background"); 
AddClassToElements(".footer-email", "js_color_white");

// CHANGE ELEMENT SOURCE LIKE ICONS AND STUFF
ElementSourceChange(".hamberger-icon-container img", "./source/media/Hamburger-white.png");
ElementSourceChange(".website-logo-icon", "./source/media/logoicon-white.png");