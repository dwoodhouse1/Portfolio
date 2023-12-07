//Banner text
const timeline = gsap.timeline({repeat: -1});
const chars = document.querySelectorAll(".banner__text");



timeline.from(chars, {opacity: 1, scale: 0, ease: "sine", delay: 0.25})
    .to(".banner__text", {
        "--font-weight": 600,
        duration: .9,
        ease: "sine.inOut",
        stagger: {
            yoyo: true,
            each: 0.5,
            repeat: -1
        }
    }, 1);