

<?php 
   include("sever.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register page</title>

   <link rel="stylesheet"" href="css/login.css" >
</head>

<body>
   <header>
   <h2 class = "header ">Register</h2>
   </header>


   <form action="register_db.php" class="content">

      <div class="input-group">
         <label for="username">Username</label>
         <input type="text" name="username">
      </div>

      <div class="input-group">
         <label for="password">Username</label>
         <input type="password" name="password">
      </div>

      <div class="input-group">
         <button type="submit" name="login_user" class="btn">Login</button>
      </div>
      <p> Not yet a member? <a href="register.php"> Sign up </a></p>

   </form>


   
</body>
</html>