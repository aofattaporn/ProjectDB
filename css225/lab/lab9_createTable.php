<?php 

$servername = "localhost"; 
$username = "root"; 
$password = "password"; 
$dbname = "demo"; 

// connecting database 
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection 
if(!$conn){
   die("ERROR: Could not connect.". mysqli_connect_error());
}else{
   // that define protacal 
   echo "Connect Successfully. Host Info : " .mysqli_get_host_info($conn)."<br>";
}

//query sql to create table 
$sql_create_student = "create table student(

   id int not null primary key auto_increment, 
   first_name varchar(30) not null, 
   last_name varchar(30) not null, 
   email varchar(70) not null unique

)"; 

$sql_create_couse = "create table couses(

   couses_name varchar(30) not null primary key,
   advisor varchar(30) not null

)"; 

$sql_create_register .= "create table register(

   id int not null, 
   couses_name varchar(30) not null,

   primary key (id, couses_name),
   foreign key (id) references student(id),
   foreign key (couses_name) references couses(couses_name)
   
)"; 

// create table student 
if(mysqli_query($conn, $sql_create_student)){
   echo "Create table student successfully"; 
}else{
   echo "Error: Could not able to excute $sql_create_student" .mysqli_error($conn);
}

// crreate table couse 
if(mysqli_query($conn, $sql_create_couse)){
   echo "Create table coause successfully"; 
}else{
   echo "Error: Could not able to excute $sql_create_couse" .mysqli_error($conn);
}

// create table register
if(mysqli_query($conn, $sql_create_register)){
   echo "Create table register successfully"; 
}else{
   echo "Error: Could not able to excute $sql_create_register" .mysqli_error($conn);
}

// closing database 
mysqli_close($conn)

?>