<!DOCTYPE html>
<html lang="en">
<?php

session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login_form.php');
}


require_once('../includes/connect.php');
$stmt = $connection->prepare('SELECT id, title FROM project ORDER BY title ASC');
$stmt->execute();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project List</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">

    
</head>
<body>
    <h2>Project List</h2>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<p class="project-list">' .
            $row['title'] .
            ' &nbsp;&nbsp;&nbsp; <a href="edit_project_form.php?id=' . $row['id'] . '">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;' .

            ' &nbsp;&nbsp;&nbsp; <a href="delete_project.php?id=' . $row['id'] . 
            '">Delete</a></p>';
    }

    $stmt = null;
    ?>
    <br><br>
    <h2>Add a New Project</h2>
    <form action="add_project.php" method="post" enctype="multipart/form-data">
    <label for="title">Project Title:</label>
    <input name="title" type="text" required><br><br>

    <label for="image">Upload Image:</label>
    <input name="image" type="file" accept="image/*" required><br><br>

    <label for="description">Project Description:</label>
    <textarea name="description" required></textarea><br><br>

    <label for="case_study">Case Study:</label>
    <textarea name="case_study" required></textarea><br><br>

    <label for="client">Client Logo:</label>
    <input name="client" type="text" required><br><br>

    <label for="application">Application Logo:</label>
    <input name="application" type="text" required><br><br>

    <input name="submit" type="submit" value="Add Project">
</form>
    <br> <br>
    <a href="logout.php">log out</a>

    <script>
        function confirmDelete() {
            // Display a confirmation message
            return confirm("Are you sure you want to delete this project?");
        }
    </script>

</body>
</html>