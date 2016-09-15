<?php
	$userManager=new UserManager($db);
	$user=$userManager->FindById($_SESSION["id"]);
	$caddy=$user->getCaddy();
	$fullprice=$caddy->getFullPrice();
	require('view/payment.phtml');
?>