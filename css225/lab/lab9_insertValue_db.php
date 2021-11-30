<?php 
$servername = "localhost"; 
$username = "root"; 
$password = "password"; 
$dbname = "demo"; 

// connecting database 
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection 
if(!$conn){
   die(" <br> ERROR: Could not connect.". mysqli_connect_error());
}else{
   // that define protacal 
   echo " <br> Connect Successfully. Host Info : " .mysqli_get_host_info($conn)."<br>";
}

// create students 
if(isset($_POST["btnStudent"])){
   // assosiate data 
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];

   $quely = "INSERT INTO demo.student (first_name, last_name, email) values ('$fname', '$lname', '$email');";
   if(mysqli_query($conn, $quely)){
      echo " <br> Create Insert data successfully"; 
      header("Location: http://localhost:8000/lab9_insertValue.php");
   }else{
      echo " <br> Error: Could not able to excute $sql_create_couse" .mysqli_error($conn);
   }
}

// create couses 
if(isset($_POST["btnCouse"])){
   // assosiate data 
   $couses = $_POST['couses'];
   $advisor = $_POST['advisor'];

   $quely = "INSERT INTO demo.couses (couses_name, advisor) values ('$couses', '$advisor');";
   if(mysqli_query($conn, $quely)){
      echo " <br> Create Insert data successfully"; 
      header("Location: http://localhost:8000/lab9_insertValue.php");
   }else{
      echo " <br> Error: Could not able to excute $sql_create_couse" .mysqli_error($conn);
   }
}

// create register
if(isset($_POST["btnReigst"])){
   //assosoate data 
   $id = $_POST['id'];
   $couses_name = $_POST['couses_name'];

   $quely = "INSERT INTO demo.register (id, couses_name) values ('$id', '$couses_name');";
   if(mysqli_query($conn, $quely)){
      echo " <br> Create Insert data successfully"; 
      header("Location: http://localhost:8000/lab9_insertValue.php");
   }else{
      echo " <br> Error: Could not able to excute $sql_create_couse" .mysqli_error($conn);
   }
}

?>