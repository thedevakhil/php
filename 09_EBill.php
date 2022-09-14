<?php
$unit=251;
if($unit<=50)
$amt=$unit*3.50;
else if ($unit<=150)
$amt=(50*3.50)+(($unit-50)*4);
else if ($unit<=250)
$amt=(50*3.50)+(100*4)+(($unit-150)*5.20);
else if ($unit>250)
$amt=(50*3.50)+(100*4)+(100*5.20)+(($unit-250)*6.50);
echo "Bill Amount Is : ".$amt;
?>
