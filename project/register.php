

<?php include("sever.php");?>

<!DOCTYPE html>
<html lang="en">

<!-- header -->
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register page</title>

   <link rel="stylesheet" href="css/login.css">
</head>

<!-- body -->
<body>

   <!-- header -->
   <header>
      <h2>Register</h2>
   </header>

   <!-- form -->
   <form action="register_db.php" method="post">

      <!-- input-Username -->
      <div class="input-group">
         <label for="username">Username</label>
         <input type="text" name="username">
      </div>

      <!-- input-Eamil -->
      <div class="input-group">
         <label for="email">Email </label>
         <input type="email" name="email">
      </div>
 
      <!-- input-Passwors-1 -->
      <div class="input-group">
         <label for="password_1">Password</label>
         <input type="password" name="password_1">
      </div>

      <!-- input-Passwors-2 -->
      <div class="input-group">
         <label for="password_2">Confirm Password</label>
         <input type="password" name="password_2">
      </div>

      <!-- bottom -->
      <div class="input-group">
         <button type="submit" name="reg_user" class="btn"> Regis</button>
      </div>

      <!-- Loggin bottom -->
      <p>Already a member? <a href="login.php"> Sign in</a></p>

   </form>
   
</body>
</html>