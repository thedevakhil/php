<?php
$cars=array(array("Volvo",2018),array("BMW",2020),array("Audi",2023));
//Automatic Method
for($i=0;$i<count($cars);$i++){
for($j=0;$j<count($cars);$j++){
echo $cars[$i][$j]."<br>";
}}
echo "Manual Method<br>";
echo $cars[0][0]."<br>";
echo $cars[0][1]."<br>";
echo $cars[1][0]."<br>";
echo $cars[1][1]."<br>";
echo $cars[2][0]."<br>";
echo $cars[2][1]."<br>";
?>

