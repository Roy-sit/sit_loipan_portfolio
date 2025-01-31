<?php
require_once('../includes/connect.php');
$query = 'DELETE FROM project WHERE id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$stmt = null;
header('location: project_list.php');
?>