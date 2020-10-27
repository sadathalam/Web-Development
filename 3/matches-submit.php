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
		if(($userGender != $arr[1]) && ($userOS == $arr[4]) ){
			array_push($alike,$val);
		}
		
		
	}
	$alike2 = array();
	foreach($alike as $val){
		$a = explode(",",$val);
		$comparisonPersonality = $a[3]; 
		$str1=substr($comparisonPersonality,0,1);
		$str2=substr($comparisonPersonality,1,2);
		$str3=substr($comparisonPersonality,2,3);
		$str4=substr($comparisonPersonality,3,4);
	if((substr($userPersonality,0,1) == $str1)||(substr($userPersonality,1,2) == $str2)||(substr($userPersonality,2,3) == $str3)||(substr($userPersonality,3,4) == $str4)){
			array_push($alike2,$val);
			
		}
		 
		}
		$alike3 = array();
	foreach($alike2 as $val){
		$a = explode(",",$val);
		$comparisonAge= $a[2];
		if(((int)$comparisonAge>=(int)$userMinAge) && ((int)$comparisonAge<=(int)$userMaxAge)){
		array_push($alike3,$val);
		}	
	}
	$gender = "gender: ";
	$age = "age: "; 
	$type = "type: "; 
	$os = "OS: "; 
		
	foreach($alike3 as $val){
		$a = explode(",",$val);
		
		echo "<div class=\"match\">";
		echo "<img  src=\"user.jpg\" alt=\"userpic\">";
		echo "<ul>";
		echo "<li><p>";
		echo printName($a);
		echo "</p></li>";
		echo "<li> $gender";
		echo printGender($a);
		echo "</li>";
		echo "<li> $age";
		echo printAge($a);
		echo "</li>";
		echo "<li> $type";
		echo printType($a);
		echo "</li>";
		echo "<li> $os";
		echo printOs($a);
		echo "</li>";
		echo "</ul>";
		echo "</div>";
	}
		
		
		
	
	?>
	<?php
function printName($arr){
	echo $arr[0]; 
}
function printGender($arr){
	echo $arr[1];
}
function printAge($arr){
	echo $arr[2];
}
function printType($arr){
	echo $arr[3];
}
function printOs($arr){
	echo $arr[4];
}
?>
	
	<?php 
	include("footer.php");
	?>
	</body>
</html>