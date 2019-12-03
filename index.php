<?php 



abstract class Vehicule {
CONST DATE_CREATION = '24/09/1992';
protected $imatriculation;
static public $nbreSiege = 4;


}


abstract class Car extends Vehicule {
    // public function modifSiege(){
    //     $this->nbreSiege = 2;
    //     echo $this->nbreSiege;
    // }
    public function afficheDate(){
        echo self::DATE_CREATION."<br>";
    }  
}

interface Moteur {
  public function essence();
}


final class Clio extends Car implements Moteur {
    public function essence(){
        echo 'Vroummm <br>';
    }
    public function afficheImma(){
        $this->imatriculation = "123456789 <br>";
        echo "Ceci est mon imatricaulation : ".$this->imatriculation;
    } 
    public function afficheSiege(){
        echo self::$nbreSiege."<br>";
    } 
}


echo "<h1>Cours PHP OBJECT</h1>";

$clio = new Clio (); 
$clio->afficheImma();
// $clio->modifSiege();
$clio->afficheDate();
$clio->essence();
$clio->afficheSiege();
$testnbreroue = $clio;

?> 