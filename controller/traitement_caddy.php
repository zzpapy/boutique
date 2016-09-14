<?php
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
 ?>