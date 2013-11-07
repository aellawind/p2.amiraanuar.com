<h1>Got something cooking in the oven? Let it out!</h1>
<form method='POST' action='/posts/p_add'>

    <label for='content'></label>
    <textarea name='content' id='bigtextfield'></textarea>

    <br>
    <input type='submit' value='New Post' id='submit'>

</form> 

<!--Display all of your posts in one list.-->
<?php foreach($posts as $post): ?>

	<div id="post">

			<!--Delete button-->
		<a href="/posts/delete/<?=$post['post_id']?>" class="deletepost">Delete Post</a>
		
		<!--Shows post content-->
		<p id="name">You (<?=$post['first_name']?> <?=$post['last_name']?>) posted:</p>
		    <p><?=$post['content']?></p>

		    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>" id="small">
		        <?=Time::display($post['created'])?>
		    </time><br>




		

	   

	</div>

<?php endforeach; ?>

<br><br>