<?php 

$number = array(10, 20, 30, 40, 10); 
print_r($number);
print("<hr>");


// ?Associative 
$pets = array("cat" => 1200, "dog" => 10000,  "dog" => 10000);
print_r($pets);
print_r("<br>"."sizeof array : ".count($pets));
print("<br>".array_count_values($pets));
print("<hr>");

// ?rang_Array
$num2 = range(21, 40, 2);
print_r($num2);
print_r("<br>"."sizeof array : ".count($num2));
print("<hr>");
for($index = 0; $index < count($num2); $index++ ){
   print("index ".$index. " = " .$num2[$index]."<br>");
}

// ?Array[]
$number = [100, 20, 30, 40]; 
print_r($number);
print("<hr>");


?>