<?php

class Produits{
	public $Nom;
	public $PU;
	public $Categorie;

	function __construct($Produit1,$Produit2,$Cat_Prod){
$this->Nom=$Produit1;
$this->PU=$Produit2;
$this->Categorie=$Cat_Prod;
	}
	
public function Afficher(){
echo "Le produit : ".$this->Nom." a le prix ".$this->PU." et sa catégorie est  ".$this->Categorie."<br>";
}

}

$P1=new Produits("HP",2300,"Informatique");


$P1->Afficher();

?>
