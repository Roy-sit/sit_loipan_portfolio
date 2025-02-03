<?php
require_once('includes/connect.php');

$full_name = $email = $msg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $msg = isset($_POST['comments']) ? trim($_POST['comments']) : '';

    $errors = [];

    if (empty($full_name)) {
        $errors['full_name'] = 'Full Name can\'t be empty';
    }

    if (empty($msg)) {
        $errors['comments'] = 'Comment field can\'t be empty';
    }

    if (empty($email)) {
        $errors['email'] = 'You must provide an email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['legit_email'] = 'You must provide a REAL email';
    }

    if (empty($errors)) {
        try {
            $query = "INSERT INTO contact (full_name, email, comments) VALUES (:full_name, :email, :msg)";
            $stmt = $connection->prepare($query);

            $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $to = 'lpsroy78@gmail.com';
                $subject = 'Message from your Portfolio site!';
                $message = "You have received a new contact form submission:\n\n";
                $message .= "Name: " . $full_name . "\n";
                $message .= "Email: " . $email . "\n\n";
                $message .= $msg;

                mail($to, $subject, $message);





                // Redirect to thank you page
                header('Location: thankyou.php');
                exit;
            } else {
                echo "Error: Unable to submit form.";
            }

            $stmt = null; 
        } catch (PDOException $e) {
            echo "Database Error: " . $e->getMessage();
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