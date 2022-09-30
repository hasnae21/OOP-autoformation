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
    //$limousine=new Voiture();
    
    $berline = new Voiture(); //objet
    echo $berline-> afficherCouleur();  //eror qd couleur est private donc on utilise function
    
     
?>