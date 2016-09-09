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
	public function findByProduct(Product $product)
	{
		$list=[];
		$query = "SELECT * FROM rel_caddy_product
			LEFT JOIN caddy ON rel_caddy_product.id_caddy=caddy.id_caddy
			WHERE id_product='".$product->getId()."'";
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
		$id_user = mysqli_real_escape_string($this->db, $caddy->getIdUser());
		$full_price = mysqli_real_escape_string($this->db, $caddy->getFullPrice());
		$date = mysqli_real_escape_string($this->db, $caddy->getDate());
		$status = mysqli_real_escape_string($this->db, $caddy->getStatus());
		if ($id_caddy == $_SESSION['id'])
		{
			$query = "UPDATE caddy SET id_caddy='".$id_caddy."', 
				id_user='".$id_user."', 
				full_price='".$full_price."', 
				id_user='".$id_user."', 
				date='".$date."', 
				caddy='".$caddy."' WHERE id_caddy='".$id_caddy."'";
			mysqli_query($this->db, $query);
			// $query = "DELETE / INSERT rel_caddy_product"
			return $this->findById($id_caddy);
		}
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

	public function create($full_price, $date, $status)
	{
		$caddy = new Caddy($this->db);
		$id_user = mysqli_real_escape_string($this->db, $caddy->getIdUser());
		$caddy -> setFullPrice($full_price);
		$caddy->setDate($date);
		$caddy->setStatus($status);
		
		$query = "INSERT INTO caddy (full_price, date, status) 
		VALUES('".$full_price."', '".$date."', '".$status."')";
		mysqli_query($this->db, $query);
		$id_caddy = mysqli_insert_id($this->db);
		return $this->findById($id_caddy);
	}
}
?>