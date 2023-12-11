// Navigation Toggle
const hamburger = document.querySelector(".primary-nav__hamburger");
const navMenu = document.getElementsByClassName("primary-nav");
const navButtons = document.getElementsByTagName("ul");
const navLogo = document.getElementsByClassName("primary-nav__logo");
const navSocials = document.getElementsByClassName("primary-nav__socials");
let isToggled = document.getElementsByClassName(".ishidden_nav");

isToggled = false;

let screenWidth = window.screen.width;

if (screenWidth <= 992) // Inital check of screenwidth on page load
{
    navMenu[0].style.width = "0";
    navMenu[0].style.borderRight = "transparent";
    navLogo[0].style.display = "none";
    navButtons[0].style.display = "none";
    navSocials[0].style.display = "none";
}
else
{
    navMenu[0].style.width = "15rem";
    navMenu[0].style.borderRight = "8px solid #003d8d";
    navLogo[0].style.display = "flex";
    navButtons[0].style.display = "block";
    navSocials[0].style.display = "flex";
}

window.onresize = function() { // Check of screenwidth on window resize
    let screenWidth = window.screen.width;
    console.log(screenWidth);

    if (screenWidth <= 992)
    {
        console.log("screenwidth small");
        navMenu[0].style.width = "0";
        navMenu[0].style.borderRight = "transparent";
        navLogo[0].style.display = "none";
        navButtons[0].style.display = "none";
        navSocials[0].style.display = "none";
    }
    else
    {
        console.log("screenwidth large");
        navMenu[0].style.width = "15rem";
        navMenu[0].style.borderRight = "8px solid #003d8d";
        navLogo[0].style.display = "flex";
        navButtons[0].style.display = "block";
        navSocials[0].style.display = "flex";
    }
};

hamburger.addEventListener("click", mobileMenu);
function mobileMenu() {
    if (isToggled) { // When mobile viewer CANNOT see nav menu
        isToggled = false;
        navMenu[0].style.width = "0";
        navMenu[0].style.borderRight = "transparent";
        navLogo[0].style.display = "none";
        navButtons[0].style.display = "none";
        navSocials[0].style.display = "none";
    }
    else 
    {
        isToggled = true;
        navMenu[0].style.width = "15rem";
        navMenu[0].style.borderRight = "8px solid #003d8d";
        navLogo[0].style.display = "flex";
        navButtons[0].style.display = "block";
        navSocials[0].style.display = "flex";
        console.log(navLogo);
        
    }
}

