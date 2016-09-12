<?php
class Rel_caddy_productManager
{
	
	private $db;
	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$query = "SELECT * FROM rel_caddy_product";
		$res = mysqli_query($this->db, $query);
		while ($rel_caddy_product = mysqli_fetch_object($res, "Rel_caddy_product"))
			$list[] = $rel_caddy_product;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM rel_caddy_product WHERE id_rel_caddy_product='".$id."'";
		$res = mysqli_query($this->db, $query);
		$rel_caddy_product = mysqli_fetch_object($res, "Rel_caddy_product");
		return $rel_caddy_product;
	}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }

	// public function save(rel_caddy_product $rel_caddy_product)// la variable $rel_caddy_product DOIT etre de la classe rel_caddy_product -> Type hinting
	// {
	// 	$email = mysqli_real_escape_string($this->db, $rel_caddy_product->getemail());
	// 	$pseudo = mysqli_real_escape_string($this->db, $rel_caddy_product->getpseudo());
	// 	$id_rel_caddy_product = $rel_caddy_product->getId();
	// 	$apassword = mysqli_real_escape_string($this->db, $rel_caddy_product->getpassword());
	// 	if ($id_author == $_SESSION['id'])
	// 	{
	// 		$query = "UPid_product rel_caddy_products SET pseudo='".$pseudo."', email='".$email."' WHERE id='".$id_rel_caddy_product."'";
	// 		mysqli_query($this->db, $query);
	// 		return $this->findById($id_rel_caddy_product);
	// 	}
	// }

	public function remove(Rel_caddy_product $rel_caddy_product)
	{
		$id_caddy = $rel_caddy_product->getIdCaddy();
		$id_product = $rel_caddy_product->getIdProduct();
		$quantity = $rel_caddy_product->getQuantity();
		if ($id_caddy == $_SESSION['id'])// || $_SESSION['admin'] === true)
		{
			$query = "DELETE FROM rel_caddy_products WHERE id='".$id_rel_caddy_product."'";
			mysqli_query($this->db, $query);
		}
	}

	public function create ($password,$mail,$name,$firstname,$address,$phone,$admin)
	{
		$rel_caddy_product = new Rel_caddy_product();
		$rel_caddy_product -> setIdProduct($id_product);
		$rel_caddy_product->setQuantity($quantity);
		$rel_caddy_product->setIdCaddy($id_caddy);
		
		
		$id_product = mysqli_real_escape_string($this->db, $rel_caddy_product->getIdProduct());
		$quantity = mysqli_real_escape_string($this->db, $rel_caddy_product-> getquantity());
		$id_caddy = mysqli_real_escape_string($this->db, $rel_caddy_product-> getIdCaddy());
		$query = "INSERT INTO rel_caddy_product (id_product, id_caddy, id_caddy,note 
			,id_author ) 
		VALUES('".$id_product."', '".$id_caddy."', '".$id_caddy."')";
		mysqli_query($this->db, $query);
		// $id_rel_caddy_product = mysqli_insert_id($this->db);
		return $this->findById($id_rel_caddy_product);
	}
}
?>