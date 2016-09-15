<?php
<<<<<<< HEAD
	$userManager=new UserManager($db);
	$user=$userManager->FindById($_SESSION["id"]);
	$caddy=$user->getCaddy();
	$fullprice=$caddy->getFullPrice();
=======
>>>>>>> 68eaee9606aba3b233656886c730ca3587467b38
	require('view/payment.phtml');
?>