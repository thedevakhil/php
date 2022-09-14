<html>
<body>
<form method="post" action="">
USER NAME: <input type="text" name="nme"><br>
PLACE : <input type="text" name="pls"><br>
<input type="submit" name="submit" value="show"><br>
</form>
</html>
<?php if (isset($_POST["submit"])) {
    echo $_POST["nme"] .
        " from " .
        $_POST["pls"] .
        " has filled the form on " .
        date("M,d,Y h:i:s A") .
        " " .
        date("l");
}
?>
