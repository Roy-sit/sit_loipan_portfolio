<?php

require_once('includes/connect.php');

///gather the form content
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$msg = $_POST['comments'];

$errors = [];

//validate and clean these values

$full_name = trim($full_name);
$email = trim($email);
$msg = trim($msg);

if(empty($full_name)) {
    $errors['full_name'] = 'Full Name cant be empty';
}

if(empty($msg)) {
    $errors['comments'] = 'Comment field cant be empty';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contacts (full_name, email, comments) VALUES ('" . $full_name . "', '" . $email . "', '" . $msg . "')";

    if(mysqli_query($connect, $query)) {

//format and send these values in an email

$to = 'lpsroy78@gmail.com';
$subject = 'Message from your Portfolio site!';
$message = "You have received a new contact form submission:\n\n";
$message .= "Name: ".$full_name."\n";
$message .= "Email: ".$email."\n\n";
$message .= $msg;
//build out rest of message body...

mail($to, $subject, $message);

header('Location: thank_you.php');
}

else{
    for($i=0; $i < count($errors); $i++) {
        echo $errors[$i].'<br>';
    }
}
}
?>