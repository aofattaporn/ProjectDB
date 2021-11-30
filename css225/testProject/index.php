<?php 
   require_once "sever.php";
   $query = "SELECT * from book";

   $perpage = 6;
   if(isset($_GET['page'])){
      $page = $_GET['page'];
   }else{
      $page = 1;
   }
   $start = ($page - 1) * $perpage;
   // $query = "select * from book";
   $query = "select * from book Limit {$start}, {$perpage}";


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <link rel="stylesheet" href="stylesheet.css"> 
</head>
<body>

   <!-- nav-bar -->
   <div class= "header">

      <!-- nav-bar -->
      <nav > 
         <ul class="menu">
            <h1 class="logo"><a class="homepage"href="#">MyLiberry</a></h1>
         </ul>
      </nav>

      <!-- border-nav  -->
      <div class="border-nav">
      </div>

      <!-- image-header -->
      <div class="image-fram">
      </div>

   </div>
   <div class="border-nav"></div>

   <!-- content  -->
   <div class="content">

      <!-- fillter -->
      <div class="content-filter">
         <h1 class="filter-title">FILTER</h1>
      

         <!-- search-from  -->
         <form action="#">
            <h2>SEARCH</h2><br>
            <div class="filter-title-ribin"></div>

            <div class="serch-flex">

               <!-- #1 -->
               <div class="serch-flex-input" style="width: 100%; padding: 0px 20px;">
                  <h4>keyword</h4>
                  <input type="text" id="fname" name="fname" value="John" style="width: 100%;"><br>
               </div>
               
               <!-- #2 -->
               <div class="custom-select" style="width:200px;">
                  <h4>keyword</h4>
                  <select>
                     <option value="0">Select car:</option>
                     <option value="1">Audi</option>
                     <option value="2">BMW</option>
                     <option value="3">Citroen</option>
                     <option value="4">Ford</option>
                     <option value="5">Honda</option>
                     <option value="6">Jaguar</option>
                     <option value="7">Land Rover</option>
                     <option value="8">Mercedes</option>
                     <option value="9">Mini</option>
                     <option value="10">Nissan</option>
                     <option value="11">Toyota</option>
                     <option value="12">Volvo</option>
                  </select>
               </div>

               <!-- #3 -->
               <div class="button-felx">
                  <div></div><br>
                  <button class="filter-button" type="submit"> <h4>ค้นหา</h4></button>
               </div>
            </div>

            <div class="filter-space"></div>
         </form>
         

         <!-- orderBy -->
         <h2>ORDER</h2><br>
         <div class="filter-title-ribin"></div>
         <h4>Order By</h4>




      </div>

      <div class = "content-nav">
      <!-- content-book  -->
         <div class="content-book">

         <!-- php-loop-for-element-in-database -->
         <?php
               if($result = mysqli_query($conn, $query)){
                  if(mysqli_num_rows($result) > 0){
                     while($row = mysqli_fetch_array($result)){
                  
         ?> 
         <!-- element -->
         <div class="content-book-frame">
            <div class="content-book-image-fram"">
               <a href="#"><image class="image " src= "<?php echo $row['image'] ?>" alt="image"  height="230" style="padding: 8px 15px;"></image> </a>
            </div>

            <div class="book-title">
               <p class="title"><a href="#"> <?php echo $row['title'] ?> </a></p>
            </div>
         </div>

         <?php 
                  }
               }else{
                  echo "No records matching your query were found.";
               }
            }else{
               echo "ERROR: Could not able to execute $sql.".mysqli_error($conn);
            }
         ?>

         
         </div>
         <!-- navbar-select-page  -->
         <?php 
            $sql2 = "select * from book";
            $query2 = mysqli_query($conn, $sql2);
            $total_record = mysqli_num_rows($query2);
            $total_page = ceil($total_record / $perpage);
         
         ?>
         <nav class="nav-pagination">
            <ul class = pagination>
               <li>
                  <a href="index.php?page=1" aria-label="Previous">
                     <span aria-hidden="true">&laquo;</span>
                  </a>
               </li>

               <?php for($i = 1; $i <= $total_page; $i++) { ?> 
               <li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
               <?php } ?>

               <li>
                  <a href="index.php?page=<?php echo $total_page; ?>" aria-label="Next">
                     <span aria-hidden="true">&raquo;</span>
                  </a>
               </li>

            </ul>
         </nav>

      </div>

   </div>



 

   <!-- footer  -->
   <footer>
   </footer>


   
</body>
</html>