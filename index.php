<?php
	//var_dump($_POST);
	session_start();
	$db = mysqli_connect("localhost", "root", "troiswa", "");
	


	$erase="";
	$error = '';
	$page = 'home';
	$access = [
		"home" 
		];
	$db= mysqli_connect("localhost","root","troiswa","centauri");

	
	if (isset($_GET['page']) && in_array($_GET['page'], $access))
	{
		$page = $_GET['page'];
	}
	
	$accessTraitement = [];
	
	if (isset($_GET['page']) && in_array($_GET['page'], $accessTraitement)) {
		require 'controller/traitement_'.$_GET['page'].'.php';
	}

	require 'controller/skel.php';
?>