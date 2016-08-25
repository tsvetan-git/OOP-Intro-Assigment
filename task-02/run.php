<?php
require_once 'autoload.php';
$gsm1 = new Gsm('samsung');
$gsm1->insertSimCard('0883444555');
$gsm2 = new Gsm('iphone');
$gsm2->insertSimCard('0899223344');
$gsm1->call($gsm2, 50);
?>
