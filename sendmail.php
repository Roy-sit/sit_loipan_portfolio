<?php
require_once('includes/connect.php');

$full_name = $email = $msg = '';

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
        $errors['legit_email'] = "You must provide a REAL email";
    }

    if (empty($errors)) {
        try {
            $query = "INSERT INTO contact (full_name, email, comments) VALUES (:full_name, :email, :msg)";
            $stmt = $connection->prepare($query);

            $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);

            if ($stmt->execute()) {


                // Redirect to thank you page
                header('Location: thank-you.php');
                exit;
            } else {
                echo "Error: Unable to submit form.";
            }

            $stmt = null; 
          } catch (PDOException $e) {
            echo "Database Error: Something went wrong. Please try again later.";
        }
        
    } else {
         echo "Please correct the errors in the form."; 
    }
  }
?>