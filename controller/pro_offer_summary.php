<?php 
	$deliveryManager= new DeliveryProducerManager($db);
	$delivery=$deliveryManager->findById($_GET["id"]);
	$product=$delivery->getProduct();
	
	
	require('view/pro_offer_summary.phtml');

 ?>