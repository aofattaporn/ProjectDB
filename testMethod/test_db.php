<?php 
   // get seesion 
   session_start(); 
   include('sever.php'); 

   // get error to array
   $errors = array(); 

   if(isset($_GET)){
      $user_check_query = "SELECT * FROM user.user ";
      $query = mysqli_query($conn, $user_check_query); 
      $result = mysqli_fetch_assoc($query);

      


   } 



?>