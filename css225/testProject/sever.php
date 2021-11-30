<?php 

$servername = "localhost"; 
$username = "root"; 
$password = "password"; 
$dbname = "library"; 

// connecting database 
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection 
if(!$conn){
   die("ERROR: Could not connect.". mysqli_connect_error());
}else{
   // that define protacal 
   echo "Connect Successfully. Host Info : " .mysqli_get_host_info($conn)."<br>";
}

?>