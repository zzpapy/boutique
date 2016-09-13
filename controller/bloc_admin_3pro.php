<?php
	$deliveryProducerManager = new DeliveryProducerManager($db);
	$info = $deliveryProducerManager -> getTotalInfo();

	
	require('view/bloc_admin_3pro.phtml');


?>