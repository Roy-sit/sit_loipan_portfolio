<!DOCTYPE html>
<html lang="en">
<?php
require_once('../includes/connect.php');
$query = 'SELECT * FROM project WHERE id = :projectid';
$stmt = $connection->prepare($query);
$projectid = $_GET['id'];
$stmt->bindParam(':projectid', $projectid, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt = null;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
    <h1>Edit Project</h1>
    <form action="edit_project.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="title">Project Title:</label>
        <input name="title" type="text" value="<?php echo $row['title']; ?>" required><br><br>
        <label for="image">Image URL:</label>
        <input name="image" type="text" value="<?php echo $row['image']; ?>" required><br><br>
        <label for="image2">Second Image URL (optional):</label>
        <input name="image2" type="text" value="<?php echo $row['image2']; ?>"><br><br>
        <label for="case_study">Case Study:</label>
        <textarea name="case_study" required><?php echo $row['case_study']; ?></textarea><br><br>
        <label for="client">Client Logo URL:</label>
        <input name="client" type="text" value="<?php echo $row['client']; ?>" required><br><br>
        <label for="application">Application Logo URL:</label>
        <input name="application" type="text" value="<?php echo $row['application']; ?>" required><br><br>
        <input name="submit" type="submit" value="Save Changes">
    </form>
</body>
</html>