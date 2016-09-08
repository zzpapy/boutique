<?php 
class Caddy

{
	// Propriétés
	private $id_caddy  ;
	private $id_user  ;
	private $full_price;
	private $date ;
	private $status;
	
	

	// Méthodes
	// Liste des getters
	public function getIdCaddy()
	{
		return $this->id_caddy;
	}
	public function getIdUser()
	{
		return $this->id_user;
	}
	public function getFullPrice()
	{
		return $this->full_price;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getStatus()
	{
		return $this->status;
	}
	

	// Liste des setters
	public function setCaddy($caddy)
	{
		
			$this->caddy = $caddy;
	}
	public function setIdUser($id_user)
	{
		
			$this->id_user = $id_user;
	}
	public function setFullPrice($full_price)
	{
		
			$this->full_price = $full_price;
	}
	public function setDate($date)
	{
		$this->date = $date;
	}
	public function setStatus($status)
	{
		$this->status = $status;
	}
	
	

	// Liste des fonctions spécifiques
	// Ici vide
}

?>