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
	

 ?>