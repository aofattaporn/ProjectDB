<?php 
/*
isset  : check variable 
unset  : ยกเลิกคืนค่าให้หน่วยความจำ 
emtpy  : ตรวจสอบตัวแปรมีค่าว่างหรือไม่ หรือเป็น 0 หรือไม่ 
is_null : ตรวจสอบว่า null หรือปล่าว 
print_r() : แสดงค่าตัวแปร arrays 
var_dump(): แสดงรายละเอียดตัวแปร 

*/ 

$totol1 = null; 
$totol2 = ""; 
$totol3 = 100; 
$totol4 = "Attaporn"; 

print "<h2>isset</h2>";
echo "ค่าตัวแปร. totol1 :".isset($totol1)."<br>"; 
echo "ค่าตัวแปร totol2 :".isset($totol2)."<br>"; 
echo "ค่าตัวแปร totol3 :".isset($totol3)."<br>"; 
echo "ค่าตัวแปร totol4 :".isset($totol4)."<br>"; 
echo "<hr>";


unset($totol1);
unset($totol2);
unset($totol3);
unset($totol4);
print "<h2>unset</h2>";
echo "ค่าตัวแปร. totol1 :".isset($totol1)."<br>"; 
echo "ค่าตัวแปร totol2 :".isset($totol2)."<br>"; 
echo "ค่าตัวแปร totol3 :".isset($totol3)."<br>"; 
echo "ค่าตัวแปร totol4 :".isset($totol4)."<br>"; 
echo "<hr>";

$totol1 = null; 
$totol2 = ""; 
$totol3 = 100; 
$totol4 = "Attaporn"; 
print "<h2>empty</h2>";
echo "ค่าตัวแปร. totol1 :".empty($totol1)."<br>"; 
echo "ค่าตัวแปร totol2 :".empty($totol2)."<br>"; 
echo "ค่าตัวแปร totol3 :".empty($totol3)."<br>"; 
echo "ค่าตัวแปร totol4 :".empty($totol4)."<br>"; 
echo "<hr>";



?>