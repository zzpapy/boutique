<?php 
class DeliveryProducer
{
	// Propriétés
	private $id_delivery_producer  ;
	private $id_product;
	private $quantity_delivery;
	private $date;
	private $id_producer;
	private $price;
	// Propriété calculée
	private $db;
	private $product;
	private $producer;

	public function __construct($db)
	{
		$this->db = $db;
	}
	// Méthodes
	// Liste des getters
	public function getIdDeliveryProducer()
	{
		return $this->id_delivery_producer;
	}

	public function getProduct()
	{
		if (!$this->product)
		{
			$manager = new ProductManager($this->db);
			$this->product = $manager->findById($this->id_product);
		}
		return $this->product;
	}
	public function getProducer()
	{
		if (!$this->producer)
		{
			$manager = new ProducerManager($this->db);
			$this->producer = $manager->findById($this->id_producer);
		}
		return $this->producer;
	}
	public function getQuantityDelivery()
	{
		return $this->quantity_delivery;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getPrice()
	{
		return $this->price;
	}
	
	// Liste des setters
	public function setPrice($price)
	{
		$this->price = $price;
	}
	public function setProduct(Product $product)
	{
		$this->product = $product;
		$this->id_product = $product->getIdProduct();
	}
	public function setProducer(Producer $producer)
	{
		$this->producer = $producer;
		$this->id_producer = $producer->getIdProducer();
	}
	public function setQuantityDelivery($quantity_delivery)
	{
		// if ()
			$this->quantity_delivery = $quantity_delivery;
	}
	public function setDate($date)
	{
		$this->date = $date;
	}
	

	// Liste des fonctions spécifiques
	// Ici vide
}