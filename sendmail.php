<?php
require_once('includes/connect.php');
$full_name = $email = $msg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $msg = isset($_POST['comments']) ? $_POST['comments'] : '';

    $errors = [];
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
        $query = "INSERT INTO contact (full_name, email, comments) VALUES ('$full_name', '$email', '$msg')";

        if (mysqli_query($connect, $query)) {
            $to = 'lpsroy78@gmail.com';
            $subject = 'Message from your Portfolio site!';
            $message = "You have received a new contact form submission:\n\n";
            $message .= "Name: ".$full_name."\n";
            $message .= "Email: ".$email."\n\n";
            $message .= $msg;
            
            mail($to, $subject, $message);

            // Redirect to thank you page
            header('Location: contact.php');
        } else {
            echo "Error: " . mysqli_error($connect); 
        }
    } else {
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
} else {
    echo "Please fill out the form to contact us.";
}
?>