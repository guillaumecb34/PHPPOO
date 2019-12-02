<?php
abstract class Users {

    private $name;
    protected $pdv;

    protected function __construct(string $name, int $pdv) {
        $this->name = $name;
        $this->pdv = $pdv;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

interface Armor 
{
    function equipement(int $armure, int $casque);
}

final class Personnage extends Users implements Armor {

    private $type;
    private $casque;
    private $armure;

    function equipement(int $armure, int $casque){
        $this->shield = $casque + $armure;
    }
    function __construct(string $name, int $pdv, int $type, int $armure, int $casque) {

        $listTypes = [
            "Guerrier",
            "Archer"
        ];

        $this->type = $listTypes[$type];
        $this->casque = $casque;
        $this->armure = $armure;

        $this->equipement($this->armure, $this->casque);
        parent::__construct($name, $pdv);
        echo "Je m'appelle ".$this->getName().", j'ai ".$this->pdv." points de vie ";
        echo "et je suis de type ".$this->type;
        echo ". Mon point d'armure et de ".$this->shield."<br>";
    }
}




$personnage1 = new Personnage("Guillaume", 120, 0, 80, 20);

$personnage = new Personnage("Clara",150,1,80,20);



var_dump($personnage1);
var_dump($personnage);

?>