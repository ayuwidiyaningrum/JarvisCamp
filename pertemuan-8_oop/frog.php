<?php
require_once 'animal.php';

$kodok = new Frog("buduk");
echo $kodok->get_name(); 
echo $kodok->get_legs(4); 
echo $kodok->get_cold_blooded(); 
$kodok->jump();
