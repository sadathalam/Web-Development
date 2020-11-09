<?php include("header.html"); ?>

<div>
    <form action="signup-submit.php" method="post">
    <fieldset>
        <legend>New User Signup:</legend>

        <strong class="column">Username:</strong>
        <input required pattern="\S+"/ type="text" name="name" size="16" maxlength="16" pattern="([A-z�-�\s]){2,}">
	<br><br>

        <input type="submit" value="Sign Up">

    </fieldset>
    </form>
</div>


<?php include("footer.html"); ?>
