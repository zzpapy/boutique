<?php 
		var_dump($_POST);
	if(isset($_POST["page"] ,$_POST["id"]))
	{
		if($_POST["page"]=="caddy")
		{
	
		$productManager = new ProductManager($db);
		$product= $productManager->findById($_POST["id"]);
		
		$caddyManager= new CaddyManager($db);
		}
		header("Location: index.php?page=caddy&id=".$_POST["id"]);
		exit;
	}
 ?>