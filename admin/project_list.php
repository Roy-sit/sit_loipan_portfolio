<!DOCTYPE html>
<html lang="en">
<?php
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
    <h1>Project List</h1>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<p class="project-list">' .
            $row['title'] .
            ' <a href="project_detail.php?id=' . $row['id'] . '">view</a>' .
            ' <a href="edit_project_form.php?id=' . $row['id'] . '">edit</a>' .
            ' <a href="delete_project.php?id=' . $row['id'] . '">delete</a></p>';
    }
    $stmt = null;
    ?>
    <br><br><br>
    <h3>Add a New Project</h3>
    <form action="add_project.php" method="post">
        <label for="title">Project Title:</label>
        <input name="title" type="text" required><br><br>
        <label for="image">Image:</label>
        <input name="image" type="text" required><br><br>
        <label for="image2">Second Image(optional):</label>
        <input name="image2" type="text"><br><br>
        <label for="case_study">Case Study:</label>
        <textarea name="case_study" required></textarea><br><br>
        <label for="client">Client Logo:</label>
        <input name="client" type="text" required><br><br>
        <label for="application">Application Logo:</label>
        <input name="application" type="text" required><br><br>
        <input name="submit" type="submit" value="Add">
    </form>
</body>
</html>