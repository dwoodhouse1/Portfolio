// Section Toggle
const triangle = document.querySelector(".toggle-section");
const rotate = document.querySelector(".rotate");
const sectionContent = document.getElementsByClassName("section-content");

let isSectionToggled = document.getElementsByClassName("ishidden__section");

sectionContent[0].style.display = "none";

$(triangle).click(function () {
    $(this).toggleClass("rotate");

    //alert("toggled");
    if (isSectionToggled == false) // Inital check of screenwidth on page load
    {
        sectionContent[0].style.display = "none";
        isSectionToggled = true;
        
    }
    else
    {
        sectionContent[0].style.display = "block";
        isSectionToggled = false;
        
    }
})