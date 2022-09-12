<?php
function fact($n){
if($n==1)
return(1);
else
return($n*fact($n-1));
 }
echo "FACTORIAL=".fact(5);//calling funcation fact with number 5;
?>
