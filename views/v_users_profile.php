<div id="post">

<h1><?=$user->first_name?>'s Profile</h1>


<p>Name: <?=$user->first_name?> <?=$user->last_name?></p>
<p>Nickname: <?=$user->nickname?></p>
<p>Member Since: <?=date('F j, Y', $user->created) ?></p>
<p>Baked Good of Choice: <?=$user->bakedgood?></p>
<p>Favorite Type of Cake: <?=$user->cake?></p>
<p>Favorite Type of Cookies: <?=$user->cookie?></p>
<p>Your Baking Advice Catchphrase: <?=$user->bakingadvice?></p>
<p>Mini Bio: <?=$user->bio?></p>
<p>Favorite Recipes: <?=$user->recipes?></p>


<?php if($user): ?>
	<a href="/users/editprofile">Edit Your Profile</a>
<?php endif; ?>

</div>