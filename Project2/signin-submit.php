
<?php include("header.html"); ?>
<h1> Welcome to the game </h1>
<form action="level1.php" method="post"
<div>
<p> If you're ready to start click Start </p>
<input class="button" type="submit" value="Start" />
</form>
<?php

$username = $_POST["name"];
setcookie("username", "$username");

?>


<?php include("footer.html"); ?>
