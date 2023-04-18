<?php
$phrase = "Hello PHP World";
$calcul = 2 + 5 ;
$actif = true;
$nombre = 10.5;
// print("<h1 class='title'>$calcul</h1>");
// var_dump($nombre);

echo "Vous restez nous devoir la somme de : ".$nombre + $calcul." $ ";
echo "<p>Je vous dit " .$phrase." !!! </p>" ;
echo "<pre>";
// $tableau = array("Bonjour", "Hello", "Buenos dias", "Ni Hao",true, 12, 3.14, $calcul, $nombre);
$alphabet = ["A", "B", "C", "D"];
$tableau = [1=>$alphabet, "Bonjour", "Hello", "Buenos dias", "Ni Hao",true, 12, 3.14, $calcul, $nombre];
var_dump($tableau);

class Voirture {
    public $couleur;
    public $marque;
    public $modele;
    public function __construct(){
        $this -> marque = "BMW";
    }
}

$clio = new Voirture();
// $clio->marque = "Renault";
var_dump($clio);