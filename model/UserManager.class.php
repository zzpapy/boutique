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
			while ($user = mysqli_fetch_object($res, "User", [$this->db]))
				$list[] = $user;
			return $list;
		}
		public function findById($id)
		{
			$id = intval($id);
			$query = "SELECT * FROM user WHERE id_user='".$id."'";
			$res = mysqli_query($this->db, $query);
			$user = mysqli_fetch_object($res, "User", [$this->db]);
			return $user;
		}
		public function findParticular()
		{
			$query = "SELECT * FROM user WHERE admin=0";
			$res = mysqli_query($this->db, $query);
			while ($user = mysqli_fetch_object($res, "User", [$this->db]))
				$list[] = $user;
			return $list;
		}

		public function findByName($name)
		{
			$name = mysqli_real_escape_string($this->db, $name);
			$query = "SELECT * FROM user WHERE name='".$name."'";
			$res = mysqli_query($this->db, $query);
			$user = mysqli_fetch_object($res, "User", [$this->db]);
			
			return $user;
		}

		public function create ($password, $mail, $name, $firstname, $address, $phone, $admin)
		{
			$user = new User($this->db);
			$user-> setName($name);
			$user-> setPassword($password);
			$user-> setMail($mail);
			$user-> setFirstname($firstname);
			$user-> setAddress($address);
			$user-> setPhone($phone);
			$user-> setAdmin($admin);

			$mail = mysqli_real_escape_string($this->db, $user->getMail());

			$name = mysqli_real_escape_string($this->db, $user->getName());
			$firstname = mysqli_real_escape_string($this->db, $user->getFirstname());
			$address = mysqli_real_escape_string($this->db, $user->getAddress());
			$phone = mysqli_real_escape_string($this->db, $user-> getPhone());
			$password = mysqli_real_escape_string($this->db, $user->getPassword());
			$admin = mysqli_real_escape_string($this->db, $user->getAdmin());
			
			$query = "INSERT INTO user (password, mail, name, firstname, address, phone, admin) 
			VALUES('".$password."', '".$mail."', '".$name."', '".$firstname."', 
				'".$address."', '".$phone."', '".$admin."')";
			mysqli_query($this->db, $query);
			
			// var_dump(mysqli_error($this->db), mysqli_errno($this->db));

			if (mysqli_errno($this->db) == 1062){
				throw new Exception("Adresse mail déjà existante");
			}
			$id_user = mysqli_insert_id($this->db);
			return $this->findById($id_user);
		}
	}
?>				