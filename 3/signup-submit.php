<html>
	<head>
		<link rel="stylesheet" href="nerdilove.css" />
	</head>
	<body>
	<?php
	include ("header.php"); 
	?>
	<h3> Thank you! </h3>
	<?php
	echo "Welcome to NerdLuv, ". $_POST["name"]. "!";
	echo "<br>";
	echo "<br>";
	echo "Now"." <a href=\"https://codd.cs.gsu.edu/~salam12/WP/HW/3/matches.php\"> log in to see your matches!</a>";
	$string ="\n". $_POST["name"].",".$_POST["gender"].",".$_POST["age"].",".$_POST["personality"].",".$_POST["os"].",".$_POST["minage"].",".$_POST["maxage"];
	file_put_contents('singles.txt',$string,FILE_APPEND);
	?>
	
	<?php 
	include("footer.php");
	?>
	</body>
</html>