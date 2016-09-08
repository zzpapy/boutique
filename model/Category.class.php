<?php 
// Définition de la classe Article
class Category
{
	
	// Propriétés
	private $id_category  ;
	private $title ;
	
	

	// Méthodes
	// Liste des getters
	public function getIdCategory()
	{
		return $this->id_category;
	}
	public function getTitle()
	{
		return $this->title;
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