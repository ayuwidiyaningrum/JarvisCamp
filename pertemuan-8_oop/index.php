<?php
require_once 'animal.php';

$sheep = new Animal("shaun");
echo $sheep->get_name();
echo $sheep->get_legs(4);
echo $sheep->get_cold_blooded();

