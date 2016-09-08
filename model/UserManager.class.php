<?php
class UserManager
{
	private $db;
	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$query = "SELECT * FROM user";
		$res = mysqli_query($this->db, $query);
		while ($user = mysqli_fetch_object($res, "User"))
			$list[] = $user;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM user WHERE id_user='".$id_user."'";
		$res = mysqli_query($this->db, $query);
		$user = mysqli_fetch_object($res, "User");
		return $user;
	}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }

	// public function save(User $user)// la variable $user DOIT etre de la classe User -> Type hinting
	// {
	// 	$email = mysqli_real_escape_string($this->db, $user->getemail());
	// 	$pseudo = mysqli_real_escape_string($this->db, $user->getpseudo());
	// 	$id_user = $user->getId();
	// 	$apassword = mysqli_real_escape_string($this->db, $user->getpassword());
	// 	if ($id_author == $_SESSION['id'])
	// 	{
	// 		$query = "UPDATE users SET pseudo='".$pseudo."', email='".$email."' WHERE id='".$id_user."'";
	// 		mysqli_query($this->db, $query);
	// 		return $this->findById($id_user);
	// 	}
	// }

	// public function remove(User $user)
	// {
	// 	$id_user = $user->getId();
	// 	$id_author = $user->getIdAuthor();
	// 	if ($id_author == $_SESSION['id'])// || $_SESSION['admin'] === true)
	// 	{
	// 		$query = "DELETE FROM users WHERE id='".$id_user."'";
	// 		mysqli_query($this->db, $query);
	// 	}
	// }

	public function create ($password,$mail,$name,$firstname,$address,$phone,$admin)
	{
		$user = new User();
		$user -> setName($name);
		$user->setPassword($password);
		$user->setMail($mail);
		$user->setFirstname($firstname);
		$user-> setAddress($address);
		$user-> setPhone($phone);
		$user-> setAdmin($admin);
		$email = mysqli_real_escape_string($this->db, $user->getMail());
		$password = mysqli_real_escape_string($this->db, getPassword());
		$query = "INSERT INTO user (password, mail, name,firstname 
			,address ,phone,admin) 
		VALUES('".$password."', '".$mail."', '".$name."', '".$firstname."', 
			'".$address."', '".$phone."', '".$admin."')";
		mysqli_query($this->db, $query);
		$id_user = mysqli_insert_id($this->db);
		return $this->findById($id);
	}
}
?>