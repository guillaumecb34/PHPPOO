<?php
class Users {
    
    function __construct($name, $pdv) {
        $this->name = $name;
        $this->pdv = $pdv;
        // echo "Je m'appelle"." ".$name." "."et j'ai"." ".$pdv." "."points de vie"."<br>";
    }
}

interface Armor {
 function equipement($armure, $casque);
}

class Personnage extends Users implements Armor {

    function equipement($armure, $casque){
        $this->shield = $casque + $armure;
    }
    function __construct($name, $pdv, $type, $armure, $casque) {
        $this->casque = $casque;
        $this->armure = $armure;
        $this->equipement($this->armure, $this->casque);
        $this->type = $type;
        parent::__construct($name, $pdv);
        echo "Je m'appelle ".$name.", j'ai ".$pdv." points de vie ";
        echo "et je suis de type ".$type."<br>";
        echo $this->shield;
    }
   

}




$personnage1 = new Personnage("Guillaume",120,"Guerrier",80,20);

$personnage = new Personnage("Clara",150,"Archer",80,20);

?>