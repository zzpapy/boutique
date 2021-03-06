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
		while ($product = mysqli_fetch_object($res, "Product", [$this->db]))
			$list[] = $product;
		return $list;
	}
	public function search($search)
	{
		$search = mysqli_real_escape_string($this->db, $search);
		$list=[];
		$query = "SELECT * FROM product WHERE name LIKE '%".$search."%' OR description LIKE '%".$search."%'";
		$res = mysqli_query($this->db, $query);
		while ($product = mysqli_fetch_object($res, "Product", [$this->db]))
			$list[] = $product;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM product WHERE id_product='".$id."'";
		$res = mysqli_query($this->db, $query);

		$product = mysqli_fetch_object($res, "Product", [$this->db]);

		return $product;
	}
	public function findByCaddy(Caddy $caddy)
	{
		$list=[];

		$query = "SELECT * FROM rel_caddy_product LEFT JOIN product ON rel_caddy_product.id_product=product.id_product WHERE id_caddy='".$caddy->getIdCaddy()."'";
		$res = mysqli_query($this->db, $query);
		while ($product = mysqli_fetch_object($res, "Product", [$this->db]))
			$list[] = $product;
		return $list;
	}
	public function findByCategory(Category $category)
	{
		$list=[];
		$query = "SELECT * FROM product  WHERE id_category='".$category->getIdCategory()."'";
		$res = mysqli_query($this->db, $query);
		while ($product = mysqli_fetch_object($res, "Product",[$this->db]))
			$list[] = $product;
		return $list;
	}
	public function findByProducer(Producer $producer)
	{
		$list=[];
		$query = "SELECT * FROM product  WHERE id_producer='".$producer->getIdProducer()."'";
		$res = mysqli_query($this->db, $query);
		while ($product = mysqli_fetch_object($res, "Product",[$this->db]))
			$list[] = $product;
		return $list;
	}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }

	public function save(Product $product)// la variable $product DOIT etre de la classe product -> Type hinting
	{
		$id_product = $product->getIdProduct();
		$name = mysqli_real_escape_string($this->db, $product->getName());
		$price_buy = mysqli_real_escape_string($this->db, $product->getPriceBuy());
		$margin_sale = mysqli_real_escape_string($this->db, $product->getMarginSale());
		$price_sell = mysqli_real_escape_string($this->db, $product->getPriceSell());
		$description = mysqli_real_escape_string($this->db, $product->getDescription());
		$stock = mysqli_real_escape_string($this->db, $product->getStock());
		$image = mysqli_real_escape_string($this->db, $product->getImage());
		
		
		
		if (isset( $_SESSION['admin']))
		{
			$query = "UPDATE product SET name='".$name."', 
			price_buy='".$price_buy."',
			margin_sale='".$margin_sale."',
			price_sell='".$price_sell."',
			description='".$description."',
			stock='".$stock."',
			image='".$image."'
			WHERE id_product='".$id_product."'";
			mysqli_query($this->db, $query);
			var_dump($query,mysqli_error($this->db));
			return $this->findById($id_product);
		}
	}

	// public function remove(Product $product)
	// {
	// 	$id_product = $product->getId();
	// 	$id_author = $product->getIdAuthor();
	// 	if ($id_author == $_SESSION['id'])// || $_SESSION['admin'] === true)
	// 	{
	// 		$query = "DELETE FROM products WHERE id='".$id_product."'";
	// 		mysqli_query($this->db, $query);
	// 	}
	// }

	public function create (Category $category,$name,$price_buy,$margin_sale,$price_sell,$description,$image)
	{
		$product = new Product($this-> db);

		$product -> setName($name);
		$product->setPriceBuy($price_buy);
		$product-> setMarginSale($margin_sale);
		$product-> setPriceSell($price_sell);
		$product-> setDescription($description);
		
		$product-> setImage($image);
		
		
		$product-> setCategory($category);
		
		$price_buy = $product->getPriceBuy();
		$name = $product->getName();
		// ......
		
		$id_category = $product->getCategory()->getIdCategory();


		$query = "INSERT INTO product (price_buy,  name 
			,margin_sale ,price_sell,description,image,
			id_category) 
		VALUES('".$price_buy."',  '".$name."', 
			'".$margin_sale."',  '".$price_sell."',
			'".$description."',
			
			'".$image."',
			'".$id_category."')";
		mysqli_query($this->db, $query);
		var_dump($query, mysqli_error($this->db));
		$id_product = mysqli_insert_id($this->db);
		return $this->findById($id_product);
	}
}
?>