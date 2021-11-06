<?php
class Animal {
    public $name;
    public $legs;
    public $cold_blooded = "no";
   
    function __construct($name) {
        $this->name = $name;
      }
      function get_name() {
        return "</br> Name : ".$this->name;
      }
      function get_legs($legs) {
        return "</br> Legs : ".$this->legs = $legs;
      }
      function get_cold_blooded() {
        return "</br> cold_blooded : ".$this->cold_blooded;
      }
}

class Ape extends Animal{
    public function yell() {
        echo "</br> Yell : Auooo";
      }
}
class Frog extends Animal{
    public function jump() {
        echo "</br> Jump : hop hop";
      }
}
