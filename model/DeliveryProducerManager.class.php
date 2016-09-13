<?php

class DeliveryProducerManager
{
	private $db;
	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$list=[];
		$query = "SELECT * FROM delivery_producer";
		$res = mysqli_query($this->db, $query);
		while ($delivery_producer = mysqli_fetch_object($res, "DeliveryProducer", [$this->db]))
			$list[] = $delivery_producer;
		return $list;
	}
	public function findByProducer(Producer $producer)
	{
		$list=[];
		$query = "SELECT * FROM delivery_producer WHERE id_producer='".$producer->getIdProducer()."'";
		$res = mysqli_query($this->db, $query);
		while ($delivery_producer = mysqli_fetch_object($res, "DeliveryProducer", [$this->db]))
			$list[] = $delivery_producer;
		return $list;
	}
	public function findByProduct(Product $product)
	{
		$list=[];
		$query = "SELECT * FROM delivery_producer WHERE id_product='".$product->getIdProduct()."'";
		$res = mysqli_query($this->db, $query);
		while ($delivery_producer = mysqli_fetch_object($res, "DeliveryProducer", [$this->db]))
			$list[] = $delivery_producer;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM delivery_producer WHERE id_delivery_producer='".$id."'";
		$res = mysqli_query($this->db, $query);
		$delivery_producer = mysqli_fetch_object($res, "DeliveryProducer", [$this->db]);
		return $delivery_producer;
	}
	public function getTotalInfo()
	{
		$list=[];
		$query = "SELECT SUM(quantity_delivery) AS total_quantity, SUM(price) AS total_price
				  FROM delivery_producer";
		$res = mysqli_query($this->db, $query);
		$total_delivery = mysqli_fetch_assoc($res);
		return $total_delivery;
	}
	public function save(DeliveryProducer $delivery_producer)// la variable $article DOIT etre de la classe Article -> Type hinting
	{
		$id_delivery_producer = $delivery_producer->getIdDeliveryProducer();
		$id_produit = intval($delivery_producer->getProduct()->getIdProduct());
		$id_producer = intval($delivery_producer->getProducer()->getIdProducer());
		$quantity_delivery = floatval($delivery_producer->getQuantityDelivery());
		$date = mysqli_real_escape_string($this->db, $delivery_producer->getDate());
		$query = "UPDATE delivery_producer SET
			id_product='".$id_user."', 
			id_producer='".$id_producer."', 
			quantity_delivery='".$quantity_delivery."', 
			date='".$date."' WHERE id_delivery_producer='".$id_delivery_producer."'";
		mysqli_query($this->db, $query);
		// $query = "DELETE / INSERT rel_delivery_producer_product" /!\
		return $this->findByIdProducer($id_delivery_producer);
	}

	public function remove(DeliveryProducer $delivery_producer)
	{
		$id_delivery_producer = $delivery_producer->getIdDeliveryProducer();
		$query = "DELETE FROM delivery_producer WHERE id_delivery_producer='".$id_delivery_producer."'";
		mysqli_query($this->db, $query);
	}

	public function create(Product $product, Producer $producer, $quantity_delivery)
	{
		$delivery_producer = new DeliveryProducer($this->db);
		$delivery_producer -> setQuantityDelivery($quantity_delivery);
		$delivery_producer->setProduct($product);
		$delivery_producer->setProducer($producer);
		$delivery_producer->setPrice($quantity_delivery * $product->getPriceBuy());
		
		$quantity_delivery = $delivery_producer->getQuantityDelivery();
		$id_product = $delivery_producer->getProduct()->getIdProduct();
		$id_producer = $delivery_producer->getProducer()->getIdProducer();
		$price = $delivery_producer->getPrice();
		$query = "INSERT INTO delivery_producer (quantity_delivery, id_product, id_producer, price) 
			VALUES('".$quantity_delivery."', '".$id_product."', '".$id_producer."', '".$price."')";
		$res = mysqli_query($this->db, $query);
		if ($res)
		{
			$id_delivery_producer = mysqli_insert_id($this->db);
			$productManager = new ProductManager($this->db);
			$product->addStock($quantity_delivery);
			$productManager -> save($product);
			return $this->findById($id_delivery_producer);
		}
	}
}
?>