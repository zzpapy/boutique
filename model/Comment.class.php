<?php 
// Définition de la classe Article
class Comment
{
	
	// Propriétés
	private $id_comment  ;
	private $date  ;
	private $content;
	private $id_caddy ;
	private $note;
	private $id_author ;
	private $author;
	private $caddy;
	private $db;
	
	public function __construct($db)
	{
		$this->db = $db;
	}

	// Méthodes
	// Liste des getters
	public function getIdComment()
	{
		return $this->id_comment;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function getNote()
	{
		return $this->note;
	}
	

	// Liste des setters
	public function setAuthor(User $author)
	{
		$this->author = $author;
		$this->id_author = $author->getIdUser();
	}
	public function setCaddy(Caddy $caddy)
	{
		$this->caddy = $caddy;
		$this->id_caddy = $caddy->getIdCaddy();
	}
	public function setDate($date)
	{
		
			$this->date = $date;
	}
	public function setContent($content)
	{
		
			$this->content = $content;
	}
	// public function setIdCaddy($id_caddy)
	// {
	// 	$this->id_caddy = $id_caddy;
	// }
	public function getCaddy()
	{
		// Si l'auteur n'a pas encore été récupéré ou n'est pas connu
		if (!$this->caddy)
		{
			// Il faut donc aller le chercher !
			// On récupère le manager qui va bien (ici, UserManager)
			$manager = new CaddyManager($this->db);
			// Et on lui demande d'aller chercher l'User qui correspond à id_author
			$this->caddy = $manager->findById($this->id_caddy);
		}
		// On peut du coup retourner $this->author
		return $this->caddy;
	}
	public function getAuthor()
	{
		// Si l'auteur n'a pas encore été récupéré ou n'est pas connu
		if (!$this->author)
		{
			// Il faut donc aller le chercher !
			// On récupère le manager qui va bien (ici, UserManager)
			$manager = new UserManager($this->db);
			// Et on lui demande d'aller chercher l'User qui correspond à id_author
			$this->author = $manager->findById($this->id_author);
		}
		// On peut du coup retourner $this->author
		return $this->author;
	}




	public function setCaddy(Caddy $caddy)
	{
		$this->id_caddy = $caddy->getId();
		$this->caddy = $caddy;
	}
	public function setAuthor(User $author)
	{
		$this->id_author = $author->getId();
		$this->author = $author;
	}



	// public function setIdAuthor($id_author)
	// {
	// 	$this->id_author = $id_author;
	// }
	public function setNote($note)
	{
		
			$this->note = $note;
	}
	
	

	// Liste des fonctions spécifiques
	// Ici vide
}

?>