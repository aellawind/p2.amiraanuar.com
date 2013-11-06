<p>Welcome to Amira's Microblog!</p>


<?php if(!$user): ?>
	Welcome to Amira's App. Please sign in!
	<!--Display the login module-->
	<?php echo $login; ?>
	


	<p>If you are not yet a member, please sign up!</p>

	<a href="/users/signup">Sign Up!</a>

<?php else: ?>
	</h1>Welcome to this amazing blog, <?=$user->first_name ?>
<?php endif; ?>



<p>
	This message is being triggered via the c_index.php controller, within the index() method.
</p>

<p>
	<strong>Since everything is in working order, you should now delete <?php echo APP_PATH?>diagnostics.php</strong>
</p>


