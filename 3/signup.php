<html>
	<head>
		<link rel="stylesheet" href="nerdilove.css" />
	</head>
	<body>
	<?php
	include ("header.php"); 
	?>
	<form action="https://codd.cs.gsu.edu/~salam12/WP/HW/3/signup-submit.php" 
method="post">
	
	<fieldset>
	<input type="button" value="New User Signup:">
	<ul>
	<li>Name: <input type="text" maxlength="16" name="name"></li><br>
	<li>Gender: <input type="radio" name="gender" id="male" value="Male"> <label for"male">Male</label> <input type="radio" checked="checked" id="female" name="gender" value="Female"> <label for="female">Female</label></li><br>
	<li>Age: <input type="text" name="age" size="6" maxlength="2"></li><br>
	<li>Personality type: <input type="text" name="personality" size="6" maxlength="4"><a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">(Dont know your type?)</a></li> <br>
	<li>Favorite OS: <select name="os"> <option value="Windows" checked="checked">Windows</option> <option value="Mac OS X">Mac OS X</option> <option value="Linux">Linux</option></select></li><br>
	<li>Seeking age: <input type="text" name="minage" maxlength="2" size="6" placeholder="min"> to <input type="text" name="maxage" maxlength="2" size="6" placeholder="max"></li><br>
	<li> <input type="submit" value="Sign Up"> </li>
	</ul>
	</fieldset>
	
	</form>
	
	<?php 
	include("footer.php");
	?>
	</body>
</html>