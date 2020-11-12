<?php

class Clients{
	public $Nom;
	public $Prenom;
	public $Tel;
	public $adresse;

	function __construct($Nom,$Prenom,$Tel,$adresse){
$this ->Nom=$Nom;
$this ->Prenom=$Prenom;
$this ->Tel=Tel;
$this ->adresse=$adresse
	}
	
public function Afficher(){
echo "Le nom est : ".$this->Nom." le prenom est ".$this->Prenom." le tel est  ".$this->Tel. "l'adresse est est : ". $this ->adresse. "<br>";
}

}
?>
