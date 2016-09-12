<?php

	$manager = new CommentManager($db);
	$list = $manager->findAll();
	var_dump($list);
	require('view/bloc_home_comments.phtml');
?>
