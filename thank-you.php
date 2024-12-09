<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: 'Galvji', Helvetica, Arial, sans-serif; 
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            height: 100%;
        }
        
        .container {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 24px;
        }
        p {
            color: #555;
            font-size: 16px;
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Your message has been successfully sent. I will get back to you soon.</p>
        <a href="index.php">Go Back to Home</a>
    </div>
</body>
</html>