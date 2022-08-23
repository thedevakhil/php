<?php
 class Vechile{
	public $color;
	function Display(){
		$this->color="blue";
		echo "The color is $this->color";
	}
}

class Car extends Vechile{
	public $numberofwheel;
	function Display1(){
		$this->numberofwheel="4";
		echo "<br>The Number of Wheel is $this->numberofwheel";
	}
}

$a=new Car();
$a->Display();
$a->Display1();
echo "<br>It is a $a->color Color $a->numberofwheel wheel Car";
  
?>
