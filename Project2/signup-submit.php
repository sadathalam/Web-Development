
<?php include("header.html"); ?>
<h1> Welcome to the game </h1>
<form action="signin.php" method="post"
<div>
<p> If you're ready to start, please sign in </p>
<input class="button" type="submit" value="Sign in" />
</form>

<?php
$string = $_POST["name"].","."0"."\n";
file_put_contents("user.txt",$string,FILE_APPEND);
?>
<?php include("footer.html"); ?>
