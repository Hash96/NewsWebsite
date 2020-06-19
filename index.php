<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ten Sports Network</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrapper">
	<div class="top-bar clearfix">
	<div class="top-bar-links">
		<ul>
			<li><a href="#">My Account</a></li>
			<li><a href="#">Login</a></li> 
			<li><a href="#">Register</a></li>
			<li><a href="#">Latest Sport News</a></li>
		</ul>
	</div>
	<div class="site-search">
		<form method="get" action="index.html">
			<input type="search" name="search box">
			<button type="submit"></button>
		</form>
	</div>
</div><!--top bar-->
</div><!--wrapper-->
<header class="clearfix">
	<div class="logo">
		<h1>Ten Sports Network</h1>
		<p>Leader in Sport News Distribution</p>
		<div class="logo1">
				
		</div>
	</div>
	<div class="socialmedia">
		<ul>
		<li><a href="#"><i style="font-size:24px" class="fa fa-fw">&#xf0e1;</i></a></li>
		<li><a href="#"><i style="font-size:24px" class="fa fa-fw">&#xf099;</i></a></li>
		<li><a href="#"><i style="font-size:24px" class="fa fa-fw">&#xf0d2;</i></a></li>
		<li><a href="#"><i style="font-size:24px" class="fa fa-fw">&#xf0d5;</i></a></li>
		<li><a href="#"><i style="font-size:24px" class="fa fa-fw">&#xf262;</i></a></li>	
	</ul>
	</div>
</header>
<nav>
<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#">About Us</a></li>
	<li><a href="#">Services</a></li>
	<li><a href="#">Contact Us</a></li>
</ul>
</nav>
<div class="intro clearfix">
	<div class="introimage">	
	<div class="introtext">
		<h1></h1>		
	</div>
	 </div>	
	 <div class="homecontent clearfix">
	 	<div class="home-col">
	 		<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "sport";

				$conn = mysqli_connect($servername,$username,$password,$dbname);
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT Ino,Title,Img,Info,date,RName FROM sportnews";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) 
				{									
				    while($row = mysqli_fetch_assoc($result)) 
					{
						echo "<table border=0><font face=calibri><tr><td><img src=".$row['Img']," width='400' height='300' /></td>"."<td>&nbsp&nbsp</td>"."<td><h1><I>".$row["Title"]."</h1></I><br>".$row["Info"]."</td></tr></font>";
				    }
				    echo "</table>";				        
				    }
				else {
				    echo "0 results";
				}
				mysqli_close($conn);
				?>	 		
	 	</div>
	 		<div class="home-col">	 		
	 	</div>
	 			<div class="home-col">	 			 		
		</div>
			<div class="home-col">	 		
	 	</div>
</body>
</html>