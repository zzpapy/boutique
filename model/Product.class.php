<?php 
// Définition de la classe Article
class Product
{
	
	
	// Propriétés
	private $id_product  ;
	private $name  ;
	private $price_buy;
	private $margin_sell ;
	private $price_sell;
	private $description ;
	private $stock  ;
	private $image;
	private $id_producer  ;
	private $id_category;
	private $db;
	// Propriété calculée
	private $producer;
	private $category;
	private $caddys;

	// Méthodes
	// Le constructeur pour avoir accès à $db
	public function __construct($db)
	{
		$this->db = $db;
	}
	public function getCaddys()
	{
		// Si l'auteur n'a pas encore été récupéré ou n'est pas connu
		if (!$this->caddys)
		{
			// Il faut donc aller le chercher !
			// On récupère le manager qui va bien (ici, UserManager)
			$manager = new CaddyManager($this->db);
			// Et on lui demande d'aller chercher l'User qui correspond à id_author
			$this->caddys = $manager->findByProduct($this);
		}
		// On peut du coup retourner $this->author
		return $this->caddys;
	}
	

	// Méthodes
	// Liste des getters
	public function getIdProduct()
	{
		return $this->id_product;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getPriceBuy()
	{
		return $this->price_buy;
	}
	public function getMarginSale()
	{
		return $this->margin_sale;
	}
	public function getPriceSell()
	{
		return $this->price_sell;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function getStock()
	{
		return $this->stock;
	}
	public function getImage()
	{
		return $this->image;
	}
	// public function getIdProducer()
	// {
	// 	return $this->id_producer;
	// }
	public function getProducer()
	{
		// Si l'auteur n'a pas encore été récupéré ou n'est pas connu
		if (!$this->producer)
		{
			// Il faut donc aller le chercher !
			// On récupère le manager qui va bien (ici, UserManager)
			$manager = new ProducerManager($this->db);
			// Et on lui demande d'aller chercher l'User qui correspond à id_author
			$this->producer = $manager->findById($this->id_producer);
		}
		// On peut du coup retourner $this->author
		return $this->producer;
	}

	// public function getIdCategory()
	// {
	// 	return $this->id_category;
	// }
	public function getCategory()
	{
		// Si l'auteur n'a pas encore été récupéré ou n'est pas connu
		if (!$this->category)
		{
			// Il faut donc aller le chercher !
			// On récupère le manager qui va bien (ici, UserManager)
			$manager = new CategoryManager($this->db);
			// Et on lui demande d'aller chercher l'User qui correspond à id_author
			$this->category = $manager->findById($this->id_category);
		}
		// On peut du coup retourner $this->author
		return $this->category;
	}


	// Liste des setters
	// public function setIdProduct($id_product)
	// {
	// 	 $this->id_product=$id_product;
	// }
	public function setName($name)
	{
		$this->name=$name;
	}
	public function setPriceBuy($price_buy)
	{
		$this->price_buy=$price_buy;
	}
	public function setMarginSale($margin_sale)
	{
		$this->margin_sale=$margin_sale;
	}
	public function setPriceSell($price_sell)
	{
		$this->price_sell=$price_sell;
	}
	public function setDescription($description)
	{
		$this->description=$description;
	}
	public function setStock($stock)
	{
		$this->stock=$stock;
	}
	public function setImage($image)
	{
		$this->image=$image;
	}
	// public function setIdProducer($id_producer)
	// {
	// 	 $this->id_producer=$id_producer;
	// }
	public function setProducer(Producer $producer)
	{
		$this->id_producer = $producer->getIdProducer();
		$this->producer = $producer;
	}

	// public function setIdCategory($id_category)
	// {
	// 	 $this->id_category=$id_category;
	// }
	public function setCategory(Category $category)
	{
		$this->id_category = $category->getIdCategory();
		$this->category = $category;
	}

	public function addStock($stock)
	{
		if ($stock > 0)
			$this->stock += $stock;
		else
			throw new Exception("Stock invalide");
	}
	


	// Liste des fonctions spécifiques
	// Ici vide
}

?>