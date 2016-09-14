<?php
class CategoryManager
{
	
	
	private $db;
	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$list=[];
		$query = "SELECT * FROM category";
		$res = mysqli_query($this->db, $query);
		while ($category = mysqli_fetch_object($res, "Category",[$this->db]))
			$list[] = $category;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM category WHERE id_category='".$id."'";
		$res = mysqli_query($this->db, $query);
		$category = mysqli_fetch_object($res, "Category",[$this->db]);
		return $category;
	}
	// public function findByName($name)
	// {
	// 	$name = $name;
	// 	$query = "SELECT * FROM category WHERE title='".$name."'";
	// 	$res = mysqli_query($this->db, $query);
	// 	$category = mysqli_fetch_object($res, "Category",[$this->db]);
	// 	return $category;
	// }
	// public function find($name)
	// {
	// 	return $this->findById($id);
	// }

	public function save(Category $category)// la variable $category DOIT etre de la classe category -> Type hinting
	{
		
		$title = mysqli_real_escape_string($this->db, $category->getTitle());
		$id_category = $category->getIdCategory();
		if (isset($_SESSION["admin"]))
		{
			$query = "UPDATE category SET title='".$title."' WHERE id='".$id_category."'";
			mysqli_query($this->db, $query);
			return $this->findById($id_category);
		}
	}

	public function remove(Category $category)
	{
		$id_category = $category->getIdCategory();
		$title = $category->getTitle();
		
		if ($id_category == $_SESSION['id'])// || $_SESSION['admin'] === true)
		{
			$query = "DELETE FROM category WHERE id='".$id_category."'";
			mysqli_query($this->db, $query);
		}
	}

	public function create ($title)
	{
		$category = new Category($this->db);
		
		$category->setTitle($title);
		
		
		$title = mysqli_real_escape_string($this->db, $category->getTitle());
		$query = "INSERT INTO category (title ) 
		VALUES('".$title."')";
		mysqli_query($this->db, $query);
		$id_category = mysqli_insert_id($this->db);
		return $this->findById($id_category);
	}
}
?>