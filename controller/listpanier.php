<?php
	$manager = new UserManager($db);
	$user = $manager->findById($_SESSION['id']);
	$caddy = $user->getCaddy();
	$products = $caddy->getProducts();
	$i = 0;
	$max = sizeof($products);
	while ($i < $max)
	{
		$product = $products[$i];
		require('view/produitpanier.phtml');
		$i++;
	}
?>