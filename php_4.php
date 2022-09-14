<?php
$mark=43;
switch ($mark){
case ($mark>60):
echo "First Division";break;
case ($mark<59&&$mark>45) :echo "Second Division";break;
case ($mark<44&&$mark>33) :echo "Third Division";break;
case ($mark<33) :echo "FAIL";break;

}
?>
