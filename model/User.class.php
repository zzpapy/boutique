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
	private $password2  ;
	private $admin;
	

	// Méthodes
	// Liste des getters
	public function getIdUser()
	{
		return $this->id;
	}
	public function getName()
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
	public function getPhone()
	{
		return $this->phone;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function verifPassword($password, $password2)
	{
		if ($password === $password2) {
			return $this->password; //password_verify
		}
	}
	public function getAdmin()
	{
		return $this->admin;
	}

	// Liste des setters
	public function setName($name)
	{
		if(empty($name)){
			throw new Exception("Veuillez renseigner un nom");
		}
		else if(strlen($name) < 3 || strlen($name) > 63){
			throw new Exception("Mauvaise longueur");
		}
		else{
			$this->name = $name;
		}
	}
	public function setFirstname($firstname)
	{
		if(empty($firstname)){
			throw new Exception("Veuillez renseigner un prenom");
		}
		else if(strlen($firstname) < 3 || strlen($firstname) > 63){
			throw new Exception("Mauvaise longueur");
		}
		else{
			$this->firstname = $firstname;
		}
		
	}
	public function setMail($mail)
	{
		if(empty($mail)){
			throw new Exception("Veuillez renseigner une adresse mail");
		}
		else if(strlen($mail) < 5 || strlen($mail) > 255){
			throw new Exception("Mauvaise longueur");
		}
		elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("Adresse mail non valide");	
		}
		else{
			$this->mail = $mail;
		}
			
	}
	public function setAddress($address)
	{
		$this->address = $address;
	}
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}
	public function setPassword($password)
	{
		//conditions de verification de password
		if(empty($password)){
			throw new Exception("Merci de remplir tout les champs22");
		}
		else if(strlen($password) < 3){
			throw new Exception("Le mot de passe est trop court");
		}
		else{
			$this->password = $password;
			// $this->password = password_hash($password, PASSWORD_DEFAULT);
		}
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