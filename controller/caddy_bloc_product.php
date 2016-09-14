<?php
var_dump($_GET);

if (isset($_GET["id"],$_GET["page"]))
{
	$productManager = new ProductManager($db);
	$product= $productManager->findById($_GET["id"]);
	var_dump($product);
}
	require('view/caddy_bloc_product.phtml');
?>