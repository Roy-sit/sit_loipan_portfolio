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

<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>I will get back to you soon.</p>
        <a href="index.php">Back to My Portfolio</a>
    </div>
</body>

<div id="logo" class="col-start-2 col-end-4 m-col-start-1 m-col-end-4">
            <a href="#hero">
                <object data="images/my_name.svg" type="image/svg+xml"></object>
            </a>
        </div>

    <style>
        body {
            font-family: 'Galvji', Helvetica, Arial, sans-serif; 
            margin: 0;
            padding: 0;
            background-color: white;
            height: 100%;
        }
        
        .container {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        h1 {
            color: black;
            font-size: 24px;
        }
        p {
            color: #555;
            font-size: 16px;
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #FF6C00;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }

        #logo {
    max-width: 230px;
    margin: 0 auto; 
    display: block;
}
    </style>
</head>
</html>