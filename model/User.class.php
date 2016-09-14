<?php 
// Définition de la classe Article
	class User
	{

		// Propriétés
		private $id_user;
		private $name;
		private $firstname;
		private $mail;
		private $address;
		private $phone;

		private $password;

		private $admin;
		private $db;
		private $comments;
		private $caddys;
		private $caddy;

		public function __construct($db)
		{
			$this->db = $db;
		}
// Méthodes
// GETTERS

		public function getComments()
		{
			if (!$this->comments)
			{
				$manager = new CommentManager($this->db);
				$this->comments = $manager->findByAuthor($this);
			}
			return $this->comments;
		}
		public function getCaddys()
		{
			if (!$this->caddys)
			{
				$manager = new CaddyManager($this->db);
				$this->caddys = $manager->findByUser($this);
			}
			return $this->caddys;
		}
		public function getCaddy()
		{
			if (!$this->caddy)
			{
				$manager = new CaddyManager($this->db);
				$this->caddy = $manager->findCurrentByUser($this);
			}
			return $this->caddy;
		}
		public function getIdUser()
		{
			return $this->id_user;
		}
		public function getName()
		{
			return $this->name;
		}
		public function getFirstname()
		{
			return $this->firstname;
		}
		public function getMail()
		{
			return $this->mail;
		}
		public function getAddress()
		{
			return $this->address;
		}
		public function getPhone()
		{
			return $this->phone;
		}
		public function getPassword()
		{
			return $this->password;
		}
		public function verifPassword($password)
		{
			return password_verify($password, $this->password);
		}
		public function getAdmin()
		{
			return $this->admin;
		}


// SETTERS
		public function setName($name)
		{
			if(empty($name)){
				throw new Exception("Veuillez renseigner un nom");
			}
			else if(strlen($name) < 3 || strlen($name) > 63){
				throw new Exception("Nom trop court");
			}
			else{
				$this->name = $name;
			}
		}
		public function setFirstname($firstname)
		{
			if(empty($firstname)){
				throw new Exception("Veuillez renseigner un prenom");
			}
			else if(strlen($firstname) < 3 || strlen($firstname) > 63){
				throw new Exception("Prénom trop court");
			}
			else{
				$this->firstname = $firstname;
			}
			
		}
		public function setMail($mail)
		{
			if(empty($mail)){
				throw new Exception("Veuillez renseigner une adresse mail");
			}
			else if(strlen($mail) < 5 || strlen($mail) > 255){
				throw new Exception("Mail trop court");
			}
			elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
				throw new Exception("Adresse mail non valide");	
			}
			// else if($mail){
			// 	throw new Exception("Adresse mail déjà utilisée");
			// }
			else{
				$this->mail = $mail;
			}
				
		}
		public function setAddress($address)
		{
			if(empty($address)){
				throw new Exception("Adresse trop longue");
			}
			$this->address = $address;
		}
		public function setPhone($phone)
		{
			$this->phone = $phone;
		}
		public function setPassword($password)
		{
			//conditions de verification de password
			if(empty($password)){
				throw new Exception("Merci de remplir tout les champs");
			}
			else if(strlen($password) < 3){
				throw new Exception("Le mot de passe est trop court");
			}
			else{
				$this->password = password_hash($password, PASSWORD_DEFAULT);
			}
		}
		public function setAdmin($admin)
		{
				$this->admin = $admin;
		}

// Liste des fonctions spécifiques
// Ici vide
	}
?>