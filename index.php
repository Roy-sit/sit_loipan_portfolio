
<!-- SELECT id, title, name, book_image FROM books,authors WHERE author_id = authors.id -->
<html>
<?php
//connect to the running database server and the specific database
require_once('includes/connect.php');


// create a query to run in SQL
// can give a nickname with "AS book" for long names
$query = 'SELECT project.id AS project, title, image, description, FROM project';


//run the query to get back the content
$results = mysqli_query($connect,$query);

print_r($results);

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
while($row = mysqli_fetch_array($results)){

echo'<section class="full-width-grid-con">
<div class="col-span-full m-col-span-full">
    <div id="mens"><h3>';

        echo $row['MENS'];
        
        echo'</h3>';

        echo'<div id="mens-image">
            <img src="images/';
            
            echo $row['mens'];
            <p>
              Performance Tailoring
              As outdoor performance remains important, climate-proof and windproof features such as quick-dry, comfort stretch, and water-repellent technology are key to this Spring/Summer sport tailoring collection.
              <br>
              By applying innovations in fabrics and construction to create comfortable, sport-inspired tailoring.      
            </p>
        </div>         
    </div> 
</div>
</section>
  
}
?>



  
<section class="myform">
<?php
//echo date('Y,D,M'); //echo is used to display the output. 
?>


<footer>
<?php
echo date('l jS \of F Y h:i:s A');
?>

</footer>
</body>
</html>