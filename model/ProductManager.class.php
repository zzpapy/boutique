<?php
class ProductManager
{
	
	private $db;
	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$list=[];
		$query = "SELECT * FROM product";
		$res = mysqli_query($this->db, $query);
		while ($product = mysqli_fetch_object($res, "product"))
			$list[] = $product;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM product WHERE id_product='".$id."'";
		$res = mysqli_query($this->db, $query);
		$product = mysqli_fetch_object($res, "product");
		return $product;
	}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }

	public function save(product $product)// la variable $product DOIT etre de la classe product -> Type hinting
	{
		$id_product = $product->getId();
		$name = mysqli_real_escape_string($this->db, $product->getName());
		$price_buy = mysqli_real_escape_string($this->db, $product->getPriceBuy());
		$margin_sale = mysqli_real_escape_string($this->db, $product->getMarginSale());
		$price_sell = mysqli_real_escape_string($this->db, $product->getPriceSell());
		$description = mysqli_real_escape_string($this->db, $product->getDescrition());
		$stock = mysqli_real_escape_string($this->db, $product->getStock());
		$image = mysqli_real_escape_string($this->db, $product->getImage());
		$id_producer = intval($this->db, $product->getIdProducer());
		$id_category = intval($this->db, $product->getIdCategory());
		
		if ($id_author == $_SESSION['id'])
		{
			$query = "UPDATE products SET name='".$name."', 
			price_buy='".$price_buy."',
			margin_sale='".$margin_sale."',
			price_sell='".$price_sell."',
			description='".$description."',
			stock='".$stock."',
			image='".$image."',
			id_producer='".$id_producer."',
			id_category='".$id_category."' WHERE id='".$id_product."'";
			mysqli_query($this->db, $query);
			return $this->findById($id_product);
		}
	}

	// public function remove(product $product)
	// {
	// 	$id_product = $product->getId();
	// 	$id_author = $product->getIdAuthor();
	// 	if ($id_author == $_SESSION['id'])// || $_SESSION['admin'] === true)
	// 	{
	// 		$query = "DELETE FROM products WHERE id='".$id_product."'";
	// 		mysqli_query($this->db, $query);
	// 	}
	// }

	public function create ($name,$price_buy,$margin_sale,$price_sell,$description,$stock,
		$image,$id_producer,$id_category)
	{
		$product = new product();
		$product -> setName($name);
		
		
		$product->setPriceBuy($price_buy);
		$product-> setMarginSell($margin_sale);
		$product-> setPriceSell($price_sell);
		$product-> setDescription($description);
		$product->setStock($stock);
		$product-> setImage($image);
		$product-> setPIdPrducer($id_producer);
		$product-> setIdCategory($id_category);
		$query = "INSERT INTO product (price_buy, mail, name,price_buy 
			,margin_sale ,margin_sale,price_sell,description,stock,image,id_producer,
			id_category) 
		VALUES('".$price_buy."', '".$mail."', '".$name."', '".$price_buy."', 
			'".$margin_sale."', '".$margin_sale."', '".$price_sell."',
			'".$description."',
			'".$stock."',
			'".$image."',
			'".$id_producer."',
			'".$id_category."')";
		mysqli_query($this->db, $query);
		$id_product = mysqli_insert_id($this->db);
		return $this->findById($id_product);
	}
}
?>