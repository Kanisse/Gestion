<?php

class Clients{
	public $Nom;
	public $Prenom;
	public $Tel;

	function __construct($Nom_Prod,$PU_Prod,$Cat_Prod){
$this->Nom=$Nom_Prod;
$this->PU=$PU_Prod;
$this->Age=$Cat_Prod;
	}
	
public function Afficher(){
echo "Le produit : ".$this->Nom." a le prix ".$this->PU." et sa catégorie est  ".$this->Age."<br>";
}

}
?>
