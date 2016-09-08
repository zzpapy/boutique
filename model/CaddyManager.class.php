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
		$query = "SELECT * FROM caddy";
		$res = mysqli_query($this->db, $query);
		while ($caddy = mysqli_fetch_object($res, "Caddy"))
			$list[] = $caddy;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM caddy WHERE id_caddy='".$id_caddy."'";
		$res = mysqli_query($this->db, $query);
		$caddy = mysqli_fetch_object($res, "Caddy");
		return $caddy;
	}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }

	public function save(Caddy $caddy)// la variable $caddy DOIT etre de la classe caddy -> Type hinting
	{
		$email = mysqli_real_escape_string($this->db, $caddy->getemail());
		$pseudo = mysqli_real_escape_string($this->db, $caddy->getpseudo());
		$id_caddy = $caddy->getId();
		$apassword = mysqli_real_escape_string($this->db, $caddy->getpassword());
		if ($id_author == $_SESSION['id'])
		{
			$query = "UPDATE caddys SET pseudo='".$pseudo."', email='".$email."' WHERE id='".$id_caddy."'";
			mysqli_query($this->db, $query);
			return $this->findById($id_caddy);
		}
	}

	// public function remove(caddy $caddy)
	// {
	// 	$id_caddy = $caddy->getId();
	// 	$id_author = $caddy->getIdAuthor();
	// 	if ($id_author == $_SESSION['id'])// || $_SESSION['admin'] === true)
	// 	{
	// 		$query = "DELETE FROM caddys WHERE id='".$id_caddy."'";
	// 		mysqli_query($this->db, $query);
	// 	}
	// }

	public function create($password,$mail '".$name '".$firstname 
			'".$adress '".$phone '".$admin.)
	{
		$caddy = new caddy();
		$caddy -> setsetName($name)
		$caddy->setPassword($password);
		$caddy->setMail($mail);
		$caddy->setFirstname($firstname);
		$caddy-> setAdress($adress);
		$caddy-> setPhone($phone);
		$caddy-> setAdmin($admin);
		$email = mysqli_real_escape_string($this->db, $caddy->getEmail());
		$password = mysqli_real_escape_string($this->db, $getPassword());
		$query = "INSERT INTO caddy (password, mail, name) 
		VALUES('".$password."', '".$mail."', '".$name."', '".$firstname."', 
			'".$adress."', '".$phone."', '".$admin."')";
		mysqli_query($this->db, $query);
		$id = mysqli_insert_id($this->db);
		return $this->findById($id);
	}
}
?>