<?php
$products = $category->getProducts();
while ($countP<sizeof($products))
{
	$product=$products[$countP];
	require('view/pro_offer_selectprod.phtml');
	$countP++;
	
}
?>