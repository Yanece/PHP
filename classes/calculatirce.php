<?php

class calculatrice {

    public $marque;
    public $type;
    public $niveau_scolaire;

    public function additionner($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function soustraire($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiplier($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function diviser($num1, $num2)
    {
        return  $num1 / $num2;
    }

}

$Calculatrice  = new Calculatrice();
$Calculatrice -> marque = 'casio';
$Calculatrice -> type= 'scientifique';
$Calculatrice -> niveau_scolaire= 'lycee';

$resultatAddition = $Calculatrice -> additionner(10,15);
$resultatSoustraction = $Calculatrice -> soustraire(10,2);
$resultatMultiplication = $Calculatrice -> multiplier(10,2);
$resultatDivision = $Calculatrice -> diviser(10,2);

//echo $Calculatrice -> additionner(10,15); 
//echo $Calculatrice -> soustraire(10,2); 
//$Calculatrice -> multiplier(10,2);
//$Calculatrice -> diviser(10,2);

echo "Résultat de l'addition : " . $resultatAddition . "\n";
echo "Résultat de la soustraction : " . $resultatSoustraction . "\n";
echo "Résultat de la multiplication : " . $resultatMultiplication . "\n";
echo "Résultat de la division : " . $resultatDivision . "\n";

?>