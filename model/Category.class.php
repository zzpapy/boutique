<?php 
// Définition de la classe Article
class Category
{
	
	// Propriétés
	private $id_category  ;
	private $title ;
	private $products;
	private $db;

	
	

	// Méthodes
	// Liste des getters
	public function __construct($db)
	{
		$this->db = $db;
	}
	public function getIdCategory()
	{
		return $this->id_category;
	}
	public function getTitle()
	{
		return $this->title;
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
			$this->products = $manager->findByCategory($this);
		}
		// On peut du coup retourner $this->author
		return $this->products;
	}
		

	// Liste des setters
	// public function setIdCategory($id_category)
	// {
		
	// 		$this->id_category = $id_category;
	// }
	public function setTitle($title)
	{
		
			$this->title = $title;
	}
	

	// Liste des fonctions spécifiques
	// Ici vide
}

?>