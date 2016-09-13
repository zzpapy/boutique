<?php
if (isset($_SESSION['id']))
{
	require('view/panier.phtml');
}
else
{
	$error = 'Vous devez être connecté';
	require('controller/error.php');
}
?>