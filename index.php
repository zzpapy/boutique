<?php
	session_start();
	var_dump($_SESSION);
	$db = mysqli_connect("192.168.1.79", "boutique", "boutique", "boutique");
	// $db = mysqli_connect("localhost", "root", "troiswa", "boutique");

	$error = "";
	$error404 = "";
	$page = "home";

	function __autoload($className){
		require('model/'.$className.'.class.php');
	}

	$access = ["home", "login_register_user", "admin","login_register_pro", "404", "login_admin", "product", "caddy", "logout"];
	$accessAdmin = ["home", "register", "login", "admin","logout", "create-post", "edit-post", "delete-post", "single", "404"];
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
		"logout" => "logout",
		"admin"=>"product"
	];

	if(isset($traitementList[$page]))
	{
		require("controller/traitement_".$traitementList[$page].".php");
	}

	require("controller/skel.php");
?>