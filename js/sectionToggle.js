// Section Toggle
const triangle = document.getElementsByClassName("toggle-section");
const rotate = document.querySelector(".rotate");
const sectionContent = document.getElementsByClassName("section-content");

let isSectionToggled = document.getElementsByClassName("ishidden__section");
console.log(triangle.length);

for (let i = 0; i < triangle.length; i++)
{
    sectionContent[i].style.display = "block";
    console.log(sectionContent[i].style.display);
    triangle[i].addEventListener("click", function () {
        this.classList.toggle("rotate");
        console.log(sectionContent[i].style.display);
        
        if(sectionContent[i].style.display === "block")
        {
            sectionContent[i].style.display = "none";
            console.log("should be none");
        }
        else
        {
           sectionContent[i].style.display = "block";
           console.log("Should be block");
        }

    });
}