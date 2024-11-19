// Hamburger
(function(){
  console.log('JS file is connected.');

  let burgerCon = document.querySelector("#burger-con");
  const links = document.querySelectorAll(".hamburger menu");
  
  function hamburgerMenu() {
    button.classList.toggle("expanded");
    burgerCon.classList.toggle("hidden");
  };

  button.addEventListener("click", hamburgerMenu);	
})();



// Rotation effect to vertical text
gsap.registerPlugin(ScrollTrigger);

gsap.fromTo(
  ".vertical_text",
  { rotate: 0, y: 0 }, 
  {
    rotate: 270, 
    y: 530, // Move down to stay visible
    scrollTrigger: {
      trigger: ".vertical_text",
      start: "top 20%", 
      end: "top 100%", 
      scrub: true,
    },
  }
);


// Wavy effect
gsap.registerPlugin(ScrollTrigger);

gsap.to("#w-model", {
  scrollTrigger: {
    trigger: "#w-model", 
    start: "top bottom", 
    end: "bottom top", 
    scrub: true, 
  },
  y: 100, // Move vertically to create the wave effect
  scale: 0.8, 
  ease: "power1.inOut", 
  duration: 3, 
});




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



// Scroll effect
gsap.utils.toArray("#m-model img, .vertical_text, #collection-image, #mens-image, #womens-image, #showroom, #earbuds-image").forEach((image) => {
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