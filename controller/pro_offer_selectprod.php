<?php
$products = $category->getProducts();
$countP=0;
while ($countP<sizeof($products))
{
	$product=$products[$countP];
	require('view/pro_offer_selectprod.phtml');
	$countP++;
	
}
?>