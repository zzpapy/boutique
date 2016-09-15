<?php
	if(isset($_GET["name"]))
	{
		$manager = new ProductManager($db);
		// $products = $manager->findById($_GET["id"]);
		// $product = $manager->getIdCategory();
		
		// var_dump($products);
		// die;

		$products = $manager->findAll();
		
		var_dump($products);
		// $countP=0;
		// while ($countP<sizeof($products))
		// {
		// 	$product=$products[$countP];
		// 	$countP++;
		// 	require('view/bloc_home_product.phtml');
		// }
	}

	// $deliveryManager= new DeliveryProducerManager($db);
	// $delivery=$deliveryManager->findById($_GET["id"]);
	// $product=$delivery->getProduct();
?>