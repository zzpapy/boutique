Prod<?php
// http://192.168.1.95/partage/models/producerManager.class.php
class ProducerManager
{
	
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$list=[];
		$query = "SELECT * FROM producer";
		$res = mysqli_query($this->db, $query);
		while ($producer = mysqli_fetch_object($res, "Producer", [$this->db]))
			$list[] = $producer;
		return $list;
	}
	public function findById($id)
	{
		$query = "SELECT * FROM producer WHERE id_producer='".$id."'";
		$res = mysqli_query($this->db, $query);
		$producer = mysqli_fetch_object($res, "Producer", [$this->db]);
		return $producer;
	}
	public function findByName($name)
		{
			$name = mysqli_real_escape_string($this->db, $name);
			$query = "SELECT * FROM producer WHERE society='".$name."'";
			$res = mysqli_query($this->db, $query);
			$producer = mysqli_fetch_object($res, "Producer", [$this->db]);
			
			return $producer;
		}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }
	// {
	// 	$society = mysqli_real_escape_string($this->db, $producer->getIdGenre());
		
	// 	$id_producer = $producer->getId();
	// 	$users_id = $producer->getIdAuthor();
	// 	if ($users_id == $_SESSION['id'])
	// 	{
	// 		$query = "UPDATE producers SET title='".$title."', content='".$content."' WHERE id='".$id_producer."'";
	// 		mysqli_query($this->db, $query);
	// 		return $this->findById($id_producer);
	// 	}
	// }

	// public function remove(Producer $producer)
	// {
	// 	$id_producer = $producer->getId();
	// 	$users_id = $producer->getIdAuthor();
	// 	if ($users_id == $_SESSION['id'])// || $_SESSION['admin'] === true)
	// 	{
	// 		$query = "DELETE FROM producers WHERE id='".$id_producer."'";
	// 		mysqli_query($this->db, $query);
	// 		var_dump($query, mysqli_error($this->db));
	// 	}
	// }

	public function create($society, $password, $mail, $address,$siret)
	{
		$producer = new Producer($this->db);
		$producer->setSociety($society);
		$producer->setPassword($password);
		$producer->setMail($mail);
		$producer->setAddress($address);
		$producer->setSiret($siret);
		var_dump($producer);
		
		
		$query = "INSERT INTO producer (society, password, mail, address,siret) 
		VALUES('".$society."','". $password."','". $mail."','".$address."','".$siret."')";
		mysqli_query($this->db, $query);
		var_dump($query, mysqli_error($this->db));
		$id_producer = mysqli_insert_id($this->db);
		return $this->findById($id_producer);
	}
}
?>