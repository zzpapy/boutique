<?php
var_dump($_POST);
if (isset($_POST['add_caddy'], $_POST['id_product'], $_POST['quantity'], $_SESSION['id']))
{
	$productManager = new ProductManager($db);
	$userManager = new UserManager($db);
	$caddyManager = new CaddyManager($db);
	try
	{
		$product = $productManager->findById($_POST['id_product']);
		if (!$product)
			throw new Exception("Product not found");
		$user = $userManager->findById($_SESSION['id']);
		if (!$user)
			throw new Exception("Vous devez vous connecter");
		$caddy = $user->getCaddy();
		if (!$caddy)
			$caddy = $caddyManager->create($user);
		if (!$caddy)
			throw new Exception("Erreur interne");
		$caddy->addProduct($product, $_POST['quantity']);
		$caddyManager->save($caddy);
		// header("Location: index.php?page=panier&id=".$caddy->getIdCaddy());
		header("Location: index.php?page=panier");
		exit;
	}
	catch (Exception $e)
	{
		$error = $e->getMessage();
	}
}
// var_dump($_GET["page"]);
		if(isset($_POST["fullprice"],$_POST["type"]))
		{
		
			$caddyManager= new CaddyManager($db);
			// $caddy=$caddyManager -> calculate($num); 
			// $caddy=$caddyManager -> calculateOld($num);
			$res = $caddyManager -> isLuhnNum($_POST['num']);
			var_dump($res, $_POST['num']);
			// var_dump($res);
			// die;
			if($res==true)
			{
				header("Location: index.php?page=payment");
				exit;
			}
			else
			{
				$error="carte non valide";
				var_dump($error);
			}

			
		}


 ?>
