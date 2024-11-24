(function() {

  // Hamburger
  console.log('JS file is connected.');

  let burgerCon = document.querySelector("#burger-con");
  const links = document.querySelectorAll(".hamburger menu");
  
  function hamburgerMenu() {
    button.classList.toggle("expanded");
    burgerCon.classList.toggle("hidden");
  };

  button.addEventListener("click", hamburgerMenu);	




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




  // Slider
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




// BGM Audio
const musicSection = document.querySelector(".music-section");
const audio = document.querySelector(".music-section .background-music");

audio.volume = 0.07;

function handleIntersection(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      audio.play(); // Play audio when the section is in view
    } else {
      audio.pause(); // Pause audio when the section is out of view
      audio.currentTime = 0; // Reset audio to the beginning
    }
  });
}

const observer = new IntersectionObserver(handleIntersection, {
  threshold: 0.5, // Trigger when 50% of the section is visible
});

// Ensure the observer targets the correct section
if (musicSection) {
  observer.observe(musicSection);
}




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
  gsap.utils.toArray("#footer-contact, #m-model img, .vertical_text, #collection-image, #mens-image, #womens-image, #showroom, #earbuds-image").forEach((image) => {
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




// Volume control of Purple video
const burpleVideo = document.querySelector("#burple-video");
burpleVideo.volume = 0.05;


  

  // Back to top arrow
  document.addEventListener("scroll", () => {
    const backToTop = document.querySelector("#back-to-top");

    // Check if at the bottom of the page
    if ((window.innerHeight + window.scrollY) >= document.documentElement.scrollHeight) {
      backToTop.style.display = "flex"; // Show the arrow at the bottom
    } else {
      backToTop.style.display = "none"; // Hide the arrow when scrolling up
    }
  });

})();