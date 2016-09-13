<?php
	session_start();
	$_SESSION['id'] = 1;
	$_SESSION['admin'] = 1;
	var_dump($_SESSION);
	$db = mysqli_connect("192.168.1.79", "boutique", "boutique", "boutique");
	// $db = mysqli_connect("localhost", "root", "troiswa", "boutique");

	$error = "Toto aime les knacks";
	$error404 = "";
	$page = "home";

	function __autoload($className){
		require('model/'.$className.'.class.php');
	}

	$access = ["home", "login_register_user", "admin", "login_register_pro", "404", "login_admin", "product", "caddy", "logout", "selectcat", "selectprod", "category", "admin_stock_change", "admin_dashboard"];
	$accessAdmin = ["home", "login_register_user", "admin", "login_register_pro", "404", "logout", "create-post", "edit-post", "delete-post", "single", "selectcat", "selectprod", "category", "admin_stock_change", "pro_offer"];

	if(isset($_SESSION["admin"]) && $_SESSION['admin'] == 1)
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
		"login_admin" => "user", "login_register_user" => "user","logout"=>"user",
		"login_register_pro" => "producer",
		"product" => "product", "admin"=>"product", "admin_stock_change"=>"product", "pro_offer"=>"product",
		"category" => "category",
		"caddy" => "caddy",
		"comments" => "comments"
	];

	if(isset($traitementList[$page]))
	{
		require("controller/traitement_".$traitementList[$page].".php");
	}

	require("controller/skel.php");
?>