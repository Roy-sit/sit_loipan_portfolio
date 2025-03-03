<?php
require_once('includes/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $msg = isset($_POST['comments']) ? trim($_POST['comments']) : '';

    $errors = [];

    if (empty($full_name)) {
        $errors['full_name'] = "Full Name can't be empty";
    }

    if (empty($msg)) {
        $errors['comments'] = "Comments can't be empty";
    }

    if (empty($email)) {
        $errors['email'] = "You must provide an email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "You must provide a REAL email";
    }

    if (!empty($errors)) {
        echo json_encode(["status" => "error", "errors" => $errors]);
        exit;
    }

    try {
        $query = "INSERT INTO contact (full_name, email, comments) VALUES (:full_name, :email, :msg)";
        $stmt = $connection->prepare($query);

        $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success"]);
            exit;
        } else {
            echo json_encode(["status" => "error", "message" => "Error submitting form."]);
            exit;
        }

    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Database error. Try again later."]);
        exit;
    }
}
?>