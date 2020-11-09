<?php include("header.html"); ?>


<div>
    <form action="signin-submit.php" method="post">
    <fieldset>
        <legend>Sign in:</legend>

        <strong class="column">Username:</strong>
        <input required pattern="\S+"/ type="text" name="name" size="16" maxlength="16" pattern="([A-zÀ-ž\s]){2,}">
	<br><br>

        <input type="submit" value="Sign In">

    </fieldset>
    </form>
</div>


<?php include("footer.html"); ?>
