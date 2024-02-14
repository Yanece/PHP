<?php

class personne {
    public $nom;
    public $prenom;
    public $age;

    public function parler()
    {
        return 'je parle';
    }

    public function mange()
    {
        return 'je mange';
    }

    public function marcher()
    {
        return 'je marche';
    }
}


$personne = new personne();
$personne->nom = "Konan";
$personne->prenom = "Jean";
$personne->age = 25;
echo   $personne->parler();

var_dump($personne);