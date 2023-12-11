//Banner text
//const timeline = gsap.timeline({repeat: -1});
const headerElement = document.querySelector("#banner__h1");
const subHeaderElement = document.querySelector("#banner__h2")
console.log(headerElement);
function typingEffect(element, speed)
{
    const text = element.innerText.split("");

    element.innerText = "";

    text.forEach((character, index) => {
        setTimeout(() => { // loop is repeating whatever the speed variable is set to.
            element.innerHTML += character; // adds each character from the element one at a time to the inner HTML.
        }, index * speed);
        
    });
}

typingEffect(headerElement, 200);

if (subHeaderElement !== null) // some pages don't have the h2 on banner, so this checks if it does on each page (otherwise it will throw null errors)
{
    typingEffect(subHeaderElement, 200);
}



