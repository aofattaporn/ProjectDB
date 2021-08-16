<?php 

_print(add(10, 20)."<br><hr>");

_print("number: ".getBonus(500));






function add($num1, $num2){
   return $num1 + $num2; 
}
function _print($num1){
   echo $num1;
}


function getBonus($bonus){
   return $bonus;
}

?>