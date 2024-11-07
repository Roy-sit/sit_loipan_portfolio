(function(){
  console.log('JS file is connected.');

let burgerCon = document.querySelector("#burger-con");
const links = document.querySelectorAll(".hamburger menu")
  
function hamburgerMenu() {
  button.classList.toggle("expanded");
      burgerCon.classList.toggle("hidden");
};

button.addEventListener("click", hamburgerMenu);	
 
})();


// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Fade-in effect
gsap.utils.toArray(".full-width-grid-con").forEach((section) => {
    gsap.from(section, {
        opacity: 0,
        y: 50,
        duration: 0.5,
        scrollTrigger: {
            trigger: section,
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    });
});

// Scale effect for images
gsap.utils.toArray("#mens-image, #womens-image, #showroom, #earbuds-image").forEach((image) => {
    gsap.from(image, {
        scale: 0.8,
        opacity: 0,
        duration: 0.5,
        scrollTrigger: {
            trigger: image,
            start: "top 80%",
            toggleActions: "play none none reverse",
        }
    });
});