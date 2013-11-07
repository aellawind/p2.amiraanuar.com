<h1>The Makings of Recent Bakings</h1>

<?php foreach($posts as $post): ?>

<div id="post">

    <p id="name"><?=$post['first_name']?> <?=$post['last_name']?> posted:</p>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>" id="small">
        <?=Time::display($post['created'])?>
    </time>

</div>

<?php endforeach; ?>
<br><br>