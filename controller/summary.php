<?php 
	$deliveryManager= new DeliveryProducerManager($db);
	$delivery=$deliveryManager->findById($_GET["id"]);
	$product=$delivery->getProduct();
	
	
	require 'view/summary.phtml';

 ?>