<?php 
class Vehicule {
CONST DATE_CREATION = '24/09/1992';
public $imatriculation;
static public $nbreSiege = 4;


}


class Car extends Vehicule {
    // public function modifSiege(){
    //     $this->nbreSiege = 2;
    //     echo $this->nbreSiege;
    // }
    public function afficheDate(){
        echo Clio::DATE_CREATION."<br>";
    }  
}

interface Moteur {
  public function essence();
}

class Clio extends Car implements Moteur {
    public function essence(){
        echo 'Vroummm <br>';
    }
    public function afficheImma(){
        $this->imatriculation = "123456789 <br>";
        echo $this->imatriculation;
    } 
    public function afficheSiege(){
        echo Clio::$nbreSiege."<br>";
    } 
}




$clio = new Clio (); 
$clio->afficheImma();
// $clio->modifSiege();
$clio->afficheDate();
$clio->essence();
$clio->afficheSiege();

?> 