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

$query = "SELECT student.id , student.first_name, student.last_name, register.couses_name FROM student NATURAL JOIN register";

if($result = mysqli_query($conn, $query)){
   
   if(mysqli_num_rows($result) > 0){
      echo "<table>";
         echo "<tr>";
            echo "<th> id </th>";
            echo "<th> First name </th>";
            echo "<th> Last name </th>";
            echo "<th> Couses ID </th>";
         echo "</tr>";

         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               // echo "<td>".$row['id']."</td>";
               // echo "<td>".$row['first_name']."</td>";
               // echo "<td>".$row['last_name']."</td>";
               // echo "<td>".$row['couses_name']."</td>";
            ?>

            <div style="background-color:aqua;">
               <td><?php  echo $x; ?></td>
               <p style="background-color:aqua;"><?php  echo $row['first_name']; ?></p>
               <!-- <td><?php  echo $row['last_name'] ?></td>
               <td><?php  echo $row['couses_name'] ?></td> -->
            </div>
            
            
            
            <?php

            echo "</tr>";
         }
      echo "</table>";
      // close result set 
      mysqli_free_result($result); 
   }else{
      echo "No records matching your query were found.";
   }
}else{
   echo "ERROR: Could not able to execute $sql.".mysqli_error($conn);
}


$x = 100;

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <table>
      <!-- <td><?php  echo $x; ?></td>
      <td><?php  echo $row['first_name']; ?></td>
      <td><?php  $row['last_name'] ?></td>
      <td><?php  $row['couses_name'] ?></td> -->
   </table>
   
</body>
</html>