
<?php

	$manager=new CategoryManager($db);
	$categorys=$manager->findAll();
	$count=0;
	
	while($count<sizeof($categorys))
	{
		$category=$categorys[$count];
		require('view/bloc_home_category.phtml');
		$count++;
		}

?>
