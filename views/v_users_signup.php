<h2>Sign Up</h2>

<form method='POST' action ='/users/p_signup'>


	First Name<font color="red">*</font><br>
	<input type='text' name='first_name'><br><br>
	Last Name<font color="red">*</font><br>
	<input type='text' name='last_name'><br><br>
	Email<font color="red">*</font><br>
	<input type='text' name = 'email'><br><br>
	Username<font color="red">*</font><br>
	<input type='text' name = 'username'><br><br>
	Password<font color="red">*</font><br>
	<input type='password' name='password'><br><br>

	<!-- The below is all error checking for the field inputs.-->
	<?php if($error == 'user-exists'): ?>
			<div class='error'>
				This user already exists. Please try again with a different e-mail address.
			</div>
			<br>
	<?php endif; ?>

	<?php if($error == 'username-exists'): ?>
			<div class='error'>
				This username already exists. Please try again with a different username.
			</div>
			<br>
	<?php endif; ?>

	<?php if($error == 'firstname_required'): ?>
			<div class='error'>
				Please enter your first name.
			</div>
			<br>
	<?php endif; ?>

	<?php if($error == 'lastname_required'): ?>
			<div class='error'>
				Please enter your last name.
			</div>
			<br>
	<?php endif; ?>

	<?php if($error == 'email_required'): ?>
			<div class='error'>
				Please enter your email address.
			</div>
			<br>
	<?php endif; ?>

	<?php if($error == 'username_required'): ?>
			<div class='error'>
				Please enter a username.
			</div>
			<br>
	<?php endif; ?>

	<?php if($error == 'password_required'): ?>
			<div class='error'>
				Please enter a password.
			</div>
			<br>
	<?php endif; ?>

	<?php if($error == 'short_password'): ?>
			<div class='error'>
				Please enter a password with six characters or more.
			</div>
			<br>
	<?php endif; ?>

	<input type='submit' value='Sign Up' id='submit'>


</form>
<br>
Items marked with <font color="red">*</font> are required.

