<?php

require_once 'autoload.php';

$pc1 = new Computer(2015, 1000, 'false', 1000, 2000, 'Windows8');
$pc2 = new Computer(2016, 1000, 'false', 1000, 2000, 'Windows10');

echo $pc1->useMemory(2000).PHP_EOL;
echo $pc1->changeOs('Windows8').PHP_EOL;;

echo $pc1->useMemory(1000).PHP_EOL;
echo $pc2->changeOs('Ubuntu').PHP_EOL;;


?>
