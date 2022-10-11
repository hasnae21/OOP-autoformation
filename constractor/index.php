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
echo $lkouk->get_name();


class Fruits {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name; 
      $this->color = $color; 
    }
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruits("Apple", "red");
  echo $apple->get_name();
  echo "<br>";
  echo $apple->get_color();