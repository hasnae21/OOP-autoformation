<?php
    class Voiture{

        private $couleur ="rouge";
        public $vitesse =0;

        public function afficherCouleur(){
            return $this-> couleur;
        }
        public function repeindre($co){
            $this-> couleur= $co;
        }
    }
    
    //$suv = new Voiture();
    //$limousine = new Voiture();
    
    $berline = new Voiture(); //objet
    echo $berline-> afficherCouleur();  //eror qd couleur est private donc on utilise function     

//class and methodes 
    class Fruit {
        // Properties
        public $name;
        public $color;
      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }
        function set_color($color) {
          $this->color = $color;
        }
        function get_color() {
          return $this->color;
        }
      }
      
      $apple = new Fruit();
      $apple->set_name('Apple');
      $apple->set_color('Red');
      echo "<br>";
      echo "Name: " . $apple->get_name();
      echo "<br>";
      echo "Color: " . $apple->get_color();
      echo "<br>";
      
        //Name: Apple 
        //Color: Red


//change the value of the $name property

//////1_choix:
class Fruits {
    public $name;
    function set_name($name) {
      $this->name = $name;
    }
  }
  $apple = new Fruits();
  $apple->set_name("Apple");

//////2_choix:
class Fruity {
    public $name;
  }
  $apple = new Fruity();
  $apple->name = "Apple";

///instanceof to know if an object is an instance of a class or not /true or false

    class Fruite {
        // Properties
        public $name;
        public $color;
      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }
      }
      
      $apple = new Fruite();
      var_dump($apple instanceof Fruite);   //bool(true)