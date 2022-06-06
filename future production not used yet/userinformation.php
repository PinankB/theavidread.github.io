<?php

$connection = mysqli_connect('http://127.0.0.1:5500/about.html','root');

mysqli_select_db($connection,"avidreader");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `avidreader`(`user`,`email`,`message`) VALUES('$user','$email','$message')";

mysqli_query($connection, $query);

echo "MESSAGE IS SENT";
?>