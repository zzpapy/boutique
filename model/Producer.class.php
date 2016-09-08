
<?php 
class Producer
{
	
	private $id_producer  ;
	private $society  ;
	private $password  ;
	private $mail ;
	private $adress;
	private $siret;

	// Méthodes
	// Liste des getters
	public function getIdProducer()
	{
		return $this->id_producer;
	}
	public function getSociety()
	{
		return $this->society;
	}
	public function getPasswor()
	{
		return $this->password;
	}
	public function getMail()
	{
		return $this->mail;
	}
	public function getIdAdress()
	{
		return $this->adress;
	}
	public function getIdSiret()
	{
		return $this->siret;
	}

	// Liste des setters
	public function setSociety($society)
	{
		
			$this->society = $society;
	}
	public function setPassword($password)
	{
		
			$this->password = $password;
	}
	
	
	public function setMail($mail)
	{
		
			$this->mail = $mail;
	}
	public function setAdress($adress)
	{
		$this->adress = $adress;
	}
	public function setSiret($siret)
	{
		$this->siret = $siret;
	}

	// Liste des fonctions spécifiques
	// Ici vide
}

?>