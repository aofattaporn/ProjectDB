

<?php 

   // session start 
   session_start();

   // check session user have not seesion 
   if (!isset($_SESSION['username'])){
      
      // $_SESSION['msg'] = "You must long in first";
      header('Location: http://localhost:8888/project/login.php');
      echo "session username is null";
   }

   // check session logout 
   if (isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['username']);
      header('Location: http://localhost:8888/project/login.php');
      echo "session username is logout";
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>

   <link rel="stylesheet" href="style.css">
</head>

<body>
   <div">
      <h2> Home Page</h2>
   </div>

   <div class="content">
      <!-- notification message  -->
      <?php if(isset($_SESSION['success'])) : ?> 

         <div class="seccess">
            <h2>
               <?php 
                  echo $_SESSION['succsess']; 
                  unset($_SESSION['success'])
               ?>
            </h2>
         </div>
         
      <?php endif ?>

      <!-- logged in user infomation -->
      <?php if (isset($_SESSION['username'])) : ?>
         <p>Welcome <strong><?php echo $_SESSION['username']; ?> </strong></p>
         <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
      <?php endif ?>

   </div>
   
</body>
</html>