<?php 
//Créer une classe
class Etudiants
{
  public $prenom;
  public $nom;
  public $numero;
  
  public function getPrenom()
  {
    return $this->prenom;
  }
 
  public function getNom()
  {
    return $this->nom;
  }

  private function setId()
  {
    $numero=rand();
    return $numero; 
  }
 
  public function getNumero()
  {
    return $this->setId(); 
  }
}

//Instantier des objets
$etudiant1 = new Etudiants;
$etudiant2 = new Etudiants;
$etudiant3 = new Etudiants;

//Affecter des valeurs aux propriétés
$etudiant1->prenom = 'Patrick';
$etudiant1->nom = 'Saint-Louis';

$etudiant2->prenom = 'Rasmus';
$etudiant2->nom = 'Lerdor'; 

$etudiant3->prenom = 'Albert';
$etudiant3->nom = 'Einstein'; 

 
//Afficher les sorties des méthodes
echo"<pre>";

echo"<p>Prénom  :".$etudiant1->getPrenom()."</p>";
echo"<p>Nom     :".$etudiant1->getNom()."</p>";
echo"<p>Numero  :".$etudiant1->getNumero()."</p>";

echo"<hr/>";

echo"<p>Prénom  :".$etudiant2->getPrenom()."</p>";
echo"<p>Nom     :".$etudiant2->getNom()."</p>";
echo"<p>Numero  :".$etudiant2->getNumero()."</p>";

echo"<hr/>";

echo"<p>Prénom  :".$etudiant3->getPrenom()."</p>";
echo"<p>Nom     :".$etudiant3->getNom()."</p>";
echo"<p>Numero  :".$etudiant3->getNumero()."</p>";
//echo"<p>IDsetID       : ".$etudiant3->setId()."</p>";
echo"</pre>";
