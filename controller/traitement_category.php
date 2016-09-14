<?php 
if (isset($_POST["create"],$_POST["creacat"]))
{
	if($_POST["create"]=="create")
	{
		$categoryManager= new CategoryManager($db);
		$category=$categoryManager -> create($_POST["creacat"]);
		header("Location: index.php");
		exit;
	}
}
if(isset($_GET["id"]))
{
	$manager=new CategoryManager($db);
	$products= $manager->findById($_GET["id"]);
	var_dump($products);
	die;

	header("Location: index.php?page=category&id=$id");
		exit;

}
	

 ?>