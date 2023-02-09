<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) 
    ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture 
    et qui a une propriété supplémentaire (autonomie). Instancier une voiture 
    « classique » et une voiture « électrique » ayant les caractéristiques
    suivantes :
    Peugeot 408 : $v1 = new Voiture("Peugeot","408");
    BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
    echo $v1->getInfos()."<br/>";
    echo $ve1->getInfos()."<br/>";</p>

<?php


class Voiture{
    protected $_marque;
    protected $_modele;


    public function __construct($marque,$modele){
        $this -> _marque = $marque;
        $this -> _modele = $modele;
    }

    public function getMarque(){
        return $this -> _marque;
    }
    public function setMarque($marque){
        $this -> _marque = $marque;
    }
    public function getModele(){
        return $this -> _modele;
    }
    public function setModele($modele){
        $this -> _modele = $modele;
    }


    public function infos(){
        echo "Marque : {$this -> _marque} <br>  Modèle :  {$this -> _modele} <br>";
    }

    public function getInfos(){
        return $this -> infos();
    }

}

class VoitureElec extends Voiture{
    // private $_marque;
    // private $_modele;
    private $_autonomie;
    
    public function __construct($marque, $modele, $autonomie){
        $this -> _marque = $marque;   //ou this one instead of this marque and this modele parent :: __construct ($marque,$modele); 
        $this -> _modele = $modele;
        $this -> _autonomie = $autonomie;
    }

    public function getMarque(){
        return $this -> _marque;
    }
    public function setMarque($marque){
        $this -> _marque = $marque;
    }
    public function getModele(){
        return $this -> _modele;
    }
    public function setModele($modele){
        $this -> _modele = $modele;
    }
    public function getAutonomie(){
        return $this -> _autonomie;
    }
    public function setAutonomie($autonomie){
        $this -> _autonomie = $autonomie;
    }


    public function infos(){
        echo "Marque : {$this -> _marque} <br>
        Modèle : {$this -> _modele}  <br> Autonomie : {$this -> _autonomie} <br>";
        // echo parent::infos() . "Autonomie :" . $this -> _autonomie;
        //this one is better 
    }


    public function getInfos(){
        return $this -> infos();
    }

    
}

$v1 = new Voiture ("Peugeot", "408");
$ve1 = new VoitureElec ("BMW", "I3", 100);

echo $v1 -> getInfos(). "<br>";
echo $ve1 -> getInfos(). "<br>";

?>




