
						<h1>Welcome to Baking Bites!</h1>


						<?php if(!$user): ?>
						Baking Bites is the perfect place to share your favorite recipes, what you're currently baking, general bake-savvy tips, and to discover the culprit behind that sinfully heavenly smell.
						<!--Display the login module-->
						<?php echo $login; ?>
	
						<p>If you are not yet a member, please <a href="/users/signup">sign up!</a>!</p>


						<?php else: ?>
						<h3>Welcome back to Baking Bites, <?=$user->first_name ?>!</h3>
						<p>Check out what's baking, or let your friends know what that amazing smell from your oven is!</p>
						<?php endif; ?>
