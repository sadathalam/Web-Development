
<?php include("header.html"); ?>
<h1> Leaderboard </h1>
<?php
$fileContent = file_get_contents("user.txt");

$leaderBoard = array();
$ar = explode("\n",$fileContent);
$level = 6;
for($x = 0; $x <= 6; $x++){
for($i = 0; $i < sizeof($ar); $i++){
	$another_ar = explode(",",$ar[$i]);
	if($another_ar[1] == $level){
		array_push($leaderBoard,$ar[$i]);
	}
}
$level = $level-1;

}
 echo '<table class="center">
 	<tr>
    <th>Name</th>
    <th>Level</th>
	</tr>';
for($i=0; $i < sizeof($leaderBoard)-1; $i++){
	$a = explode(",",$leaderBoard[$i]);
	echo "<tr>
			<td>". $a[0]. "</td>
			<td>". $a[1]."</td>
		</tr>";
}
echo "
</table>";
?>

<br><br><br><br>
<a class="button" href="home.php">Home</a>
<?php include("footer.html"); ?>
