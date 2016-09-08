<?php
	session_start();
	$db = mysqli_connect("localhost", "root", "troiswa", "boutique");
	var_dump($_SESSION);

	$error = "";
	$error404 = "";
	$page = "home";

	function __autoload($className){
		require('model/'.$className.'.class.php');
	}

	$access = ["home", "login_register_user", "login_register_pro", "404", "login_admin", "product", "caddy"];
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

	$traitementList = [
		"login_admin" => "user", "login_register_user" => "user",
		"login_register_pro" => "producer",
		"product" => "product",
		"category" => "category",
		"caddy" => "caddy",
		"comments" => "comments",
		"logout" => "logout"
	];

	if(isset($traitementList[$page]))
	{
		require("controller/traitement_".$traitementList[$page].".php");
	}

	require("controller/skel.php");
?>