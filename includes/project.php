<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        section {
            margin: 75px 0 55px 0;
        }
        .myform {
            margin: 20px;
        }
    </style>
    <title>Roy's Project</title>
</head>


<body>
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
   
<div class="projects">
    <?php
    require_once('includes/connect.php');

    $query = "SELECT id, title, image, case_study, client, application FROM project";
    $results = mysqli_query($connect, $query);

    if (!$results) {
        die("<p>Query failed: " . mysqli_error($connect) . "</p>");
    } elseif (mysqli_num_rows($results) === 0) {
        echo "<p>No data found in the table.</p>";
    } else {
        while ($row = mysqli_fetch_assoc($results)) {
    ?>

    <section class="project-con">
        <div class="title">
          <h3><?php echo $row['title'];?></h3>
        </div>

        <div class="image">
          <img src="<?php echo $row['image'];?>" alt="image">
        </div>

      <div class="des-con">
          <div class="case_study">
              <p>
                <span>CASE STUDY:</span>
                <?php echo $row['case_study'];?>
              </p>
          </div>    

        <div class="client">
          <p>
            <span>CLIENT:</span>
            <?php echo $row['client'];?>
          </p>
        </div>

        <div class="application">
          <p>
          <span>APPLICATION:</span>
          <?php echo $row['application'];?>
          </p>
        </div>
      </div>

      <br>
      <br>
      <br>
    </section>
  <?php
  }
  }
  ?>
  </div>

  
</body>
</html>