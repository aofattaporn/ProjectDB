<?php
// configue php 
$servername = "localhost:3306";
$username = "root";
$password = "password";
$dbname = "Test"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }else{
//    echo "Connected successfully";
// }
?>