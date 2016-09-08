<?php
	session_start();
	// $db = mysqli_connect("localhost", "root", "troiswa", "boutique");
	$error = "";
	$error404 = "";
	$page = "home";

	function __autoload($className){
		require('model/'.$className.'.class.php');
	}

	$access = ["home", "login_register_user", "login_register_pro", "404", "product", "caddy"];
	$accessAdmin = ["home", "register", "login", "logout", "create-post", "edit-post", "delete-post", "single", "404"];
	if(isset($_SESSION["pseudo"]))
	{
		if(isset($_GET["page"]) && in_array($_GET["page"], $accessAdmin))
		{
			$page = $_GET["page"];
		}	
	}
	else
	{
		if(isset($_GET["page"]) && in_array($_GET["page"], $access))
		{
			$page = $_GET["page"];
		}	
	}

	$traitementList = ["user", "producer", "product", "category", "caddy", "comment", "logout"];
	if(in_array($page, $traitementList))
	{
		require("controller/traitement_".$page.".php");
	}
	require("controller/skel.php");
?>