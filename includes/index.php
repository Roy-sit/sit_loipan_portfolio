<html>
<?php

//connect to the running database server and the specific database
require_once('includes/connect.php');

// create a query to run in SQL
$query = "SELECT project.id, title, image, case_study, client, application FROM project";

//run the query to get back the content
$results = mysqli_query($connect, $query);

// Check if the query was successful
if (!$results) {
    echo "Query failed: " . mysqli_error($connect);
}

?>

<head>
<script src="https://cdn.tailwindcss.com"></script>

<style>
    section{
        margin: 75px 0 55px 0;
    }
    .myform {
        margin:20px;
    }
</style>

</head>

<body>
<header></header>

<?php
while ($row = mysqli_fetch_array($results)) {
    
    echo ' <section class="container">
        <div class="title"> <h3>MENSWEAR</h3> </div>

        <div class="image"> <img src="images/mens-image.jpg" alt="image"> </div>
        
        <div class="des-con">
        <div class="case_study">
            <p>
              <span>CASE STUDY:</span>
              <br>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eum dicta eaque tenetur deleniti eveniet sit maiores impedit rem culpa corrupti, at nam.
            </p>
        </div>

        <div class="client">
          <p>
            <span>CLIENT:</span> 
            <br> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sit amet eum dicta eaque tenetur deleniti eveniet.
          </p>
        </div>

        <div class="application">
           <p>
            <span>APPLICATION:</span>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit sit amet consectetur.
           </p>
        </div>
      </div>
    </section>';
}
?>

<section class="myform">
<?php
?>

</section>

<footer>
<?php
echo date('l jS \of F Y h:i:s A');
?>

</footer>
</body>
</html>