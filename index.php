<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
  <link href="https://fonts.googleapis.com/css2?family=YourFont&display=swap" rel="stylesheet">
</head>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Roy's Portfolio</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>   

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
</head>

<body>
<div id="popup" class="popup">
    <div class="popup-content">
        <video autoplay loop muted playsinline class="popup-video">
            <source src="video/bg_popup.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <img src="images/roy.png" alt="My photo" class="popup-image">
    </div>
</div>

  <!-- menu -->
  <h1 class="hidden">Welcome to my portfolio</h1>
<div id="sticky-nav-con">
    <header id="main-header" class="grid-con">
        <nav id="main-nav" class="col-start-1 col-end-2 m-col-start-4 m-col-end-13">
            <h2 class="hidden">Main Navigation</h2>
            <button id="button"></button>
            <div id="burger-con" class="hidden">
                <ul>
                    <li><a href="#about-me">About</a></li>
                    <li><a href="#experience">EXP</a></li>
                    <li><a href="#fashion">Fashion</a>
                        <ul>
                          <li><a href="#mens">Men</a></li>
                          <li><a href="#womens">Women</a></li>
                          <li><a href="#graphic-con">Prints</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#multimedia">Multimedia</a>
                        <ul>
                            <li><a href="#multi">Branding</a></li>
                            <li><a href="#multi-2">Earbuds</a></li>
                            <li><a href="#demo-title">Showreel</a></li>
                        </ul>
            </div>
        </nav>

        <!-- My Logo -->
        <div id="logo" class="col-start-2 col-end-4 m-col-start-1 m-col-end-4">
            <a href="#hero">
                <object data="images/my_name.svg" type="image/svg+xml"></object>
            </a>
        </div>
    </header>
</div>


<!-- Background Video -->
<div class="bg-video-container">
  <video class="bg-video" autoplay loop muted playsinline>
      <source src="video/bg_video.mp4" type="video/mp4">
      Your browser does not support the video tag.
  </video>
</div>


<!-- Hero video -->    
    <section id="hero" class="full-width-grid-con">
        <h2 class="hidden">My Fashion Show</h2>
        <video id="hero-video" controls>
          <source src="video/fashion_show.mp4" type="video/mp4">
          <source src="video/fashion_show.webm" type="video/webm">
          Your browser does not support the video tag.
      </video>   
    </section>

  <div class="container">
  <div class="vertical_text">
    <p>MOTION & <br> GRAPHIC<br>DESIGN</p>
    <p style="font-size: 10px; font-weight: 100;">C4D, After Effects, <br>Illustrator, PremierePro</p>
    <br>
    <p>WEBSITE<br>DESIGN</p>
    <p style="font-size: 10px; font-weight: 100;">XD, HTML, CSS<br> JS, VSCode, Github</p>
    <br>
    <p>FASHION<br>DESIGN</p> 
    <p style="font-size: 10px; font-weight: 100;">Illustrator, Photoshop, <br> PowerPoint</p>
  </div>

  <!-- Thumbnails -->
  <div class="thumb_grid">

  <a href="#mens" class="thumb-link">
  <div class="thumb-container">
    <img src="images/thumb_m.png" alt="Thumbnail 1" class="thumb">
    <div class="orange-box"></div>
    <span class="hover-text">MEN</span>
  </div>
  </a>

  <a href="#womens" class="thumb-link">
  <div class="thumb-container">
    <img src="images/thumb_w.png" alt="Thumbnail 2" class="thumb">
    <div class="orange-box"></div>
    <span class="hover-text">WOMEN</span>
  </div>
  </a>

  <a href="#graphic-con" class="thumb-link">
  <div class="thumb-container">
    <img src="images/thumb_pt.png" alt="Thumbnail 3" class="thumb">
    <div class="orange-box"></div>
    <span class="hover-text">PRINT</span>
  </div>
  </a>

  <a href="#multi" class="thumb-link">
  <div class="thumb-container">
    <img src="images/thumb_bur.png" alt="Thumbnail 4" class="thumb">
    <div class="orange-box"></div>
    <span class="hover-text">BRANDING</span>
  </div>
  </a>

  <a href="#multi-2" class="thumb-link">
  <div class="thumb-container">
    <img src="images/thumb_buds.png" alt="Thumbnail 5" class="thumb">
    <div class="orange-box"></div>
    <span class="hover-text">EARBUDS</span>
  </div>
  </a>

  <a href="#demo-title" class="thumb-link">
  <div class="thumb-container">
    <img src="images/thumb_reel.png" alt="Thumbnail 6" class="thumb">
    <div class="orange-box"></div>
    <span class="hover-text">REELS</span>
  </div>
  </a>
