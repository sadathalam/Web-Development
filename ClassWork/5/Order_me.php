<!DOCTYPE html>
<html>
	<body>
		<?php
		echo "<h1>Henry Fav Restaurant </h1>";
		echo "<br>";
		echo "<h2> Order Results </h2>";
		if(isset($_POST['submit'])){
			echo "Order processed at " . date("H:i,") . date("d th, m Y");
			echo "</br>";
			echo "Your order is as follows:";
			echo "</br>";
			 $plate1 = (int) $_POST['Plate1'];
			 $plate2 = (int) $_POST['Plate2'];
			 $plate3 = (int) $_POST['Plate3'];
			 $totalPlates = $plate1 + $plate2 + $plate3;
			 $plate1Price = $plate1 * 2100;
			 $plate2Price = $plate2 * 199;
			 $plate3Price = $plate3 * 899; 
			 $subtotal = $plate1Price + $plate2Price + plate3Price;
			 $tax =  $subtotal * .10; 
			 $totalWithTax =  $subtotal + $tax;
			 $refer = $_POST['find'];
			 echo "Plates ordered: " . $totalPlates;
			 echo "</br>";
			 if($totalPlates == 0){
				 echo "You did not order anything on the previous page!";
				echo "</br>";
			 }
			 echo "Subtotal: " . $subtotal; 
			 echo "Total including tax: " . $totalWithTax;
			echo </br>
			echo "Customer referred by " . $refer; 
			 
			}
		
		?>
	</body>
</html>