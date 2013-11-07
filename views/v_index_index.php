<div id="main_page">
						
	<?php if(!$user): ?>
		<h1>Welcome to Baking Bites!</h1>
		Baking Bites is the perfect place to share your favorite recipes, what you're currently baking, general bake-savvy tips, and to 
		discover the culprit behind that sinfully heavenly smell.
		<!--Display the login module-->
		<?php echo $login; ?>

		<p>If you are not yet a member, please <a href="/users/signup">sign up</a>!</p>


	<?php else: ?>
		<h1>Welcome back to Baking Bites, <?=$user->first_name ?>!</h1>
		<p>Check out what's baking, or let your friends know what that amazing smell from your oven is!</p>
	
	<?php endif; ?>

	<p>The plus two features on my site are editing your profile and deleting a post.</p>
	<br><br>

</div>