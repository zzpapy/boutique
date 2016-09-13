<?php
	$userManager = new UserManager($db);
	$user = $userManager -> findParticular();

	$users = sizeof($user);
	require('view/bloc_admin_2users.phtml');
?>