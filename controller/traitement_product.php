<?php 
var_dump($_POST);
if (isset($_POST["name"],$_POST["price_buy"],$_POST["margin_sale"],
	$_POST["price_sell"],$_POST["description"],$_POST["stock"],
	$_POST["id_category"],$_POST["id_producer"],$_POST["image"]))
{
		$productManager = new ProductManager($db);
		$producerManager = new ProducerManager($db);
		$categoryManager = new CategoryManager($db);

		try
		{
			$producer = $producerManager->findById($_POST['id_producer']);
			if (!$producer)
				throw new Exception("Le producteur n'existe pas");
			$category = $categoryManager->findById($_POST['id_category']);
			if (!$category)
				throw new Exception("La catégorie n'existe pas");
			$product=$productManager->create ($producer, $category, $_POST["name"],$_POST["price_buy"],$_POST["margin_sale"],$_POST["price_sell"],$_POST["description"],$_POST["stock"],$_POST["id_category"],$_POST["id_producer"],$_POST["image"]);
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
		// var_dump($_POST);
		// die;
		// die;
}


 ?>