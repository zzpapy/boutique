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
		$query = "SELECT * FROM category";
		$res = mysqli_query($this->db, $query);
		while ($category = mysqli_fetch_object($res, "category"))
			$list[] = $category;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM category WHERE id_category='".$id."'";
		$res = mysqli_query($this->db, $query);
		$category = mysqli_fetch_object($res, "category");
		return $category;
	}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }

	public function save(category $category)// la variable $category DOIT etre de la classe category -> Type hinting
	{
		
		$title = mysqli_real_escape_string($this->db, $category->getTitle());
		$id_category = $category->getIdCategory();
		if ($id_author == $_SESSION['id'])
		{
			$query = "UPDATE category SET title='".$title."' WHERE id='".$id_category."'";
			mysqli_query($this->db, $query);
			return $this->findById($id_category);
		}
	}

	public function remove(category $category)
	{
		$id_category = $category->getIdCategory();
		$title = $category->getTitle();
		
		if ($id_category == $_SESSION['id'])// || $_SESSION['admin'] === true)
		{
			$query = "DELETE FROM categorys WHERE id='".$id_category."'";
			mysqli_query($this->db, $query);
		}
	}

	public function create ($title)
	{
		$category = new category();
		
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