<?php
$search = '';
if (isset($_GET['recherche']))
	$search = $_GET['recherche'];
$manager = new ProductManager($db);
$list = $manager->search($search);
$count = 0;
$max = sizeof($list);
while ($count < $max)
{
	$product = $list[$count];
	require('view/bloc_home_product.phtml');
	$count++;
}
if ($max == 0)
{
	$error = 'Aucun résultat';
	require('view/error.phtml');
}
?>