<?php
	session_start();

	
	$db = mysqli_connect("192.168.1.79", "boutique", "boutique", "boutique");
	// $db = mysqli_connect("localhost", "root", "troiswa", "boutique");

	$error = "";
	$error404 = "";
	$page = "home";

	function __autoload($className){
		require('model/'.$className.'.class.php');
	}


	$access = ["recherche","panier", "home", "login_register_user", "login_register_pro", "404", "login_admin", "product", "caddy", "logout", "category", "pro_offer_summary"];
	$accessUser = ["recherche","panier", "home", "404", "product", "caddy", "logout", "category", "panier", "payment", "pro_offer_summary"];
	$accessAdmin = ["recherche","panier", "home", "admin", "product", "404", "logout", "category", "admin_stock_change", "pro", "pro_offer", "pro_history", "pro_offer_summary"];
	$accesPro = ["recherche","panier", "home", "404", "product", "caddy", "logout", "category", "pro_offer_summary", "pro", "pro_offer", "pro_history"];

	if(isset($_SESSION["admin"]) && $_SESSION['admin'] == 1)
	{
		if(isset($_GET["page"]) && in_array($_GET["page"], $accessAdmin))
		{
			$page = $_GET["page"];
		}
	}
	else if(isset($_SESSION['producer']))
	{
		if(isset($_GET["page"]) && in_array($_GET["page"], $accesPro))
		{
			$page = $_GET["page"];
		}
	}
	else if(isset($_SESSION['user']) && $_SESSION['admin'] == 0)
	{
		if(isset($_GET["page"]) && in_array($_GET["page"], $accessUser))
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
		"login_admin" => "user", "login_register_user" => "user", "logout"=>"user",
		"login_register_pro" => "producer",
		"product" => "product", "admin"=>"product", "admin_stock_change"=>"product", "pro_offer"=>"product",
		"category" => "category",
		"caddy" => "caddy","panier" => "caddy",
		"comments" => "comments"
	];

	
	if(isset($traitementList[$page]))
	{
		require("controller/traitement_".$traitementList[$page].".php");
	}
	if (isset($_GET['ajax']))
		require('controller/recherche_res.php');
	else
		require("controller/skel.php");
?>