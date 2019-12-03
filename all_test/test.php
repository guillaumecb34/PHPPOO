<?php

namespace all_test\guigui;

abstract class Users {

    private $name;
    public $pdv;

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
    private $arme;
    
    public function equipement(int $armure, int $casque) 
    {
        $this->shield = $casque + $armure;
    }

    public function armes()
    {
 
        $equipementArme = function ()
        {
            echo($this->getName()." à ".$this->arme."<br>");
        };

        $this->functionEquipementArme($equipementArme);
    }

    public function functionEquipementArme($equipementArme)
    {
        $equipementArme();
    }

    function __construct(string $name, int $pdv, int $type, int $armure, int $casque, string $arme) 
    {
       
        $listTypes = [
            "Guerrier",
            "Archer"
        ];

        $listArme = [
            "une Épée",
            "un Arc"
        ];

        $this->type = $listTypes[$type];
        $this->casque = $casque;
        $this->armure = $armure;
        $this->arme = $listArme[$arme];

        $this->equipement($this->armure, $this->casque);
        parent::__construct($name, $pdv);
        echo "Je m'appelle ".$this->getName().", j'ai ".$this->pdv." points de vie ";
        echo "et je suis de type ".$this->type;
        echo ". Mon point d'armure est de ".$this->shield;
        echo ". Mon arme est ".$this->arme."<br>";

    }

  function lifePoint(){
      if ($this->pdv == 0)
      {
        throw new \Exception($this->getName().' n\'a plus de point vie.');
      }
      echo $this->getName()." a encore ".$this->pdv." points de vie";
  }

  function exceptionPdv(){
        try 
        {
            $this->lifePoint();
        } 
        catch (\Exception $e) 
        {
            echo 'Exception reçue : '.$e->getMessage().'<br>';
        }
  } 


}



?>