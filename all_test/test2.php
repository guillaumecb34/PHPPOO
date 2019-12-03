<?php
include 'test.php';

use \all_test\guigui;


$personnage1 = new guigui\Personnage("Guillaume", 120, 0, 80, 20);

$personnage = new guigui\Personnage("Clara",150,1,80,20);



var_dump($personnage1);
var_dump($personnage);


?>

