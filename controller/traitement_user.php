<?php
	// var_dump($_POST);

	if(isset($_POST["login"], $_POST['name'], $_POST['password'])){
		
		if(!empty($_POST['name'] && !empty($_POST['password']))){

			$manager = new UserManager($db);
			$user = $manager->findByName($_POST['name']);
			if($user){
				if ($user->verifPassword($_POST['password']))
				{
					$_SESSION['id'] = $user->getIdUser();
					$_SESSION['user'] = $user->getFirstName();
					$_SESSION['admin'] = $user->getAdmin();
					// $_SESSION['caddy'] = $caddy->getCaddy();
					header('Location: index.php');
					exit;
				}
				else{
					$error = 'mot de passe incorrect';
					var_dump($error);
				}

			}
			else{
				$error = 'Utilisateur inconnu';
				var_dump($error);
			}

		}
		else{
			$error = "Veuillez remplir tout les champs";
			var_dump($error);
		}
	}

	if(isset($_POST["register"], $_POST['password'], $_POST['password2'], $_POST['mail'], $_POST['name'], $_POST['firstname'], $_POST['address'], $_POST['phone'])){
		$admin = 0;

		// var_dump($_POST);
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

?>