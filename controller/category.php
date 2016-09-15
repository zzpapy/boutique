<?php
	if(isset($_GET["name"]))
	{
		$manager = new CategoryManager($db);
		$category = $manager->findByName($_GET["name"]);
		if ($category)
		{
			$products = $category->getProducts();
			$countP=0;
			while ($countP<sizeof($products))
			{
				$product=$products[$countP];
				require('view/bloc_home_product.phtml');
				$countP++;
			}
		}
		else
		{
			$error = 'Category not found';
			require('controller/error.php');
		}
		// $product = $manager->getIdCategory();
		
		// var_dump($products);
		// die;
	}

	// $deliveryManager= new DeliveryProducerManager($db);
	// $delivery=$deliveryManager->findById($_GET["id"]);
	// $product=$delivery->getProduct();
?>