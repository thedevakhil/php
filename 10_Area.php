<?php
function CircleArea($r)
{
    return 3.14 * ($r * $r);
}
function TriangleArea($base, $height)
{
    return 0.5 * $base * $height;
}

function RectangleArea($l, $b)
{
    return $l * $b;
}

//Function Calls
echo "Area of circle with circumference 5 cm = " . CircleArea(5);
echo "<br>Area of Triangle With base 3cm  and Height 4cm =" .
    TriangleArea(3, 4);
echo "<br>Area of rectangle with height 4 cm and bredth 5cm " .
    RectangleArea(4, 5);
?>
