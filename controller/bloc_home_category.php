<?php

	$category=new Categroy();
	$list=FindAll($category);
	var_dump($list);

	require('view/bloc_home_category.phtml');
?>