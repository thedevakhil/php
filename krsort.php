<?php
$age=array("Akhil"=>20,"Ajith"=>25,"Manu"=>30);
krsort($age);
foreach($age as $key=>$value){
echo $key.":".$value."<br>";
}
?>
