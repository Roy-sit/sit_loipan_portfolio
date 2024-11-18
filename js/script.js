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



// Zoom effect
const promoImages = document.querySelectorAll("#mens-image, #showroom, #womens-image");

promoImages.forEach(promoImage => {
  const img = promoImage.querySelector("img");

  promoImage.addEventListener("mouseenter", () => {
    gsap.to(img, {
      scale: 1.02, 
      duration: 0.3,
      ease: "power3.out",
    });
  });

  promoImage.addEventListener("mousemove", (e) => {
    const rect = promoImage.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width - 0.5) * 2; // Horizontal movement
    const y = ((e.clientY - rect.top) / rect.height - 0.5) * 2; // Vertical movement

    const maxMove = 10;
    gsap.to(img, {
      x: x * maxMove,
      y: y * maxMove,
      duration: 0.3,
      ease: "power3.out",
    });
  });

  promoImage.addEventListener("mouseleave", () => {
    gsap.to(img, {
      scale: 1,
      x: 0,
      y: 0,
      duration: 0.3,
      ease: "power3.out",
    });
  });
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

// Scale effect for images on scroll
gsap.utils.toArray(" .vertical_text, #collection-image, #mens-image, #womens-image, #showroom, #earbuds-image").forEach((image) => {
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