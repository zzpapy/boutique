<?php
class CommentManager
{
	
	private $db;
	public function __construct($db)
	{
		$this->db = $db;
	}

	public function findAll()
	{
		$query = "SELECT * FROM comment";
		$res = mysqli_query($this->db, $query);
		while ($comment = mysqli_fetch_object($res, "Comment"))
			$list[] = $comment;
		return $list;
	}
	public function findById($id)
	{
		$id = intval($id);
		$query = "SELECT * FROM comment WHERE id_comment='".$id."'";
		$res = mysqli_query($this->db, $query);
		$comment = mysqli_fetch_object($res, "Comment");
		return $comment;
	}
	// public function find($id)
	// {
	// 	return $this->findById($id);
	// }

	// public function save(comment $comment)// la variable $comment DOIT etre de la classe comment -> Type hinting
	// {
	// 	$email = mysqli_real_escape_string($this->db, $comment->getemail());
	// 	$pseudo = mysqli_real_escape_string($this->db, $comment->getpseudo());
	// 	$id_comment = $comment->getId();
	// 	$apassword = mysqli_real_escape_string($this->db, $comment->getpassword());
	// 	if ($id_author == $_SESSION['id'])
	// 	{
	// 		$query = "UPDATE comments SET pseudo='".$pseudo."', email='".$email."' WHERE id='".$id_comment."'";
	// 		mysqli_query($this->db, $query);
	// 		return $this->findById($id_comment);
	// 	}
	// }

	public function remove(Comment $comment)
	{
		$id_comment = $comment->getIdComment();
		$id_author = $comment->getIdAuthor();
		if ($id_author == $_SESSION['id'])// || $_SESSION['admin'] === true)
		{
			$query = "DELETE FROM comments WHERE id='".$id_comment."'";
			mysqli_query($this->db, $query);
		}
	}

	public function create ($password,$mail,$name,$firstname,$address,$phone,$admin)
	{
		$comment = new comment();
		$comment -> setDate($date);
		$comment->setContent($content);
		$comment->setIdCaddy($id_caddy);
		$comment->setNote($note);
		$comment-> setIdAuthor($id_author);
		
		$date = mysqli_real_escape_string($this->db, $comment->getDate());
		$content = mysqli_real_escape_string($this->db, $comment-> getContent());
		$query = "INSERT INTO comment (date, content, id_caddy,note 
			,id_author ) 
		VALUES('".$date."', '".$content."', '".$id_caddy."', '".$note."', 
			'".$id_author."')";
		mysqli_query($this->db, $query);
		$id_comment = mysqli_insert_id($this->db);
		return $this->findById($id_comment);
	}
}
?>