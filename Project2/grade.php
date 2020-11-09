<?php include("header.html"); ?>
<br>
<form action="level2.php" method="post">
<?php
$answer1 = $_POST["q1answers"];
$answer2 = $_POST["q2answers"];
$answer3 = $_POST["q3answers"];
if(($answer1 == "A" )&&($answer2 == "D")&&($answer3 == "B")){
echo "You've answered all questions correctly, go to next level"."<br>". "<input type=\"submit\" value=\"Next Level\" />";
$username = $_COOKIE["username"]; 
$updateUsername = $_COOKIE["username"]; 
$usernameData = file_get_contents("user.txt"); 
$ar = explode("\n", $usernameData);
foreach($ar as $val){
	$another_ar = explode(",",$val);
	if($another_ar[0] == $username){
		$username.=",".$another_ar[1];
		$updateUsername.=","."1"; 
	}
}
$strreplace = str_replace($username,$updateUsername,$usernameData);
file_put_contents("user.txt",$strreplace);
}else{
echo "You've lost, try again go to leaderboard";
echo "<br>"; 
echo "<a href=\"https://codd.cs.gsu.edu/~salam12/Project2/level1.php\"> Try Again </a>";
echo "<br>"; 
echo "<a href=\"https://codd.cs.gsu.edu/~salam12/Project2/leaderboard.php\"> Leader Board </a>";
}
?>
</form>

<?php include("footer.html"); ?>