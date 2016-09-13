<?php
	$productManager = new ProductManager($db);
	$product=$productManager -> findAll();

	$compteur = 0;

	while ($compteur < sizeof($product)){
		$name = $product[$compteur]->getName();
		$stock = $product[$compteur]->getStock();
		require('view/bloc_admin_4stock.phtml');
		$compteur++;
	}

?>