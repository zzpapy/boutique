<?php
	if(isset($_GET["id"]))
	{
		$manager = new CategoryManager($db);
		$products = $manager->findById($_GET["id"]);
		// $product = $manager->getIdCategory();
		
		// var_dump($products);
		// die;
		
		// header("Location: index.php?page=category");
		// 	exit;

	}
	require('view/category.phtml');

	// $deliveryManager= new DeliveryProducerManager($db);
	// $delivery=$deliveryManager->findById($_GET["id"]);
	// $product=$delivery->getProduct();
?>