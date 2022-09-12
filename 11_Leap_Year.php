<?php
function IsLeap($Year)
{
    if ($Year % 400 == 0) {
        echo $Year . " Is leap Year<br>";
    } elseif ($Year % 100 == 0) {
        echo $Year . " Is leap Year<br>";
    } elseif ($Year % 4 == 0) {
        echo $Year . " Is leap Year<br>";
    } else {
        echo $Year . " Is Not Leap Year<br>";
    }
}
IsLeap(2021);//function call
isLeap(2020);//function call
?>
