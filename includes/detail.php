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




<footer>
</footer>
</body>
</html>