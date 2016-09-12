
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
	public function setSociety($society)
	{
		
			$this->society = $society;
	}
	public function setPassword($password)
	{
		
			$this->password = $password;
	}
	
	
	public function setMail($mail)
	{
		
			$this->mail = $mail;
	}
	public function setAddress($address)
	{
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