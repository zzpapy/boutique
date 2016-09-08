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
	public function getIdCaddy()
	{
		return $this->id_caddy;
	}
	public function getNote()
	{
		return $this->note;
	}
	public function getIdAuthor()
	{
		return $this->id_author;
	}
	

	// Liste des setters
	public function setIdComment($id_comment)
	{
		
			$this->id_comment = $id_comment;
	}
	public function setDate($date)
	{
		
			$this->date = $date;
	}
	public function setContent($content)
	{
		
			$this->content = $content;
	}
	public function setIdCaddy($id_caddy)
	{
		$this->id_caddy = $id_caddy;
	}
	public function setIdAuthor($id_author)
	{
		$this->id_author = $id_author;
	}
	public function setNote($note)
	{
		
			$this->note = $note;
	}
	
	

	// Liste des fonctions spécifiques
	// Ici vide
}

?>