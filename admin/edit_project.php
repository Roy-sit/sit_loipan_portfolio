<?php
require_once('../includes/connect.php');
$query = 'UPDATE project SET title = ?, image = ?, image2 = ?, case_study = ?, client = ?, application = ? WHERE id = ?';
$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['image'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['image2'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['case_study'], PDO::PARAM_STR);
$stmt->bindParam(5, $_POST['client'], PDO::PARAM_STR);
$stmt->bindParam(6, $_POST['application'], PDO::PARAM_STR);
$stmt->bindParam(7, $_POST['id'], PDO::PARAM_INT);
$stmt->execute();
$stmt = null;
header('location: project_list.php');
?>