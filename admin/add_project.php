<?php
require_once('../includes/connect.php');

$random = rand(10000, 99999);
$newname = 'image' . $random;
$filetype = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

if ($filetype == 'jpeg') {
    $filetype = 'jpg';
}
if ($filetype == 'exe') {
    exit('Nice try');
 } 

$newname .= '.' . $filetype;
$target_file = 'uploads/' . $newname;


if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
  
    // PDO database insert
    $query = "INSERT INTO project (title, image, case_study, client, application, description) 
              VALUES (:title, :image, :case_study, :client, :application, :description)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':image', $newname, PDO::PARAM_STR);
    $stmt->bindParam(':case_study', $_POST['case_study'], PDO::PARAM_STR);
    $stmt->bindParam(':client', $_POST['client'], PDO::PARAM_STR);
    $stmt->bindParam(':application', $_POST['application'], PDO::PARAM_STR);
    $stmt->bindParam(':description', $_POST['description'], PDO::PARAM_STR);

    $stmt->execute();
    $stmt = null;

   
    header('Location: project_list.php');
    exit();
} else {
    echo 'Error uploading the file.';
}
?>