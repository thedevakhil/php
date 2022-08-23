<html>
<form method="POST" action="">Enter Number:
<input type="text" name="number">
<input type="submit" value="Calculate" name="ok">
</form>
</html>
<?php
$a=$_POST["number"];
$fact=1;
for($i=1;$i<$a;$i++){
$fact=$fact+$fact*$i;
}
if(isset($_POST['ok']))//check if the button is pressed not must
echo "Factorial=$fact";
?>
