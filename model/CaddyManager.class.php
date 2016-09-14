<?php

class CaddyManager
{
	private $db;
	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$list=[];
		$query = "SELECT * FROM caddy";
		$res = mysqli_query($this->db, $query);
		while ($caddy = mysqli_fetch_object($res, "Caddy", [$this->db]))
			$list[] = $caddy;
		return $list;
	}
	public function findCurrentByUser(User $user)
	{
		$query = "SELECT * FROM caddy WHERE id_user='".$user->getIdUser()."' AND status='1'";// /!\
		$res = mysqli_query($this->db, $query);
		$caddy = mysqli_fetch_object($res, "Caddy", [$this->db]);
		return $caddy;
	}
	public function findByUser(User $user)
	{
		$list=[];
		$query = "SELECT * FROM caddy WHERE id_user='".$user->getIdUser()."'";
		$res = mysqli_query($this->db, $query);
		while ($caddy = mysqli_fetch_object($res, "Caddy", [$this->db]))
			$list[] = $caddy;
		return $list;
	}
	public function findByProduct(Product $product)
	{
		$list=[];
		$query = "SELECT * FROM rel_caddy_product
			LEFT JOIN caddy ON rel_caddy_product.id_caddy=caddy.id_caddy
			WHERE id_product='".$product->getIdProduct()."'";
		$res = mysqli_query($this->db, $query);
		while ($caddy = mysqli_fetch_object($res, "Caddy", [$this->db]))
			$list[] = $caddy;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM caddy WHERE id_caddy='".$id."'";
		$res = mysqli_query($this->db, $query);
		$caddy = mysqli_fetch_object($res, "Caddy", [$this->db]);
		return $caddy;
	}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }
	public function save(Caddy $caddy)// la variable $article DOIT etre de la classe Article -> Type hinting
	{
		$id_caddy = $caddy->getIdCaddy();
		$id_user = mysqli_real_escape_string($this->db, $caddy->getUser()->getIdUser());
		$date = mysqli_real_escape_string($this->db, $caddy->getDate());
		$status = mysqli_real_escape_string($this->db, $caddy->getStatus());
		$full_price = 0;
		$products = $caddy->getProducts();
		$count = 0;
		$max = sizeof($products);
		while ($count < $max)
		{
			$full_price += $products[$count]->getPriceSell() * $products[$count]->getQuantity();
			$count++;
		}
		$caddy->setFullPrice($full_price);
		$full_price = floatval($caddy->getFullPrice());
		$query = "UPDATE caddy SET id_user='".$id_user."', 
			full_price='".$full_price."' WHERE id_caddy='".$id_caddy."'";
		mysqli_query($this->db, $query);
		$query = "DELETE FROM rel_caddy_product WHERE id_caddy='".$id_caddy."'";
		mysqli_query($this->db, $query);
		$count = 0;
		$max = sizeof($products);
		while ($count < $max)
		{
			$query = "INSERT INTO rel_caddy_product (id_caddy, id_product, quantity) VALUES('".$id_caddy."', '".$products[$count]->getIdProduct()."', '".$products[$count]->getQuantity()."')";
			var_dump($query);
			mysqli_query($this->db, $query);
			$count++;
		}
		return $this->findById($id_caddy);
	}

	public function remove(Caddy $caddy)
	{
		$id_caddy = $caddy->getIdCaddy();
		$status = $caddy->getStatus();
		if ($id_caddy == $_SESSION['id'] && $status=="1")
		{
			$query = "DELETE FROM caddy WHERE id_caddy='".$id_caddy."'";
			mysqli_query($this->db, $query);
		}
	}

	public function create(User $user)
	{
		$full_price = 0;
		$date = date('Y\-m\-d H:i:s');
		$status = 1;
		$caddy = new Caddy($this->db);
		$caddy -> setFullPrice($full_price);
		$caddy->setDate($date);
		$caddy->setStatus($status);
		$caddy->setUser($user);
		
		$full_price = $caddy->getFullPrice();
		$date = $caddy->getDate();
		$status = $caddy->getStatus();
		$id_user = $caddy->getUser()->getIdUser();
		$query = "INSERT INTO caddy (full_price, date, status, id_user) 
			VALUES('".$full_price."', '".$date."', '".$status."', '".$id_user."')";
		mysqli_query($this->db, $query);
		$id_caddy = mysqli_insert_id($this->db);
		return $this->findById($id_caddy);
	}
}
?>