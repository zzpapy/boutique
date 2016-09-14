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
	private $comments;

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
	public function getComments()
	{
		if (!$this->comments)
		{
			$manager = new CommentManager($this->db);
			$this->comments = $manager->findByCaddy($this);
		}
		return $this->comments;
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
	// public function setIdUser($id_user)
	// {
	// 	$this->id_user = $id_user;

	//}
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
	public function addProduct(Product $product, $quantity)
	{
		$this->getProducts();
		$exist = false;
		$count = 0;
		$max = sizeof($this->products);
		while ($count < $max)
		{
			if ($this->products[$count]->getIdProduct() == $product->getIdProduct())
			{
				$this->products[$count]->addQuantity($quantity);
				$exist = true;
			}
			$count++;
		}
		if (!$exist)
		{
			$product->setQuantity($quantity);
			$this->products[] = $product;
		}
	}
	
	

	// Liste des fonctions spécifiques
	// Ici vide
}