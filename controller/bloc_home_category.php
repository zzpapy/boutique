<?php

	$manager=new CategoryManager($db);
	$categorys=$manager->findAll();
	$count=0;
	while($count<sizeof($categorys))
		$catergory=$categorys[$count];
		require('view/bloc_home_category.phtml');
		$count++;
	var_dump($categorys);

?>