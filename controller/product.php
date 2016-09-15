<?php
	if (isset($_GET['id']))
	{
		$manager = new ProductManager($db);
		$product = $manager->findById($_GET['id']);
		if ($product)
			require('view/product.phtml');
		else
		{
			$error = 'Product not found';
			require('controller/404.php');
		}
	}
	else
	{
		$error = 'Product not found';
		require('controller/404.php');
	}
?>