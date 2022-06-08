<?php

class Voiture
{
    public $couleur;
    public $masse;
    public $marque;
    public $vitesse = 0;

    public function calculEnergieCinetique() : float
    {
        $energieCinetique = 0.5 * $this->masse * ($this->vitesse ** 2);
        return $energieCinetique;
    }

    public function afficherMessage()
    {
        echo "Je suis une voiture";
    }
}

$voiture1 = new Voiture();
$voiture1->couleur = "Rouge";
$voiture1->masse = 1200;
$voiture1->vitesse = 30;
echo $voiture1->calculEnergieCinetique()."<br/>";

$voiture2 = new Voiture();
$voiture2->couleur = "Vert";
$voiture1->afficherMessage();

