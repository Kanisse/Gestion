<?php

class Produits{
	public $Date_comm;
	public $Adresse_Comm;

	function __construct($Date_comm,$Adresse_Comm){
$this->Date_comm=$Date_comm;
$this->Adresse_Comm=$Adresse_Comm;
	}
	
public function Afficher(){
echo "La date de la commande est : ".$this->Date_comm." et l'adresse est :  ".$this->Adresse_Comm."<br>";
}

}
?>
