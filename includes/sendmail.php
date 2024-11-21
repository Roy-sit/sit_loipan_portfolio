<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
require_once('includes/connect.php');

// Initialize variables to avoid undefined index warnings
$full_name = $email = $msg = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Gather the form content safely
    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $msg = isset($_POST['comments']) ? $_POST['comments'] : '';

    $errors = [];

    // Validate and clean these values
    $full_name = trim($full_name);
    $email = trim($email);
    $msg = trim($msg);

    if (empty($full_name)) {
        $errors['full_name'] = 'Full Name cant be empty';
    }

    if (empty($msg)) {
        $errors['comments'] = 'Comment field cant be empty';
    }

    if (empty($email)) {
        $errors['email'] = 'You must provide an email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['legit_email'] = 'You must provide a REAL email';
    }

    if (empty($errors)) {
        // Insert these values as a new row in the contact table
        $query = "INSERT INTO contact (full_name, email, comments) VALUES ('$full_name', '$email', '$msg')";

        if (mysqli_query($connect, $query)) {
            // Format and send these values in an email
            $to = 'lpsroy78@gmail.com';
            $subject = 'Message from your Portfolio site!';
            $message = "You have received a new contact form submission:\n\n";
            $message .= "Name: ".$full_name."\n";
            $message .= "Email: ".$email."\n\n";
            $message .= $msg;
            
            // Send the email
            mail($to, $subject, $message);

            // Redirect to thank you page
            header('Location: thank_you.php');
        } else {
            echo "Error: " . mysqli_error($connect);  // Display SQL error if the query fails
        }
    } else {
        // Output any validation errors
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
} else {
    // If the form is not submitted, provide feedback
    echo "Please fill out the form to contact us.";
}
?>