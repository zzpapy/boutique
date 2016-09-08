<?php 
// Définition de la classe Article
class Product
{
	
	// Propriétés
	private $id_product  ;
	private $name  ;
	private $price_buy;
	private $margin_sale ;
	private $price_sell;
	private $description ;
	private $stock  ;
	private $image;
	private $id_producer  ;
	private $id_category;
	

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
	public function getMarginSell()
	{
		return $this->margin_sell;
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
	public function getIdProducer()
	{
		return $this->id_producer;
	}
	public function getIdCategory()
	{
		return $this->id_category;
	}

	// Liste des setters
	public function setIdProduct()
	{
		return $this->id_product=$id_product;
	}
	public function setName()
	{
		return $this->name=$name;
	}
	public function setPriceBuy()
	{
		return $this->price_buy=$price_buy;
	}
	public function setMarginSell()
	{
		return $this->margin_sell=$margin_sell;
	}
	public function setPriceSell()
	{
		return $this->price_sell=$price_sell;
	}
	public function setDescription()
	{
		return $this->description=$description;
	}
	public function setStock()
	{
		return $this->stock=$stock;
	}
	public function setImage()
	{
		return $this->image=$image;
	}
	public function setIdProducer()
	{
		return $this->id_producer=$id_producer;
	}
	public function setIdCategory()
	{
		return $this->id_category=$id_category;
	}

	// Liste des fonctions spécifiques
	// Ici vide
}

?>