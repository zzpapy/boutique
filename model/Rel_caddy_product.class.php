<?php 
// Définition de la classe Article
class Rel_caddy_product
{
	
	// Propriétés
	private $id_caddy  ;
	private $id_product  ;
	private $quantity;
	// La base de données
	private $db;
	// Propriété calculée
	private $product;
	public function __construct($db)
	{
		$this->db = $db;
	}
	
	
	if (!$this->product)
		{
			// Il faut donc aller le chercher !
			// On récupère le manager qui va bien (ici, UserManager)
			$product = new ProductManager($this->db);
			// Et on lui demande d'aller chercher l'User qui correspond à id_product
			$this->product = $product->findById($this->id_product);
		}
		// On peut du coup retourner $this->product
		return $this->product;

	// Méthodes
	// Liste des getters
	public function getIdCaddy()
	{
		return $this->id_caddy;
	}
	public function getIdProduct()
	{
		return $this->id_product;
	}
	public function getQuantity())
	{
		return $this->quantity;
	}
	
	

	// Liste des setters
	public function setIdCaddy($id_caddy)
	{
		
			$this->id_caddy = $id_caddy;
	}
	public function setIdProduct($id_product)
	{
		
			$this->id_product = $id_product;
	}
	public function getQuantity($quantity)
	{
		
			$this->quantity = $quantity;
	}
	public function setAuthor(User $author)
	{
		$this->product = $product;
		$this->id_product = $author->getIdProduct();
	}

	
	

	// Liste des fonctions spécifiques
	// Ici vide
}

?>