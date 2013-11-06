
						<h2>Welcome to Amira's Microblog!</h2>


						<?php if(!$user): ?>
						Welcome to Amira's App. Please sign in!
						<!--Display the login module-->
						<?php echo $login; ?>
	
						<p>If you are not yet a member, please <a href="/users/signup">sign up!</a>!</p>


						<?php else: ?>
						</h1>Welcome to this amazing blog, <?=$user->first_name ?>
						<?php endif; ?>
