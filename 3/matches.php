<html>
	<head>
		<link rel="stylesheet" href="nerdilove.css" />
	</head>
	<body>
	<?php
	include ("header.php"); 
	?>
	<form action="https://codd.cs.gsu.edu/~salam12/WP/HW/3/matches-submit.php" 
	method="get">
	<fieldset>
	<input type="button" value="Returning User:">
	<ul>
	<li> <label for="name"> Name: </label> 
		<input type="text" maxlength="16" name="name">
		</li><br>
	<li> <input type="submit" value="View My Matches"> </li>
	</ul>
	</fieldset>
	</form>
	<?php 
	include("footer.php");
	?>
	</body>
</html>