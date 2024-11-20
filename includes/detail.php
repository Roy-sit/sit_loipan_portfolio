<html>
<?php
//connect to the running database server and the specific database
require_once('includes/connect.php');

// create a query to run in SQL
$query = "SELECT id, title, image, description FROM project";

//run the query to get back the content
$results = mysqli_query($connect, $query);

// Check if the query was successful
if (!$results) {
    echo "Query failed: " . mysqli_error($connect);
}

?>

<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<header></header>



  <section class="container">
        <div class="title">
            <h3><?php echo $row['MENSWEAR'];?></h3>          
        </div>

        <div class="image">
            <img src="images/<?php echo $row['mens-image.jpg'];?>" alt="image"> 
        </div>
        
     
        <div class="case">
        <p>
            <span>CASE STUDY:</span>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eum dicta eaque tenetur deleniti eveniet sit maiores impedit rem culpa corrupti, at nam. Voluptate ex placeat quaerat id et sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eum dicta eaque tenetur deleniti eveniet sit maiores impedit rem culpa corrupti. eum dicta eaque tenetur deleniti eveniet sit maiores impedit rem culpa corrupti.
            <br>
            <br>
            <span>CLIENTS:</span>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eum dicta eaque tenetur deleniti eveniet sit.
            <br>
            <br>
            <span>APPLICATION:</span>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eum dicta eaque tenetur deleniti.
        </p>
    </div>
    </section>



<footer>
</footer>
</body>
</html>