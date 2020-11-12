
<?php

/**
 * 
 */
class Clients {

	public $Nom;
	public $Prenom;
	public $Age;
	public $Adresse;
	public $Telephone;
	
	function __construct($Nom, $Prenom, $Age, $Adresse, $Telephone) {

		$this->Test=$Nom;
		$this->Prenom=$Prenom;
		$this->Age=$Age;
		$this->Adresse=$Adresse;
		$this->Telephone=$Telephone;

	}

	public function Afficher() {

		echo "Le client se nome ".$this->Nom." ".$this->Prenom.". Il est âgé de ".$this->Age."ans, Il habite à ".$this->Adresse." et vous pouvez le joindre au contact suivant: ".$this->Telephone."<br>";

	}

}

$E1 = new Clients ("FOFANA", "Sékou Ahmed Tidiane", "22", "Salé", "0605676253");
$E2 = new Clients ("Aly", "Camara", "33", "Rabat", "0678745654");

$E1->Afficher();
$E2->Afficher();

?>
