<?php
	var_dump($_POST);

	if(isset($_POST["register"], $_POST['society'], $_POST['siret'], $_POST['mail'], $_POST['password'], $_POST['password2'], $_POST['address'], $_POST['phone'])){
		$admin = 0;
		$manager = new ProducerManager($db);
		// $list = $manager->create($password, $mail, $name, $firstname, $address, $phone, $admin);
		// header("Location: index.php?page=login");
		// exit;

		try
		{
			$manager->create($_POST['society'], $_POST['password'], $_POST['mail'], $_POST['address'], $_POST['siret'], $_POST['password2']);
		}
		catch (Exception $exception)
		{
			$error = $exception->getMessage();
			var_dump($error);
		}
	}

	if(isset($_POST["login"], $_POST['society'], $_POST['password'])){
		
		if(!empty($_POST['society'] && !empty($_POST['password']))){

			$manager = new ProducerManager($db);
			$producer = $manager->findByName($_POST['society']);
			if($producer){
				if ($producer->verifPassword($_POST['password']))
				{
					$_SESSION['id'] = $producer->getIdProducer();
					$_SESSION['producer'] = $producer->getSociety();
					$_SESSION['admin'] = $producer->getAdmin();
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
			// header("Location: index.php?page=login");
			// exit;
		}
		else{
			$error = "Veuillez remplir tout les champs";
			var_dump($error);
		}
	}
?>