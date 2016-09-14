
<?php
$products = $category->getProducts();
// var_dump($products);
$countP=0;
while ($countP<sizeof($products))
{
	$product=$products[$countP];
	$countP++;
	require('view/bloc_home_product.phtml');
}
?>