</div>
</div>




  <!-- Contact icon -->
    <div class="contact-icon">
      <a href="#contact-form">
          <img src="images/my_logo.svg" alt="contact email" class="icon">
      </a>
      <a href="https://www.instagram.com/royspfo/" target="_blank">
            <img src="images/ig_logo.svg" alt="my IG" class="icon">
        </a>
        <a href="https://www.facebook.com/profile.php?id=100075640328103" target="_blank">
     <img src="images/facebook.svg" alt="Facebook icon" class="icon">
    </a>
  </div>


  <!-- About section -->
    <section class="full-width-grid-con">
        <div class="col-span-full m-col-span-full">
            <div id="about-me">
            <h3>ABOUT</h3>
            <p>
            Driven by a strong passion for creativity, I was drawn to the world of fashion and graphic design, where I could transform ideas into tangible, impactful visuals. This inspiration has fueled my desire to craft innovative designs that truly resonate with audiences.
            <br><br>
            Currently, I am expanding my skill set by studying Interactive Media Design, with the goal of merging fashion and technology. My focus is on developing a unique specialization in website design, logo creation, and motion graphics tailored to the needs of fashion brands.
                <br><br>           
            </p>
            </div>
        </div>
    </section>
    
    <div id="collection-image">
    <img src="images/collection.jpg" alt="collection rack">
    </div>

    
<!-- Experience Section -->
<section class="full-width-grid-con">
  <div class="col-span-full m-col-span-full">
    <div id="experience">
      <h3>EXPERIENCE</h3>
    </div>
    <div id="showroom">
      <button class="arrow left"></button>
      <div class="image-slider">
        <img src="images/ls_showroom.jpg" alt="showroom image">
        <img src="images/ls_showroom2.jpg" alt="showroom image 2">
        <img src="images/ls_showroom3.jpg" alt="showroom image 3">
        <img src="images/ls_showroom4.jpg" alt="showroom image 4">
        <img src="images/ls_showroom7.jpg" alt="showroom image 7">
        <img src="images/ls_showroom6.jpg" alt="showroom image 6">
        <img src="images/ls_showroom5.jpg" alt="showroom image 5">
        <img src="images/ls_showroom8.jpg" alt="showroom image 8">
      </div>
      <button class="arrow right"></button>
      <div class="slide-indicator">1/8</div> 

        <!-- Audio -->
        <section class="music-section">
          <h2 class="hidden">Music Section</h2>
          <audio class="background-music" preload="auto" src="audio/bgm.m4a"></audio>
        </section>

      <p>
        With a solid educational foundation in fashion and graphic design, backed by a degree from the UK, and many years of professional experience working with international fashion brands, I have honed my expertise in creating innovative and market-leading designs. My career has been defined by a strong sense of responsibility, a high work ethic, and a proven track record of delivering high-quality results.   
        <br><br>
      </p>
    </div>
  </div>
</section>


    <!-- Menswear section -->
    <section class="full-width-grid-con">
        <div class="col-span-full m-col-span-full">
            <div id="mens">
            <h3>MEN</h3>
            <div id="mens-image">
            <img src="images/mens.jpg" alt="mens image" class="front"
          onclick="this.classList.toggle('front'); this.classList.toggle('back'); this.nextElementSibling.classList.toggle('front'); this.nextElementSibling.classList.toggle('back')"/>

        <img src="images/men_2.jpg" alt="men 2 image" class="back"
          onclick="this.classList.toggle('front'); this.classList.toggle('back'); this.previousElementSibling.classList.toggle('front'); this.previousElementSibling.classList.toggle('back')"/>
          
                <p>
                  Performance Tailoring
                  As outdoor performance remains important, climate-proof and windproof features such as quick-dry, comfort stretch, and water-repellent technology are key to this lightweight tailoring collection.
                  Innovations in fabrics and construction to create comfortable, sport-inspired tailoring. <br><br>
                  <a href="project.php?id=1"  target="_blank"  class="d-button">DETAIL...</a>     
              </p>
                </div>  
            </div>
        </div>
    </section>

    <div id="m-model">
      <img src="images/man_model.png" alt="man model">
    </div>



    <!-- Womenswear section -->
    <section class="col-span-full m-col-span-full">
      <div>
          <div id="womens">
          <div id="womens-image">
              <img src="images/womens.jpg" alt="womens image">
              <img id="w-model" src="images/woman_model.png" alt="woman model">
              <p>
                Tactile Material
                The focus shifts to a bolder and more vibrant aesthetic. The designs feature rich, colourful palettes and innovative gradient dye techniques, adding depth and visual interest. Additionally emphasises on fabric textures, exploring unique surface treatments to enhance both the visual appeal and tactile experience of the garments, while still incorporating quick-dry, comfort stretch, and water-repellent technologies. <br><br>
                <a href="project.php?id=2" target="_blank" class="d-button">DETAIL...</a>                 
              </p>
          </div>   
              <h3>WOMEN</h3>      
          </div>
      </div>
  </section>



  <!-- Graphic -->
