
<?php 

class Producer
{
	
	private $id_producer  ;
	private $society  ;
	private $password  ;
	private $mail ;
	private $address;
	private $siret;

	private $db;
	private $products;
	public function __construct($db)
	{
		$this->db = $db;
	}

	// Méthodes
	// Liste des getters
	public function getIdProducer()
	{
		return $this->id_producer;
	}
	public function getSociety()
	{
		return $this->society;
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
	public function getMail()
	{
		return $this->mail;
	}
	public function getAddress()
	{
		return $this->address;
	}
	public function getSiret()
	{
		return $this->siret;
	}
	public function getProducts()
	{
		// Si l'auteur n'a pas encore été récupéré ou n'est pas connu
		if (!$this->products)
		{
			// Il faut donc aller le chercher !
			// On récupère le manager qui va bien (ici, UserManager)
			$manager = new ProductManager($this->db);
			// Et on lui demande d'aller chercher l'User qui correspond à id_author
			$this->products = $manager->findByProducer($this);
		}
		// On peut du coup retourner $this->author
		return $this->products;
	}
	// Liste des setters
	// public function setSociety($society)
	// {
		
	// 		$this->society = $society;
	// }
	public function setSociety($society)
		{
			if(empty($society)){
				throw new Exception("Veuillez renseigner un nom");
			}
			else if(strlen($society) < 3 || strlen($society) > 63){
				throw new Exception("Nom trop court");
			}
			else{
				$this->society = $society;
			}
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
	public function setSiret($siret)
	{
		$this->siret = $siret;
	}

	// Liste des fonctions spécifiques
	// Ici vide
}

?>