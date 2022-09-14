<html><center>
<h1 style="color:red;"> DETAILS OF STUDENT</h1>
</center
</html>
<?php
if(isset($_POST['submit'])){
echo "FIRST NAME :  ".$_POST['fn'];
echo "<BR>LAST NAME :  ".$_POST['ln'];
echo "<BR>NICK NAME :  ".$_POST['nn'];
echo "<BR>EMAIL :  ".$_POST['email'];
echo "<BR>DATE OF BIRTH :  ".$_POST['dob'];
echo "<BR>GENDER :  ".$_POST['gen'];
echo "<BR>MOBILE :  ".$_POST['mob'];
echo "<BR>ADDRESS :  ".$_POST['adrs'];

}
?>

