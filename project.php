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
                    <li><a href="index.php?id=#about-me">About</a></li>
                    <li><a href="index.php?id=#experience">EXP</a></li>
                    <li><a href="index.php?id=#fashion">Fashion</a>
                        <ul>
                          <li><a href="index.php?id=#mens">Men</a></li>
                          <li><a href="index.php?id=#womens">Women</a></li>
                          <li><a href="index.php?id=#graphic-con">Prints</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#multimedia">Multimedia</a>
                        <ul>
                            <li><a href="index.php?id=#multi">Rebranding</a></li>
                            <li><a href="index.php?id=#multi-2">Earbuds</a></li>
                            <li><a href="index.php?id=#demo-title">Showreel</a></li>
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
    
        <section class="project-con" id="project-<?php echo $row['id']; ?>"> 
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
        <a href="https://www.facebook.com/profile.php?id=100075640328103" target="_blank">
     <img src="images/facebook.svg" alt="Facebook icon" class="icon">
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
