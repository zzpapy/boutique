<?php
	var_dump($_POST);

	if(isset($_POST["register"], $_POST['society'], $_POST['siret'], $_POST['mail'], $_POST['password'], $_POST['password2'], $_POST['address'], $_POST['phone'])){

		$manager = new ProducerManager($db);
		// $list = $manager->create($password, $mail, $name, $firstname, $address, $phone, $admin);
		$list = $manager->create($_POST['society'], $_POST['siret'], $_POST['mail'], $_POST['password'], $_POST['password2'], $_POST['address'], $_POST['phone'], $admin);
		header("Location: index.php?page=login");
		exit;
	}

	if(isset($_POST["login"], $_POST['society'], $_POST['password'])){

		
		if(!empty($_POST['society'] && !empty($_POST['password']))){
			$manager = new UserManager($db);
			$list = $manager->findAll();
			header("Location: index.php?page=login");
			exit;
		}
		else{
			$error = "Veuillez remplir tout les champs";
			var_dump($error);
		}
	}
?>