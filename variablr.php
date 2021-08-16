<?php 
/* 

gettype()
settype()

*/

$name = "Attaporn"; 
$age = 15; 
$num1 = 100; 
$num2 = "150";
$empty = null;

define("pi", 3.14);

echo $name."<br>"; 
echo $age."<br>";
echo ($age + 20)."<br>";
echo "ชื่อว่า : ".$name."<br>";

echo "<hr>";

echo gettype($name)."<br>";
echo gettype($age)."<br>";

echo "<hr>";

echo "<h2> Get/Set type </h2>"; 
echo "ก่อนเปลี่ยน : ".gettype($age)."<br>";
settype($age, "double");
echo "หลังเปลี่ยน : ",gettype($age)."<br>";

echo "<hr>";
echo "<h2> Type Casting </h2>"; 
$total = $num1 + $num2;
echo "case : ".$total."<br>";
$total = (double)$total;
echo gettype($total);

echo "<hr>";

echo "<h2> Constant variable </h2>"; 
// defind can be not declare varaible format 
echo "PI test : ".pi."<br>";
$area = pi *6*6; 
echo "circle area : ".$area."<br>";
define("URL", "www.google.com"); 
echo URL;


?>