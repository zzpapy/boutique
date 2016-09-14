<?php
	$caddyManager = new CaddyManager($db);
	$caddy = $caddyManager -> findAll();
	$panierMoyen = 0;

	$caddys = sizeof($caddy);

	$chiffreAffaire = 0;
	$compteur = 0;

	while($compteur < sizeof($caddy)){
		$full_price = $caddy[$compteur]->getFullPrice();
		$chiffreAffaire += $full_price;
		$compteur++;
	}
	$panierMoyen = $chiffreAffaire / $caddys;
	$chiffreAffaire = number_format($chiffreAffaire, 2, ', ', ' ');
	$panierMoyen = number_format($panierMoyen, 2, ', ', ' ');
	
	require('view/bloc_admin_1stats.phtml');
?>