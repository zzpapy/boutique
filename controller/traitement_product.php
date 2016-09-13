<?php 
// var_dump($_POST);
if (isset($_POST["name"],$_POST["price_buy"],$_POST["margin_sale"],
	$_POST["description"],
	$_POST["category"],$_POST["image"],$_POST["create"]))
{
		$price_sell=$_POST["price_buy"]*$_POST["margin_sale"];
	if($_POST["create"]=="create")
	{
		/*var_dump($_POST);
		die;*/
		$productManager = new ProductManager($db);
		
		$categoryManager = new CategoryManager($db);
		$category="";
		try
		{
			$category = $categoryManager->findById($_POST['category']);
			
			if (!$category)
				throw new Exception("La catégorie n'existe pas");
				$product=$productManager->create ($category,
			 	$_POST["name"],$_POST["price_buy"],
				$_POST["margin_sale"],$price_sell,
				$_POST["description"],
				$_POST["image"]);
				// var_dump($_POST);

			if (!$product)
				throw new Exception("Erreur interne");
			header("Location: index.php");
			exit;
		}
		catch (Exception $e)
		{
			$error = $e->getMessage();
			var_dump($error);
		}
		
	}
}
if(isset($_POST["quantity_delivery"],$_POST["prod"]))
	{
		$productManager= new ProductManager($db);
		$product= $productManager->findById($_POST["prod"]);
		$DPManager= new DeliveryProducerManager($db);
		$DPManager->create(produit, producer, stock);
		try
		{
			$product->addStock($_POST["quantity_delivery"]);
			
			$productManager -> save($product);
			header("Location: index.php?page=summary");
			exit;
		}
		catch (Exception $e)
		{
			$error = $e->getMessage();
		}
	}



 ?>