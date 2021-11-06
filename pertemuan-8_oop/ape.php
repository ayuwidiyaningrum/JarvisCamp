<?php
require_once 'animal.php';

$sungokong = new Ape("kera sakti");
echo $sungokong->get_name(); 
echo $sungokong->get_legs(2); 
echo $sungokong->get_cold_blooded(); 
$sungokong->yell();
