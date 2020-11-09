<?php

class Produits{
	public $Nom;
	public $PU;
	public $Categorie;

	function __construct($Nom_Prod,$PU_Prod,$Cat_Prod){
$this->Nom=$Nom_Prod;
$this->PU=$PU_Prod;
$this->Categorie=$Cat_Prod;
	}
	
public function Afficher(){
echo "Le produit : ".$this->Nom." a le prix ".$this->PU." et sa catégorie est  ".$this->Categorie."<br>";
}

}
?>
