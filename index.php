<?php

require_once 'ClassA.php';
require_once 'ClassB.php';

/*$AInstance = new \App\classA();
$BInstance = new \App\classB();

echo $AInstance->getName().PHP_EOL;
echo $BInstance->getName().PHP_EOL;*/

echo \App\ClassA::getName().PHP_EOL;
echo \App\ClassB::getName().PHP_EOL;

echo "git testing";

echo 'not in track';



?>