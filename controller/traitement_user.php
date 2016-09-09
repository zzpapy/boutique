<?php
	// var_dump($_POST);

	if(isset($_POST["register"], $_POST['password'], $_POST['mail'], $_POST['name'], $_POST['firstname'], $_POST['address'], $_POST['phone'])){
		$admin = ";";

		$manager = new UserManager($db);
		// $list = $manager->create($password, $mail, $name, $firstname, $address, $phone, $admin);
		$list = $manager->create($_POST['password'], $_POST['mail'], $_POST['name'], $_POST['firstname'], $_POST['address'], $_POST['phone'], $admin);
		// header("Location: index.php?page=login");
		// exit;

	}

	if(isset($_POST["login"], $_POST['name'], $_POST['password'])){

		
		if(!empty($_POST['name'] && !empty($_POST['password']))){
			// $manager = new UserManager($db);
			// $list = $manager->findAll();
			// // $name = $manager->getName();
			// var_dump($list[0]);

			$name = $_POST['name'];
			// var_dump($name);
			$manager = new UserManager($db);
			$list = $manager->findByName($name);
			var_dump($list);
			// var_dump($list['id_user']);
			// header("Location: index.php?page=login");
			// exit;
		}
		else{
			$error = "Veuillez remplir tout les champs";
			// var_dump($error);
		}
	}
?>