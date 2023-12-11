//Banner text
//const timeline = gsap.timeline({repeat: -1});
const headerText = "Drew Woodhouse";
const headerElement = document.getElementById("banner__fullname")
const occupationText = document.getElementById("banner_occupation");

typingEffect();

function typingEffect()
{
    let speed = 5000;
    for (let i = 0; i < headerText.length; i++)
    {
        headerElement.innerHTML += headerText.charAt(i);
        console.log(headerText.charAt(i));
        console.log(headerText.length);
    }
    setTimeout(typingEffect, speed);
}

