<?php
include 'test.php';

use \all_test\guigui;

// (Nom, Point de vie, Classe(0 = Guerrier, 1 = Archer), Point d'armure de l'armure, Point d'armure du casque, Type d'arme(0 = Épée, 1 = Arc))

$personnage1 = new guigui\Personnage("Guillaume", 0, 0, 80, 20, 0);

$personnage = new guigui\Personnage("Clara",150,1,80,20, 1);

$personnage1->armes();
$personnage->armes();

$personnage1->exceptionPdv();
$personnage->exceptionPdv();

var_dump($personnage1);
var_dump($personnage);




?>

