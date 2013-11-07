<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>
	<link rel="shortcut icon" href="/images/favicon.ico"/>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Common CSS/JSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen">	

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>

<div class="backwrapper">


    <div id="header">
		<img src="/images/header.png" alt="Baking Bites" height="317px" width="783px">
	</div>
    <div class='wrapper'>
    	<div class="container">
	    	<ul class="menu" rel="sam1">

        	<!-- Menu for users who are logged in -->
        	<?php if($user): ?>

        		<li><a href='/'>Home</a></li>
           		<li><a href='/users/profile'>Profile</a></li>
	            <li><a href='/posts/users'>Connect</a></li>
	            <li><a href='/posts'>Engorge</a></li>
	            <li><a href='/posts/add'>Post</a></li>
	            <li><a href='/users/logout'>Logout</a></li>

	        <!-- Menu options for users who are not logged in -->
	        <?php else: ?>

	        	<li><a href='/'>Home</a></li>
	            <li><a href='/users/signup'>Sign up</a></li>    

	        <?php endif; ?>

	    	</ul>
		</div>
    </div>
	<br>

	<!-- Echoes out the content from the other pages -->

    <div class="lowercontainer">
		<?php if(isset($content)) echo $content; ?>

		<?php if(isset($client_files_body)) echo $client_files_body; ?>
	</div>


</div>



</body>
</html>