<?php
	 $date = date('Y/m/d H:i:s');
	
	
	$Title=$_POST["t"];
	$Img=$_POST["im"];
	$Info=$_POST["comm"];
	$Rname=$_POST["rn"];
	$server="localhost";
	$username="root";
	$password="";
	$db="sport";
	
	$con=mysqli_connect($server,$username,$password,$db);
	
	if(!$con)
	{
		die("connection error".mysqli_connect_error());
	}
	echo("Connected Sucessfully <br>");
	
	$sql="INSERT INTO sportnews (Title,Img,Info,date,Rname)VALUES('$Title','$Img','$Info','$date','$Rname')";
	
	if(mysqli_query($con,$sql))
	{
		echo "New record entered sucessesfully";
	}
	else
	{
		echo"Error:".sql."<br>".mysqli_error($con);
	}
	mysqli_close($con);
	
	?>