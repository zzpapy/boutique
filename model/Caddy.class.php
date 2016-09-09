<?php 
class Caddy

{
	// Propriétés
	private $id_caddy  ;
	private $id_user  ;
	private $full_price;
	private $date ;
	private $status;

	// Propriété calculée
	private $db;
	private $user;
	private $products;

	public function __construct($db)
	{
		$this->db = $db;
	}
	// Méthodes
	// Liste des getters
	public function getIdCaddy()
	{
		return $this->id_caddy;
	}

	// public function getIdUser()
	// {
	// 	return $this->id_user;
	// }

	public function getUser()
	{
		if (!$this->user)
		{
			$manager = new UserManager($this->db);
			$this->user = $manager->findById($this->id_user);
		}
		return $this->user;
	}
	public function getProducts()
	{
		if (!$this->products)
		{
			$manager = new ProductManager($this->db);
			$this->products = $manager->findByCaddy($this);
		}
		return $this->products;
	}
	public function getFullPrice()
	{
		return $this->full_price;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getStatus()
	{
		return $this->status;
	}
	

	// Liste des setters
	public function setCaddy($caddy)
	{
		
			$this->caddy = $caddy;
	}
	// public function setIdUser($id_user)
	// {
	// 	$this->id_user = $id_user;
	}
	public function setUser(User $user)
	{
		$this->user = $user;
		$this->id_user = $user->getId();
	}
	public function setFullPrice($full_price)
	{
		
			$this->full_price = $full_price;
	}
	public function setDate($date)
	{
		$this->date = $date;
	}
	public function setStatus($status)
	{
		$this->status = $status;
	}
	
	

	// Liste des fonctions spécifiques
	// Ici vide
}
// $caddy->getIdUser();
// $caddy->getUser()->getAddress();

// $listProduct = $caddy->getProducts();
?>