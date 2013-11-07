<h2>Who Is A Baker Worthy of Following?</h2>
<h3>You decide.</h3>
<br><br>
<?php foreach($users as $user): ?>

	<div id="follow">
	    <!-- Print this user's name -->
	    <?=$user['first_name']?> <?=$user['last_name']?>

	    <!-- If there exists a connection with this user, show a unfollow link -->
	    <?php if(isset($connections[$user['user_id']])): ?>
	        <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

	    <!-- Otherwise, show the follow link -->
	    <?php else: ?>
	        <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
	    <?php endif; ?>
    </div>
    <br><br>


<?php endforeach; ?>