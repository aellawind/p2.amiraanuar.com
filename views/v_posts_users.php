<?php foreach($users as $user): ?>

	<?=$user['first_name']?> <?=$user['last_name']?><br>


	<?php if(isset($connections[$user['user_id']])): ?>
		Unfollow
	<?php else: ?>
		Follow
	<?php endif; ?>

	<br><br>


<?php endforeach ?>