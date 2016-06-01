<form method="POST">
	<input type="hidden" name="redirect_url" value="<?php p($_['redirect_url']); ?>">
	<input type="text" name="challenge" value="passme" required="required">
	<input type="submit" class="button" value="Verify">
</form>
