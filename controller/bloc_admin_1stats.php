<?php
	$caddyManager = new CaddyManager($db);
	$caddy=$caddyManager -> findAll();

	$caddys = sizeof($caddy);
	require('view/bloc_admin_1stats.phtml');
?>