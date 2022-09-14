
<html>
<style>
span{
color:red;}
</style>
<form method="post" action="">
<span><?php echo $nameer;?></sapn>
<input type="text" name="nme"  pattern="[a-z]+">
<input type="submit" value="ok" name="submit">
</form>
<?php
$name=$email=$nameer="";
if(isset($_POST['submit'])){ 
if(!empty($_POST['nme']))
echo "<span class=>Enter Name</span>";
else{
$name= validate($_POST['nme']);
echo $name;}
}

function validate($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}



?>
</html>
