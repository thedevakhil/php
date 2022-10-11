<form action="" method="post">
    Enter  Name:<input type="text" name="NAME"/>
    Enter Mobile number:<input type="tel" name="MOB"/>
    <input type="Submit" value="save" name="Submit"/>
</form>
    <?php
	//connection Starts
	$conn=mysqli_connect("localhost","root","");//*************please change the username and password according to Your Settings***************
	if(!$conn)
	echo "Connection Error:".mysqli_error_connect();
	$sql="create database if not exists  DB_1";//here NOT EXISTS is used. it will create a dabase only if it not exist
	if(!mysqli_query($conn,$sql))//mysqli_query function is used to run sql query
	echo "Error creating database";
	else
	mysqli_select_db($conn,"DB_1");//mysqli_select_db() is used forselect the database that we created
	//connection end
	//Start_Table creation
	$sql1="create table if not exists student (id int(5) auto_increment primary key,Name varchar(20),Mobile_No int(10))";
	if(!mysqli_query($conn,$sql1))//mysqli_query function is used to run sql query
	echo "Error creating Table"; 
	//End_Table_creation
	//Start_Inserting VALUES from FORM

	if(isset($_POST['Submit']))//checks the Submit button is pressed. if we not check the condition it will thow error because initialy we have no values in name, mobile number field
	{
	
		$nme=$_POST['NAME'];//saving the name from form to variable nme;
		$mob=$_POST['MOB'];//saving the Mobile number from form to variable mob;
		
		$sql2="insert into student(Name,Mobile_No) values('$nme','$mob')";//sql query to insert data
		if(!mysqli_query($conn,$sql2))
		echo "data insertion fail";
		else
		echo "<br>Data inserted";
	}
	mysqli_close($conn);//closing the connection
	?>
