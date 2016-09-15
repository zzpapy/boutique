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
		$productManager = new ProductManager($db);
		$producerManager = new ProducerManager($db);
		$DPManager = new DeliveryProducerManager($db);
		$product = $productManager->findById($_POST["prod"]);
		$producer = $producerManager->findById($_SESSION['id']);
		if (!$product)
			$error = 'Product not found';
		else if (!$producer)
			$error = 'Producer not found';
		else
		{
			try
			{
				// $product->addStock($_POST["quantity_delivery"]);
				$delivery = $DPManager->create($product, $producer, $_POST['quantity_delivery']);
				header("Location: index.php?page=pro_offer_summary&id=".$delivery->getIdDeliveryProducer());
				exit;
	var_dump($_POST);
	die;
			}
			catch (Exception $e)
			{
				$error = $e->getMessage();
			}
		}
	}
	



 ?>