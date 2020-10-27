<html>
	<head>
		<link rel="stylesheet" href="nerdilove.css" />
	</head>
	<body>
	<?php
	include ("header.php"); 
	?>
	 <?php
	 $userGender = "";
	 $userMaxAge = "";
	 $userMinAge = "";
	 $userOS = ""; 
	 $userPersonality = ""; 
	 $string = $_GET["name"];
	 $text = "Matches for "; 
	 $message = $text . $string;
	 echo "<h3> $message </h3>";
	$string = file_get_contents("singles.txt");
	$string_ar = explode("\n",$string);
	$alike = array();
	foreach($string_ar as $val){
		$another_ar = explode(",",$val);
		if($another_ar[0] == $_GET["name"]){
			$userGender=$another_ar[1];
			$userMaxAge = $another_ar[6];
			$userMinAge = $another_ar[5];
			$userOS = $another_ar[4]; 
			$userPersonality = $another_ar[3];
			break;
		}
	}
	
	foreach($string_ar as $val){
		$arr = explode(",",$val);
		if($userGender != $arr[1]){
			array_push($alike,$val);
		}
		if((int)$arr[2] > (int)$userMaxAge){
			unset($alike[$val]);
		}
	}
	
		print_r($alike);
		
		
	
	?>
	
	<?php 
	include("footer.php");
	?>
	</body>
</html>