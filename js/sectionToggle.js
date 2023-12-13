// Section Toggle
const triangle = document.getElementsByClassName("toggle-section");
const rotate = document.getElementsByClassName("rotate");
const sectionContent = document.getElementsByClassName("section-content");

for (let i = 0; i <= triangle.length; i++)
{
    sectionContent[i].style.display = "block";

    triangle[i].addEventListener("click", function () {
        console.log(this.classList);
        this.classList.toggle("rotate");
        
        if (sectionContent[i].style.display === "block")
        {
            sectionContent[i].style.display = "none";
        }
        else
        {
           sectionContent[i].style.display = "block";
        }

    });
}