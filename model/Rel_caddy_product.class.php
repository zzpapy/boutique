<?php 
// Définition de la classe Article
class Rel_caddy_product
{
	
	// Propriétés
	private $id_caddy  ;
	private $id_product  ;
	private $quantity;
	
	
	

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
	
	
	

	// Liste des fonctions spécifiques
	// Ici vide
}

?>