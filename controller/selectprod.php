<?php
$manager=new ProductManager($db);
$products=$manager->findAll();
$countP=0;
// var_dump($products);
// die;
while ($countP<sizeof($products))
{
	$product=$products[$countP];
	$countP++;
	require('view/selectprod.phtml');
}
?>