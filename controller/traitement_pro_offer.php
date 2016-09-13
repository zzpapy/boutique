<?php 
	if(isset($_POST["prod"],$_POST["quantity_delivery"],$_POST["selectprod"]))
		$productManager= new ProductManager($db);
		$product= $productManager->findById($_POST["prod"]);
		$product -> setStock($_POST["quantity_delivery"]);
		$productManager -> save($product);
		var_dump(mysqli_error($db));

var_dump($_POST);
// die;


 ?>