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
</head>

<body>
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
                          <li><a href="#mens">Menswear</a></li>
                          <li><a href="#womens">Womenswear</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#multimedia">Multimedia</a>
                        <ul>
                            <li><a href="#multi">Rebranding</a></li>
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

<div class="bg-video-container">
  <video class="bg-video2" autoplay loop muted playsinline>
      <source src="video/bg_video_2.mp4" type="video/mp4">
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

    <div class="vertical_text">  
      <p>MOTION & <br> GRAPHIC<br>DESIGN</p>
      <p style="font-size: 10px; font-weight: 100;">C4D,  After Effects, <br>Illustrator, PremierePro</p>
      <br>
      <p>WEBSITE<br>DESIGN</p>
      <p style="font-size: 10px; font-weight: 100;">XD, HTML, CSS
        <br> JS, VSCode, Github</p>
      <br>
      <p>FASHION<br>DESIGN</p> 
      <p style="font-size: 10px; font-weight: 100;">Illustrator, Photoshop, 
        <br> PowerPoint</p>
    </div>  


  <!-- Contact icon -->
    <div class="contact-icon">
      <a href="#contact-form" target="_blank">
          <img src="images/my_logo.svg" alt="contact email" class="icon">
      </a>
      <a href="https://www.linkedin.com/in/roy-sit78" target="_blank">
          <img src="images/linkin.svg" alt="linkedin icon" class="icon">
      </a>
  </div>


  <!-- About section -->
    <section class="full-width-grid-con">
        <div class="col-span-full m-col-span-full">
            <div id="about-me">
            <h3>ABOUT</h3>
            <p>
            Driven by a strong passion for creativity, I was drawn to the world of fashion and graphic design, where I could transform ideas into tangible, impactful visuals. This inspiration has fueled my desire to craft innovative designs that truly resonate with audiences.
            Building on a solid educational foundation in fashion and graphic design from the UK, and enriched by years of professional experience with international fashion brands, I have honed my expertise in developing market-leading, forward-thinking designs. My career has been characterized by a strong sense of responsibility, a high work ethic, and a proven ability to deliver exceptional results.
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
        <br>
        <br>
        Currently expanding my skill set by studying Interactive Media Design. My goal is to blend fashion and technology with a unique specialisation in website design, video editing, and motion graphic for fashion brands.
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
                <img src="images/mens.jpg" alt="mens image">
                <p>
                  Performance Tailoring
                  As outdoor performance remains important, climate-proof and windproof features such as quick-dry, comfort stretch, and water-repellent technology are key to this lightweight tailoring collection.
                  Innovations in fabrics and construction to create comfortable, sport-inspired tailoring. <br><br>
                  <a href="#project-1" class="d-button">DETAIL...</a>     
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
                <a href="#project-2" class="d-button">DETAIL...</a>                 
              </p>
          </div>   
              <h3>WOMEN</h3>      
          </div>
      </div>
  </section>
 

  <!-- Rebranding section -->
  <section class="full-width-grid-con">
    <div class="col-span-full m-col-span-full">
        <div id="multi">
            <h3>REBRANDING</h3>         
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
              <a href="#project-3" class="d-button">DETAIL...</a>                 
              <br>  
              <br>       
            </p>
        </div>
    </div>
  </section>


  <!--T2 Earbuds section  -->
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
                <a href="#project-4" class="d-button">DETAIL...</a>                 
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


      
<!-- Project PHP -->
<div class="projects" id="projects">
    <h2 id="main-title">PROJECTS SECTION</h2>
    <?php
    require_once('includes/connect.php');

    $query = "SELECT id, title, image, case_study, client, application FROM project";
    $results = mysqli_query($connect, $query);

    if (!$results) {
        die("<p style='font-family: \"Galvji\", Helvetica, Arial, sans-serif;'>Query failed: " . mysqli_error($connect) . "</p>");
    } elseif (mysqli_num_rows($results) === 0) {
        echo "<p style='font-family: \"Galvji\", Helvetica, Arial, sans-serif;'>No data found in the table.</p>";
    } else {
        while ($row = mysqli_fetch_assoc($results)) {
    ?>
    
        <section class="project-con" id="project-<?php echo $row['id']; ?>"> <!-- Added ID here -->
            <div class="title">
              <h3><?php echo $row['title']; ?></h3>
            </div>
    
            <div class="image">
              <img src="<?php echo $row['image']; ?>" alt="image" class="project-img-<?php echo $row['id']; ?>">
            </div>
    
            <div class="des-con">
                <div class="case_study">
                    <p>
                        <span>CASE STUDY:</span>
                        <?php echo $row['case_study']; ?>
                    </p>
                </div>    
    
                <div class="client">
                    <p>
                        <span>CLIENT:</span>
                        <?php echo $row['client']; ?>
                    </p>
                </div>
    
                <div class="application">
                    <p>
                        <span>APPLICATION:</span>
                        <?php echo $row['application']; ?>
                    </p>
                </div>
            </div>
    
            <br>
            <br>
            <br>
        </section>
        
        <script>
          gsap.registerPlugin(ScrollTrigger);
          gsap.from(".project-img-<?php echo $row['id']; ?>", {
            scale: 0.8,
            opacity: 0,
            duration: 0.5,
            scrollTrigger: {
              trigger: ".project-img-<?php echo $row['id']; ?>",
              start: "top 80%",
              toggleActions: "play none none reverse",
            },
          });
        </script>
    <?php
        }
    }
    ?>
</div>



      <!--Footer section  -->
    <footer>
      <div class="contact-icon">
          <a href="https://www.instagram.com/royspfo/" target="_blank">
            <img src="images/ig_logo.svg" alt="my IG" class="icon">
        </a>
        <a href="https://www.linkedin.com/in/roy-sit78" target="_blank">
            <img src="images/linkin.svg" alt="linkedin icon" class="icon">
        </a>
    </div>

    <div id="reserved">
      <p>&#174; Roy Sit, All Right Reserved, 2025.
      </p>

      <div id="footer-contact">
        <form id="contact-form" action="includes/sendmail.php" method="POST">
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
