<div id="main_page">
						
	<?php if(!$user): ?>
		<h1>Welcome to Baking Bites!</h1>
		Baking Bites is the perfect place to share your favorite recipes, what you're currently baking, general bake-savvy tips, and to 
		discover the culprit behind that sinfully heavenly smell.
		<!--Display the login module-->
		<?php echo $login; ?>

		<p>If you are not yet a member, please <a href="/users/signup">sign up</a>!</p>


	<?php else: ?>
		<h1>Welcome Back to Baking Bites, <?=$user->first_name ?>!</h1>
		<p>Connect with fellow bakers, check out what's baking by engorging on your friends' posts, or bake up your own post!
		This site brought to you by Amira Anuar.</p>
		<img src="http://1.bp.blogspot.com/-8w4STtQghvo/Umk-uf1ChiI/AAAAAAAABcw/8-Fh_fjnIVE/s1600/DSC_1017.JPG" height="222" width="335" alt="cake">
	
	<?php endif; ?>

	<br><br>
	<p>The plus two features on my site are editing your profile and deleting a post.</p>
	<br><br>

</div>