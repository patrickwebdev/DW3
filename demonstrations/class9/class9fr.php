<?php		
//1-DÉFINISSEZ LE FUSEAU HORAIRE PAR DÉFAUT UTILISÉ PAR TOUTES LES FONCTIONS DE DATE/HEURE DANS UN SCRIPT
/*
Sans la ligne de code suivante, les timestanps retournés 
sera le temps universel coordonné ou l’UTC qui est une norme, pas un fuseau horaire, 
mais le point de base pour tous les autres fuseaux horaires dans le monde.
Liste des fuseaux horaires pris en charge https://www.php.net/manual/en/timezones.php 
*/

date_default_timezone_set('America/Montreal');

//2-VÉRIFIEZ LE FUSEAU HORAIRE UTILISÉ PAR TOUTES LES FONCTIONS DE DATE/HEURE DANS UN SCRIPT
echo date_default_timezone_get() . "<br/>";

//3-HORODATAGE (TIMESTAMP) POUR LA DATE ACTUELLE 
echo time();

echo"<br/>";

//4-HORODATAGE (TIMESTAMP) POUR UNE DATE DONNÉE 
$a=0;       //Heure
$b=0;       //Minute
$c=0;       //Seconde 
$d=2;       //Mois
$e=4;       //Jour 
$f=2023;    //Année

echo mktime($a, $b, $c, $d, $e, $f);

echo"<br/>";

//5-AFFICHER L’HORODATAGE EN TANT QUE DATE 
/*
Structure de l’organisation
date d’écho($format, $timestamp);
*/


/* Available values for $format

Spécificateurs de jour
d Jour du mois, deux chiffres, avec des zéros de tête 01 à 31
D Jour J de la semaine, trois lettres du lundi au soleil
j Jour du mois, pas de zéros en tête 1 à 31
l Jour de la semaine, noms complets du dimanche au samedi
N Jour de la semaine, numérique, du lundi au dimanche 1 à 7
S Suffixe pour le jour du mois (utile avec le spécificateur j) st, nd, rd ou th
W Jour de la semaine, numérique, du dimanche au samedi de 0 à 6
z Jour de l’année 0 à 365
Spécificateur de semaine
W Numéro de la semaine W de l’année 01 à 52

Spécificateurs de mois
F Nom du mois janvier à décembre
m Nombre de mois avec des zéros en tête 01 à 12
M Nom du mois, trois lettres janvier à décembre
n Nombre de mois, pas de zéros en tête 1 à 12
t Nombre de jours au cours du mois donné 28 à 31

Spécificateurs d’année
L Année bissextile 1 = Oui, 0 = Non
y Année, 2 chiffres 00 à 99
W Année, 4 chiffres 0000 à 9999

Spécificateurs de temps
a Avant ou après midi, minuscules am ou pm
A Avant ou après midi, majuscules AM ou PM
g Heure de la journée, format de 12 heures, pas de zéros de tête 1 à 12
G Heure de la journée, format 24 heures, pas de zéros de tête 0 à 23
h Heure de la journée, format de 12 heures, avec des zéros de tête de 01 à 12
H Heure de la journée, format de 24 heures, avec des zéros de tête de 00 à 23
i Minutes, avec des zéros de tête de 00 à 59
s Secondes, avec des zéros de tête 00 à 59 
*/

//Afficher l’horodatage sous forme de date
$format="F d, Y - G:i:s";
$current_timestamp=time();
echo date($format,$current_timestamp);

echo"<br/>";

//6-OBTENEZ LA DATE ET L’HEURE ACTUELLES DANS UN TABLEAU ASSOCIATIF
//obtenir la date et l’heure actuelles sous forme de tableau

$now = getdate();
echo $now['mon']."<br>";
echo $now['weekday']."<br>";  
echo $now['mday']."<br>";
echo $now['year']."<br>";
echo $now['hours']."<br>";
echo $now['minutes']."<br>";
echo $now['seconds']."<br>";

//Toutes les informations dans getdate()
foreach ($now as $index => $info)
    echo "$index: $info <br/>";

echo"<br/>";

//7-VÉRIFICATION DE LA VALIDITÉ D’UNE DATE
//Fonction intégrée checkdate()

$month=13;
$day=32;
$year=2023;

if (checkdate($month, $day, $year)) 
    echo "The date is valid";
else 
    echo "The date is invalid";

echo"<br/>";

//8-TROUVER L’HEURE DE LA DATE ACTUELLE EN FONCTION DE L’EMPLACEMENT (ZONE):

//8.1.Date et heure actuelles à Montréal
//Créer un objet de la classe intégrée DateTime()

$currentDate = new DateTime(); 
//Appelez la méthode setTimezone pour spécifier la zone
$currentDate->setTimezone(new DateTimeZone('Africa/Ouagadougou'));
//Appelez le format de méthode pour enregistrer la date/heure actuelle selon la zone indiquée
$currentDateFormatted = $currentDate->format("d-m-Y h:i:s a");
//Afficher la date/heure actuelle selon la zone
echo "<br/>Africa/Ouagadougou: $currentDateFormatted";

echo"<br/>";

//8.2.Date et heure actuelles dans 4 emplacements
//Créer un tableau qui inclut 4 zones
$zonecity=array('Asia/Pyongyang', 'America/Toronto', 'Europe/Amsterdam', 'America/Los_Angeles');

//Créer un objet de la classe intégrée DateTime()
$currentDateTime = new DateTime(); 

//Calculer la date/l’heure pour chacune des 4 zones
//Appelez la méthode setTimezone pour spécifier la zone
//Appelez le format de méthode pour enregistrer 4 dates/heure actuelles pour 4 zones dans un tableau associatif  
foreach ($zonecity as $item)
{
    $currentDateTime->setTimezone(new DateTimeZone($item));
    $dateAndTime = $currentDateTime->format("d-m-Y h:i:s a");
    $dateTimeByZone[$item] = "$dateAndTime";
} 

//Afficher la date/heure actuelle selon la zone
foreach ($dateTimeByZone as $item => $description)
{
    echo "<p>$item: $description<br></p>"; 
} 

echo"<br/>";

//9-FONCTIONS INTÉGRÉES SUPPLÉMENTAIRES POUR LA DATE ET L’HEURE:
/*
checkdate() // Vérifie la validité d’une date
strtotime() // Crée des horodatages à partir de descriptions en anglais
gmdate() //Exprime un horodatage en GMT
*/

?>
