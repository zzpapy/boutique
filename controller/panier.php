<?php
if (isset($_SESSION['id']))
{
	$manager = new UserManager($db);
	$user = $manager->findById($_SESSION['id']);
	$caddy = $user->getCaddy();
	$products = $caddy->getProducts();
	$i = 0;
	$max = sizeof($products);
	while ($i < $max)
	{
		$product = $products[$i];
		require('view/product.phtml');
		$i++;
	}
}
else
{
	$error = 'Vous devez être connecté';
	require('controller/error.php');
}
?>