<?php 
if (isset($_POST["name"],$_POST["price_buy"],$_POST["margin_sale"],
	$_POST["price_sell"],$_POST["description"],$_POST["stock"],
	$_POST["id_category"],$_POST["id_producer"],$_POST["image"]))
{
	if($_POST["create"]=="create")

	{
		$name=$_POST["name"];
		$price_buy=$_POST["price_buy"];
		$margin_sale=$_POST["margin_sale"];
		$price_sell=$_POST["price_sell"];
		$description=$_POST["description"];
		$stock=$_POST["stock"];
		$id_category=$_POST["id_category"];
		$id_producer=$_POST["id_producer"];
		$image=$_POST["image"];

		$manager= new ProductManager($db);
		$product=$manager->create ($name,$price_buy,$margin_sale,$price_sell,$description,$stock,
		$image,$id_producer,$id_category);
		// var_dump($_POST);
		// die;
		// die;
	}
}


 ?>