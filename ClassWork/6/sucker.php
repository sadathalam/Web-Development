
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
	
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo $_POST["name"]; ?></dd>

			<dt>Section</dt>
			<dd><?php echo $_POST["section"]; ?></dd>

			<dt>Credit Card</dt>
			<dd><?php 
				echo $_POST["card"] . " (" . $_POST["card2"] . ")"; 
				
				?>
				
			</dd>
		</dl>
		<?php 
		$data_file = fopen("suckers.html","w");
		$text_to_write = $_POST["name"]. ";" . $_POST["section"] . ";" . $_POST["card"] . ";" . $_POST["card2"];
		
		fwrite($data_file, $text_to_write);
		fclose($data_file);
		?>
		<p> Here are all the suckers who have submitted here: </p> <br>
		 
		
	</body>
</html> 