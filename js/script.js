(function() {

  console.log('JS file is connected.');

  // Hamburger menu
  let burgerCon = document.querySelector("#burger-con");
  let button = document.querySelector("#main-nav button");
  const links = document.querySelectorAll("#burger-con > ul > li > a");
  
  // Toggle burger menu visibility
  function hamburgerMenu() {
    button.classList.toggle("expanded");
    burgerCon.classList.toggle("show");  // Show menu when toggled
  };
  
  button.addEventListener("click", hamburgerMenu);
  
  // Toggle submenus for Fashion, Multimedia
  links.forEach(link => {
    link.addEventListener("click", function (event) {
      const submenu = this.nextElementSibling;
      if (submenu && submenu.tagName === "UL") {
        event.preventDefault();  // Prevent page navigation
        submenu.classList.toggle("show");  
      }
    });
  });

  


  // Rotation effect to vertical text
  gsap.registerPlugin(ScrollTrigger);

  gsap.fromTo(
    ".vertical_text",
    { rotate: 0, y: 0 }, 
    {
      rotate: 270, 
      y: 500, // Move down to stay visible
      scrollTrigger: {
        trigger: ".vertical_text",
        start: "top 30%", 
        end: "top 130%", 
        scrub: true,
      },
    }
  );



  // Slider for Experience Section
  const slider = document.querySelector('.image-slider');
  const leftArrow = document.querySelector('.arrow.left');
  const rightArrow = document.querySelector('.arrow.right');
  const slideIndicator = document.querySelector('.slide-indicator'); // Reference to the slide indicator

  let currentPosition = 0;
  const totalSlides = slider.querySelectorAll('img').length; // Calculate the total number of slides
  let currentSlide = 0;

  // Function to update the slide indicator
  function updateSlideIndicator() {
    slideIndicator.textContent = `${currentSlide + 1}/${totalSlides}`;
  }

  // Left arrow functionality
  leftArrow.addEventListener('click', () => {
    if (currentSlide > 0) { // Prevent moving beyond the first slide
      currentSlide--;
      currentPosition += slider.clientWidth;
      slider.style.transform = `translateX(${Math.min(currentPosition, 0)}px)`;
      updateSlideIndicator(); 
    }
  });

  // Right arrow functionality
  rightArrow.addEventListener('click', () => {
    if (currentSlide < totalSlides - 1) { // Prevent moving beyond the last slide
      currentSlide++;
      currentPosition -= slider.clientWidth;
      const maxTranslate = -slider.scrollWidth + slider.clientWidth;
      slider.style.transform = `translateX(${Math.max(currentPosition, maxTranslate)}px)`;
      updateSlideIndicator(); 
    }
  });
  updateSlideIndicator(); 



// BGM Audio for Experience Section
const musicSection = document.querySelector(".music-section");
const audio = document.querySelector(".music-section .background-music");

audio.volume = 0.08;

function handleIntersection(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      audio.play(); // Play audio when the section is in view
    } else {
      audio.pause(); // Pause audio when the section is out of view
    }
  });
}

const observer = new IntersectionObserver(handleIntersection, {
  threshold: 0.5, // Trigger when 50% of the section is visible
  rootMargin: '130px'
});

// Ensure the observer targets the correct section
if (musicSection) {
  observer.observe(musicSection);
}



  // W-model effect
  gsap.registerPlugin(ScrollTrigger);
  gsap.to("#w-model", {
    scrollTrigger: {
      trigger: "#w-model", 
      start: "top bottom", 
      end: "bottom top", 
      scrub: true, 
    },
    y: 100, // Move vertically for zoom effect
    scale: 0.8, 
    ease: "power1.inOut", 
    duration: 3, 
  });



  // Scroll effect
  gsap.utils.toArray("#footer-contact, #m-model img, #collection-image, #mens-image, #womens-image, #showroom, #earbuds-image").forEach((image) => {
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



// Slide effect for burple-images
  gsap.registerPlugin(ScrollTrigger);
  gsap.fromTo(
    "#burple-images .burple-img:first-child",  // Targets the first image (Burple Orange)
    {
      opacity: -1,
      x: "-200%",  // Start from the left
    },
    {
      opacity: 1,
      x: "0%",  // Move to normal position
      duration: 1,
      scrollTrigger: {
        trigger: "#burple-images",  
        start: "top 200%",  
        end: "bottom 100%",  
        scrub: true,  // Smooth scrolling effect
      }
    }
  );
  
  gsap.fromTo(
    "#burple-images .burple-img:last-child",  // Targets the second image (Burple Lemon)
    {
      opacity: -1,
      x: "200%", 
    },
    {
      opacity: 1,
      x: "0%", 
      duration: 1,
      scrollTrigger: {
        trigger: "#burple-images", 
        start: "top 200%",  
        end: "bottom 100%",  
        scrub: true, 
      }
    }
  );



// Volume control of Purple video
const burpleVideo = document.querySelector("#burple-video");
burpleVideo.volume = 0.05;


// Volume control of Demo Reels video
const demoVideo = document.querySelector("#demo-video");
demoVideo.volume = 0.10;



})();