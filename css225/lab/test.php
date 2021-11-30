<?php 

// 3 table 
// Create Table 

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

// getValue

$query = "SELECT student.id , student.first_name, student.last_name, register.couses_name FROM student NATURAL JOIN register";


?>