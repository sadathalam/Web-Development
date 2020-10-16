<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ClassWork 4</title>
    </head>
    <body>
        <p>
			<h1> Exercise 1 </h1> 
            <?php

            function hello_world(){
				echo "Hello world!";
			}
			hello_world(); 
			

            ?>
			<h1> Exercise 2 </h1> 
			<?php
			for ($i = 1; $i <=5; $i++){
				for($x = 0; $x < $i; $x++){
					echo "*";
				}
				echo "</br>"; 
			}		
			?>
			<h1> Exercise 3 </h1> 
			<?php
			function triangle($var){
				for($i = 1; $i <= $var; $i++){
					for($x = 0; $x < $i; $x++){
						echo "*";
					}
					echo "</br>"; 
				}
			}
			echo "I entered 10 for the paramater of function tirangle";
			echo "</br>"; 
			triangle(10); 
			?>
			<h1> Exercise 4 </h1> 
			<?php 
			function word_count($string){

			while (substr_count($string, "  ") > 0) // counts number of times the substring occurs in a $string
				$string = str_replace("  ", " ", $string); // replaces single space with double spaces

			return substr_count($string, " ") + 1; // gives the count of all the string of " " and adding +1 for last word
			}

			$stringVal = "Hello, how are you?";
			echo "String i used was \"Hello, how are you?\"";
			echo "</br>";
			echo word_count($stringVal);
			?>
			<h1> Exercise 5 </h1> 
			<?php 
			function countWords($searchWord,$stringVal){
			preg_match_all("/$searchWord/i", $stringVal, $match);
			
			return count($match, COUNT_RECURSIVE) -1;    
			}

			$stringVal = 'I love icecream. Icecream is the best.';
			$searchWord = 'icecream';
			echo "sentence is \"I love icecream. Icecream is the best.\" word passed is icecream "; 
			echo "</br>"; 
			echo countWords($searchWord,$stringVal);
			?>
			<h1> Exercise 6 </h1> 
			<?php 
			function remove_all($string,$char){
				$blank = ""; 
				for($i = 0; $i < strlen($string); $i++){
					$a = substr($string,$i,$i+1); 
					if($a == $char){
					str_replace($char,$blank,$string); 
					}
				}
			}
			$s = "Summer is here!";
			$b = 'e'; 
			remove_all($s,$b); 
			echo "$s";  
			
			?>
			
        </p>
    </body>
</html>