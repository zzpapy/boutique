<?php
	$manager=new ProductManager($db);
	$products=$manager->findAll();
	var_dump($products);
	$count=0;
	while ($count<sizeof($products))
		$product=$products[$i];
		require('view/bloc_home_product.phtml');
		$i++;
?>