<?php include("header.html"); ?>
<br>
<form action="leaderboard.php" method="post">
<?php
$answer1 = $_POST["q1answers"];
$answer2 = $_POST["q2answers"];
$answer3 = $_POST["q3answers"];
if(($answer1 == "B" )&&($answer2 == "D")&&($answer3 == "A")){
echo "Congratulations, you're a genius"."<br>". "<input class='button' type=\"submit\" value=\"Leaderboard\" />";
$username = $_COOKIE["username"];
$updateUsername = $_COOKIE["username"];
$usernameData = file_get_contents("user.txt");
$ar = explode("\n", $usernameData);
foreach($ar as $val){
	$another_ar = explode(",",$val);
	if($another_ar[0] == $username){
		$username.=",".$another_ar[1];
		$updateUsername.=","."6";
	}
}
$strreplace = str_replace($username,$updateUsername,$usernameData);
file_put_contents("user.txt",$strreplace);
}else{
echo "You've lost. Try again?";
echo "<br>";
echo "<a class='button' href=\"level1.php\"> Try Again </a>";
echo "<br>Go to leaderboard";
echo "<br>";
echo "<a class='button' href=\"leaderboard.php\"> Leader Board </a>";
}
?>
</form>

<?php include("footer.html"); ?>
