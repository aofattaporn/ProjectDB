<?php 
   // get seesion 
   session_start(); 
   include('sever.php'); 

   // get error to array
   $errors = array(); 

   if(isset($_POST['reg_user'])) {

      // set variable 
      $username = mysqli_real_escape_string($conn, $_POST['username']); 
      $email = mysqli_real_escape_string($conn, $_POST['email']); 
      $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']); 
      $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']); 

      // validating case emtpy 
      if(empty($username)){
         array_push($errors, "Username is required"); 
      }
      if(empty($email)){
         array_push($errors, "Email is required"); 
      }
      if(empty($password_1)){
         array_push($errors, "Password is required"); 
      }
      if($password_1 != $password_2) {
         array_push($errors, "The two passwords don't match");
      }


      $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
      $query = mysqli_query($conn, $user_check_query); 
      $result = mysqli_fetch_assoc($query);

      // check with my sql 
      if($result){
         if($result['username'] === $username) {
            array_push($errors, "Username already exists");
         }
         if($result['email'] === $username) {
            array_push($errors, "Email already exists");
         }
      }


      if(count($errors) == 0 ){
            $password = md5($password_1);

            $query = "INSERT INTO user.user (email,  password , username) VALUE ('$email', '$password', '$username')";

         
            mysqli_query($conn, $query);
            
            $_SESSION['username'] = $username; 
            $_SESSION['success'] = "You are now loggend in ";
            header('Location: http://localhost:8888/project/index.php');

      }
      else {
            print_r($errors); 
      }
   }



?>