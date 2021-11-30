<?php 
function x(){
   echo "120";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <!-- defind inner style form  -->
   <style>
      *{
         box-sizing: border-box;
         padding: 0px;
         margin: 0px;
      }

      .input-form{
         background-color: paleturquoise;
         border-radius: 10px;
         margin: 20px;
         padding: 50px;
         height: 200px;
      }



   </style>

</head>
<body>
   <!-- input student form  -->
   <div class="input-form">

      <h1>Input strudent form </h1>

   
      <form action="lab9_insertValue_db.php" method="POST">

         <label for="fname">First name : </label>
         <input type="text" id="fname" name="fname"><br>

         <label for="lname">Last name : </label>
         <input type="text" id="lname" name="lname"><br>

         <Email for="email">Email     : </label>
         <input type="email" id="email" name="email"><br>

         <input type="submit" name="btnStudent" > 

      </form>
   
   </div>

   <!-- input couse form  -->
   <div class="input-form">

      <h1>Input Couse form </h1>

      <form action="lab9_insertValue_db.php" method="POST">

      <label for="couses">Couses name : </label>
      <input type="text" id="couses" name="couses"><br>

      <label for="advisor">Advisor name : </label>
      <input type="text" id="advisor" name="advisor"><br>

      <input type="submit" name="btnCouse" id="btnCouse" > 

      </form>

   </div>

   <!-- input register from form  -->
   <div class="input-form">

      <h1>Input Register form </h1>

      <form action="lab9_insertValue_db.php" method="POST">

         <label for="id">Id : </label>
         <input type="number" id="id" name="id"><br>

         <label for="couses_name">Couses name : </label>
         <input type="text" id="couses_name" name="couses_name"><br>

         <input type="submit" name="btnReigst" id="btnReigst" > 

      </form>

   </div>

   
</body>
</html>