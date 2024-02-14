<?php

class personne {

    private $nom;

    private $prenom;

    private $age;

    //ajout des seters

    public function getNom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)  
    {
        $this->prenom = $prenom;
    }

    public function getAge()
    {
        return $this->age;
    }  

    public function setAge($age) 
    {
        $this->age = $age;
    }


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
$personne->setNom =('Konan') ;
$personne->setPrenom = ('Jean');
$personne->setAge = (25);

echo $personne->getAge();