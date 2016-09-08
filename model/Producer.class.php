
<?php 
address
class Producer
{
	
	private $id_producer  ;
	private $society  ;
	private $password  ;
	private $mail ;
	private $address;
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
	public function getAddress()
	{
		return $this->address;
	}
	public function getSiret()
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
	public function setAddress($address)
	{
		$this->address = $address;
	}
	public function setSiret($siret)
	{
		$this->siret = $siret;
	}

	// Liste des fonctions spécifiques
	// Ici vide
}

?>