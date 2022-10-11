<?php

class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }
}

$lkouk = new Fruit("lkouk"); //no need of set_name methode
echo $apple->get_name();