<section class="full-width-grid-con">
  <div class="col-span-full m-col-span-full">
    <div id="graphic-con">
      <h3>PRINTS</h3>
    </div>
    <div id="garphic-image">
      <button class="arrow2 left"></button>
      <div class="image-slider2">
        <img src="images/graphic_1.jpg" alt="graphic image">
        <img src="images/graphic_2.jpg" alt="graphic image 2">
        <img src="images/graphic_3.jpg" alt="graphic image 3">
      </div>
      <button class="arrow2 right"></button>
      <div class="slide-indicator2">1/3</div>
      <p>
        This season’s prints push boundaries with bold “print-on-print” 
        designs. Abstract florals on moody purple bring an edgy sophistication, 
        while rhythmic dots in varied sizes and tones create a graphic, modern 
        aesthetic. Dense overlays of florals and dots add depth and dynamic energy. 
        These patterns blend tradition with innovation, delivering high-impact, 
        versatile styles perfect for Spring/Summer collections.
      </p>
    </div>
  </div>
</section>
 

  <!-- Branding section -->
  <section class="full-width-grid-con">
    <div class="col-span-full m-col-span-full">
        <div id="multi">
            <h3>BRANDING</h3>         
        </div>
        
        <div id="burple">
          <video id="burple-video" controls poster="images/burple_thumb.jpg">
            <source src="video/burple_promo.webm" type="video/webm">
            <source src="video/burple_promo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div id="burple-images">
      <img src="images/burple_orange.jpg" alt="Burple Orange" class="burple-img">
      <img src="images/burple_lemon.jpg" alt="Burple Lemon" class="burple-img">
        </div>
      
          <br><br> 
            <p>
              Step into a world with vibrancy, and every sip is a burst of joy! Burple fruity drinks are a celebration of modern simplicity and colourful fun. Burple believes in keeping it simple yet exciting, offering a refreshing blend of flavours that captivate the true taste, where every drop is a commitment to a brighter, fruit-filled future for youth. <br><br>
              <a href="project.php?id=3" target="_blank" class="d-button">DETAIL...</a>                 
              <br>  
              <br>       
            </p>
        </div>
    </div>
  </section>


  <!--Earbuds section  -->
    <section class="full-width-grid-con">
      <div class="col-span-full m-col-span-full">
          <div id="multi-2">
              <h3>EARBUDS</h3>         
          </div>

          <div id="earbuds-image">
            <img src="images/earbuds.jpg" alt="earbuds posters">
            <br><br> 
              <p>
              The goal of this project is to design and build a pair of earbuds using generators in Cinema 4D for a print campaign and a short video. The earbuds should be visually appealing earbuds including its colours, shapes, textures, lighting and animation keyframes. The goal is to create a visually appealing
              and engaging video that showcases the 3D earbuds and their features forsocial media using text.
                <br><br>
                <a href="project.php?id=4" target="_blank" class="d-button">DETAIL...</a>                 
                <br><br>           
              </p>
          </div>
      </div>
      </section>


      <!--Demo reels  -->
      <section class="full-width-grid-con">
        <div class="col-span-full m-col-span-full">
          <div id="demo-title">
            <h3>SHOWREEL</h3>
         
          <video id="demo-video" controls poster="images/demo_thumb.png">
            <source src="video/demo_reels.webm" type="video/webm">
            <source src="video/demo_reels.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video> 

            <p>
            A vibrant showcase of my most outstanding works across diverse creative fields. From innovative fashion projects to captivating motion graphics, makeup promotional videos, and expert video editing.
            <br>
            <br>
            Each piece highlights a different facet of my skills and creative vision. My fashion projects demonstrate a keen eye for design and trends, while the motion graphics work showcases storytelling through dynamic visuals. The makeup promotional videos capture the essence of branding and marketing, and my video editing pieces underline precision and the power of visual narratives.

            </p>
          </div>
          </div>
      </section>


      <!--Footer section  -->
    <footer>
      <div class="contact-icon">
          <a href="https://www.instagram.com/royspfo/" target="_blank">
            <img src="images/ig_logo.svg" alt="my IG" class="icon">
        </a>
        <a href="https://www.facebook.com/profile.php?id=100075640328103" target="_blank">
     <img src="images/facebook.svg" alt="Facebook icon" class="icon">
    </a>
    </div>

    <div id="reserved">
      <p>&#174; Roy Sit, All Right Reserved, 2025.
      </p>

      <div id="footer-contact">
        <form id="contact-form" action="thank-you.php" method="POST">
          <input type="text" name="fullName" placeholder="Full Name" required>
          <input type="email" name="email" placeholder="Email" required>
          <textarea name="comments" rows="3" placeholder="Comments"></textarea>
          <button type="submit">Send</button>
        </form>
      </div>
      </div>

    <script src="js/script.js"></script>
    </footer>
</body>
</html>
