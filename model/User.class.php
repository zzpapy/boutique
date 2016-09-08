<?php 
// Définition de la classe Article
class User
{
	// Propriétés
	private $id_user  ;
	private $name  ;
	private $firstname;
	private $mail ;
	private $address;
	private $phone ;
	private $password  ;
	private $admin;
	

	// Méthodes
	// Liste des getters
	public function getIdUser()
	{
		return $this->id;
	}
	public function getNam()
	{
		return $this->name;
	}
	public function getFirstname()
	{
		return $this->firstname;
	}
	public function getMail()
	{
		return $this->mail;
	}
	public function getAddress()
	{
		return $this->address;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getAdmin()
	{
		return $this->admin;
	}

	// Liste des setters
	public function setName($name)
	{
		
			$this->name = $name;
	}
	public function setFirstname($firstname)
	{
		
			$this->firstname = $firstname;
	}
	public function setContent($mail)
	{
		
			$this->mail = $mail;
	}
	public function setIdAddress($address)
	{
		$this->address = $address;
	}
	public function setIdPhone($phone)
	{
		$this->phone = $phone;
	}
	public function setPassword($password)
	{
		
			$this->password = $password;
	}
	public function setAdmin($admin)
	{
		
			$this->admin = $admin;
	}
	

	// Liste des fonctions spécifiques
	// Ici vide
}
// Ne pas mettre le code suivant dans le fichier de la classe
// http://192.168.1.95/partage/models/Article.class.php
// $article = new Article();// Créer un objet a partir d'une classe ça s'appelle l'instancier
// $article->setTitle("Un titre !!");
// echo $article->getTitle();
// $article->setContent("Un Contenuuuuuhuhuhuhuhuu !!");
// echo $article->getContent();
?>