(function() {

  console.log('JS file is connected.');
  

// Immediate scroll effect
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));   
    target.scrollIntoView({
      behavior: 'auto',
      block: 'start'
    });
  });
});


// Hamburger menu elements
let burgerCon = document.querySelector("#burger-con");
let button = document.querySelector("#main-nav button");
const links = document.querySelectorAll("#burger-con > ul > li > a");

function toggleHamburgerMenu() {
  button.classList.toggle("expanded");
  burgerCon.classList.toggle("show");
}

// Close menu when clicking outside
function closeHamburgerMenu(event) {
  if (!burgerCon.contains(event.target) && !button.contains(event.target)) {
    button.classList.remove("expanded");
    burgerCon.classList.remove("show");
  }
}

// Sub-menus for Fashion, Multimedia
links.forEach((link) => {
  link.addEventListener("click", function (event) {
    const submenu = this.nextElementSibling;
    if (submenu && submenu.tagName === "UL") {
      event.preventDefault(); 
      submenu.classList.toggle("show");
    }
  });
});

button.addEventListener("click", toggleHamburgerMenu);
document.addEventListener("click", closeHamburgerMenu);



// Vertical text
gsap.registerPlugin(ScrollTrigger);
function isTabletOrDesktop() {
  return window.innerWidth >= 768; 
}

function applyScale() {
  gsap.fromTo(
    ".vertical_text",
    {
      rotate: 0,
      y: 0,
      scale: 1, 
    },
    {
      rotate: 270,
      y: 430,
      scale: isTabletOrDesktop() ? 0.8 : 1, // Scale down to 80% for tablet/desktop, keep 100% for smaller screens
      scrollTrigger: {
        trigger: ".vertical_text",
        start: "top 30%",
        end: "top 130%",
        scrub: true,
      },
    }
  );
}

applyScale();

// to adjust scaling if window is resized
window.addEventListener('resize', () => {
  // Reapply the scale effect when the window resizes
  applyScale();
});



  // Slider for Experience Section
  const slider = document.querySelector('.image-slider');
  const leftArrow = document.querySelector('.arrow.left');
  const rightArrow = document.querySelector('.arrow.right');
  const slideIndicator = document.querySelector('.slide-indicator');

  let currentPosition = 0;
  const totalSlides = slider.querySelectorAll('img').length;
  let currentSlide = 0;

  function updateSlideIndicator() {
    slideIndicator.textContent = `${currentSlide + 1}/${totalSlides}`;
  }

  // Left arrow function
  leftArrow.addEventListener('click', () => {
    if (currentSlide > 0) { // Prevent moving beyond the first slide
      currentSlide--;
      currentPosition += slider.clientWidth;
      slider.style.transform = `translateX(${Math.min(currentPosition, 0)}px)`;
      updateSlideIndicator(); 
    }
  });

  // Right arrow function
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



// Rotation for Men Section
function toggleImage(clickedImg) {
  const siblingImg = clickedImg.nextElementSibling || clickedImg.previousElementSibling;

  if (siblingImg) {
    clickedImg.classList.remove('front');
    clickedImg.classList.add('back');
    siblingImg.classList.remove('back');
    siblingImg.classList.add('front');
  }
}


// Slider for Graphic Section
const slider2 = document.querySelector('.image-slider2');
const leftArrow2 = document.querySelector('.arrow2.left');
const rightArrow2 = document.querySelector('.arrow2.right');
const slideIndicator2 = document.querySelector('.slide-indicator2'); 

let currentPosition2 = 0;
const totalSlides2 = slider2.querySelectorAll('img').length;
let currentSlide2 = 0;

function updateSlideIndicator2() {
  slideIndicator2.textContent = `${currentSlide2 + 1}/${totalSlides2}`;
}

leftArrow2.addEventListener('click', () => {
  if (currentSlide2 > 0) { 
    currentSlide2--;
    currentPosition2 += slider2.clientWidth;
    slider2.style.transform = `translateX(${Math.min(currentPosition2, 0)}px)`;
    updateSlideIndicator2(); 
  }
});

rightArrow2.addEventListener('click', () => {
  if (currentSlide2 < totalSlides2 - 1) {
    currentSlide2++;
    currentPosition2 -= slider2.clientWidth;
    const maxTranslate2 = -slider2.scrollWidth + slider2.clientWidth;
    slider2.style.transform = `translateX(${Math.max(currentPosition2, maxTranslate2)}px)`;
    updateSlideIndicator2(); 
  }
});
updateSlideIndicator2(); 



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
  gsap.utils.toArray("#sport-image, #garphic-image, #m-model img, #collection-image, #mens-image, #womens-image, #showroom, #earbuds-image").forEach((image) => {
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
burpleVideo.volume = 0.1;


// Volume control of Demo Reels video
const demoVideo = document.querySelector("#demo-video");
demoVideo.volume = 0.2;


// Volume control of Cyluxe video
const cyluxeVideo = document.querySelector("#cyluxe-video");
if (cyluxeVideo) {
  cyluxeVideo.volume = 0.2;
}



// Contact form - AJAX
const form = document.querySelector("#contact-form");

form.addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(form);

    fetch('sendmail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json()) 
    .then(data => {
        document.querySelectorAll(".error-message").forEach(e => e.remove()); // Clear old errors

        if (data.status === "error" && data.errors) {
            for (let field in data.errors) {
                const inputField = form.querySelector(`[name="${field}"]`);
                if (inputField) {
                    const errorElement = document.createElement('p');
                    errorElement.className = "error-message";
                    errorElement.textContent = data.errors[field];
                    errorElement.style.color = "white"; 
                    errorElement.style.fontSize = "10px"; 
                    errorElement.style.marginTop = "5px";
                    inputField.insertAdjacentElement("afterend", errorElement);
                }
            }
        } else if (data.status === "success") {
            form.reset();
            window.location.href = 'thank-you.php'; 
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
});


})();