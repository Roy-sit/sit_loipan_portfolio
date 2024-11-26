<?php
//Creates a connection to the database. This code is 'included' into another file, as if it is pasted into the other file.
$connect = new mysqli('localhost','root','root','portfolio');


// Check if the connection was successful
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
?>