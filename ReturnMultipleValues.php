<?php
function AddFive(){
$a=10;
$b=20;
$c=30;
return array($a,$b,$c);
}
list($one,$two,$three)=AddFive();
echo "a=$one <br> b=$two<br>c=$three";
?>
