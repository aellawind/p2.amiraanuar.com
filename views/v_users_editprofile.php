<div id ="post">

<p>Hello, <?=$user->first_name ?>!</p>

<p>Fill in the following fields to update your profile.</p>

<form method='POST' action ='/users/p_profile'>

First Name <input type='text' name='first_name'><br><br>
Last Name <input type='text' name='last_name'><br><br>
Nickname <input type='text' name='nickname'><br><br>
Baked Good of Choice <input type='text' name='bakedgood'><br><br>
Favorite Type of Cake <input type='text' name='cake'><br><br>
Favorite Type of Cookies <input type='text' name='cookie'><br><br>
Your Baking Advice Catchphrase! <input type='text' name='bakingadvice'><br><br>
Mini Bio <input type='text' name='bio'><br><br>
Share some links to your favorite recipes <input type='text' name='recipes'><br><br>



<input type='submit' value='Submit Profile'>


</form>

</div>