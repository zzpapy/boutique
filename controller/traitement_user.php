<?php
	// var_dump($_POST);

	// if(isset($_POST["register"], $_POST['password'], $_POST['mail'], $_POST['name'], $_POST['firstname'], $_POST['address'], $_POST['phone'])){
	// 	$admin = ";";

	// 	$manager = new UserManager($db);
	// 	// $list = $manager->create($password, $mail, $name, $firstname, $address, $phone, $admin);
	// 	$list = $manager->create($_POST['password'], $_POST['mail'], $_POST['name'], $_POST['firstname'], $_POST['address'], $_POST['phone'], $admin);
	// 	// header("Location: index.php?page=login");
	// 	// exit;

	// }

	if(isset($_POST["login"], $_POST['name'], $_POST['password'])){

		
		if(!empty($_POST['name'] && !empty($_POST['password']))){

			$manager = new UserManager($db);
			$user = $manager->findByName($_POST['name']);
			if ($user) {
				if ($user->verifPassword($_POST['password']))
				{
					$_SESSION['user'] = $user;
					header('Location: index.php');
					exit;
				}
				else
					$error = 'mot de passe incorrect';
			}

			// $name = $_POST['name'];
			// // var_dump($name);
			// $manager = new UserManager($db);
			// $list = $manager->findByName($name);
			// var_dump('$name = '.$name);
			// var_dump('$list = '.$list);
			// header("Location: index.php?page=login");
			// exit;
		}
		else{
			$error = "Veuillez remplir tout les champs";
			var_dump($error);
		}
	}

	if(isset($_POST["register"], $_POST['password'], $_POST['password2'], $_POST['mail'], $_POST['name'], $_POST['firstname'], $_POST['address'], $_POST['phone'])){
		$admin = "";
		// var_dump('expression');
		var_dump($_POST);
		// var_dump("expression");
		if ($_POST['password'] != $_POST['password2']) {
			var_dump('Les mots de passe ne correspondent pas');
		}
		else{
			$manager = new UserManager($db);
			try
			{
				$manager->create($_POST['password'], $_POST['mail'], $_POST['name'], $_POST['firstname'], $_POST['address'], $_POST['phone'], $admin);
				
			}
			catch (Exception $exception)
			{
				$error = $exception->getMessage();
				var_dump($error);
			}
			
		}

	}
?>