<?php
     //1-FONCTIONS RENVOYANT UNE VALEUR
     // Renvoie une valeur de variable
     $maintenant = getdate();
     $année_en_cours = $maintenant ['year'] ;
     $année_anniversaire = 2020 ;
     //Créer une fonction
     function trouver_age($a, $b) {
         $diff = $a - $b;
         return $diff ;
     }
     // Appelez la fonction pour recevoir une valeur
     $age=trouver_age($année_en_cours, $année_anniversaire);
     //Afficher les sorties
     echo"Vous êtes né en $année_anniversaire. <br/>" ;
     echo"Nous sommes en $année_en_cours maintenant. <br/>" ;
     echo"Par conséquent, vous avez $age ans.";
    
     //Renvoie un ensemble de valeurs variables
     //Créer une fonction
     function fix_names($n1, $n2, $n3)
     {
         $n1 = ucfirst(strtolower($n1));
         $n2 = ucfirst(strtolower($n2));
         $n3 = ucfirst(strtolower($n3));
         return $n1 . " " . $n2 . " " . $n3 ;
     }
     // Appelez la fonction pour recevoir une valeur
     echo fix_names("WILLIAM", "henry", "gateS");

     //2-FONCTIONS QUI RETOURNENT UN TABLEAU
     function format_names($n1, $n2, $n3)
     {
         $n1 = ucfirst(strtolower($n1));
         $n2 = ucfirst(strtolower($n2));
         $n3 = ucfirst(strtolower($n3));
         $tout = array($n1, $n2, $n3);
         return $tout ;
     }
     // Appelez la fonction pour recevoir la valeur
     $names=format_names("WILLIAM", "henry", "gatES");
     //Afficher les sorties
     foreach ($names as $single){
         echo"<p>$single</p>" ;
     }

     //3-FONCTIONS QUI NE RETOURNENT PAS DE VALEUR MAIS PASSENT DES ARGUMENTS PAR REFERENCE
     //Attribuer des valeurs au tableau
     $user_input = array('y','b','m','o','f');
     //Affiche les éléments initiaux du tableau
     foreach($user_input as $item){
         echo "$item" ;
     }
     //Fonction pour trier les éléments du tableau par ordre croissant
     // Il n'utilise pas return mais utilise & avant l'argument pour passer les arguments par référence
     function sort_ascending(&$a) {
         sort($a, SORT_STRING);
     }
     // Appelez la fonction pour trier les éléments initiaux du tableau
     sort_ascending($user_input);
     //Affiche les éléments du tableau classés par ordre croissant
     foreach($user_input as $item){
         echo "$item" ;
     }

     //4-FONCTIONS QUI NE RETOURNENT PAS DE VALEUR MAIS AFFICHENT UN TEXTE
     //Affiche un texte
     function format_mots($n1, $n2, $n3)
     {
         $n1 = ucfirst(strtolower($n1));
         $n2 = ucfirst(strtolower($n2));
         $n3 = ucfirst(strtolower($n3));
         $noms = array($n1, $n2, $n3);
         foreach ($noms as $unique){
             echo"<p>$unique</p>" ;
         }
     }
     //Appelle la fonction pour afficher un texte
     format_mots("WILLIAM", "henry", "gateS");

     //5-MEME FAÇON D'ENVOYER UN TABLEAU OU UNE VARIABLE UNITAIRE A UNE FONCTION COMME ARGUMENT
     // MÊME FAÇON DE RENVOYER UN TABLEAU OU UNE VARIABLE UNITÉ À PARTIR D'UNE FONCTION
    
     //Envoyer la variable unitaire
     //Attribuer des valeurs au tableau
     $user_input = 'y';
     //Fonction qui reçoit une variable unitaire
     function display_variable($a) {
         echo "$a" ;
     }
     //Appelle la fonction pour afficher la valeur de la variable
     display_variable($user_input);

     //Envoyer une variable de tableau
     //Attribuer des valeurs au tableau
     $user_input = array('y','b','m','o','f');
     //Fonction qui reçoit un tableau en argument
     function display_array($a) {
         foreach($a as $item){
             echo "$item" ;
         }
     }
     //Appelle la fonction pour afficher les éléments du tableau
     display_array($user_input);

     //6-PORTÉE DES VARIABLES MANIPULÉES PAR UNE FONCTION
    
     //6.1.VARIABLES LOCALES
     //$user_input est une variable locale et accessible uniquement dans le programme principal
     $user_input = 'y';
     //Fonction qui reçoit une variable unitaire
     //$a est une variable locale et accessible uniquement dans la fonction display_variable
     function show_variable($a) {
             echo "$a" ;
     }
     //Appelle la fonction pour afficher la valeur de la variable
     show_variable($user_input);
    
     //6.2.UTILISER DES VARIABLES GLOBALES
     //Déclarer les variables
     $user_sec = 30 ;
     $user_min = 2 ;
     $user_hou = 1 ;
     $secondes_count = 60 ;
     //Créer des fonctions
     //Déclarez la variable globale dans les fonctions en utilisant le mot-clé global
     //Les variables globales sont accessibles depuis toutes les parties du programme
     function minutes_to_seconds($a) {
         global $secondes_count ;
         return ($a * $secondes_count);
     }
     function hours_to_seconds($a) {
         global $secondes_count ;
         return ($a * $secondes_count * $secondes_count);
     }
     //Appelle les fonctions pour afficher la valeur
     echo "$user_sec secondes $user_min minutes et $user_hou heures sont égales à : " ;
     echo $user_sec + minutes_to_seconds($user_min) + hours_to_seconds($user_hou)." seconds" ;
    
     //6.3.MODIFIER LES VARIABLES GLOBALES
     //Déclarer les variables
     $user_sec = 30 ;
     $user_min = 2 ;
     $user_hou = 1 ;
     $seconds_count = 60 ;
     //Variable utilisée comme variable globale pour enregistrer la valeur totale des secondes
     $total_secondes=0 ;
     //Créer des fonctions pour convertir les minutes et les heures en secondes
     function mins_to_secs($a) {
         global $seconds_count ;
         $total_mts = $a * $seconds_count ;
         return $total_mts ;
     }
     function hrs_to_secs($a) {
         global $seconds_count ;
         $total_hts = $a * $seconds_count * $seconds_count ;
         return $total_hts ;
     }
     //Créer la fonction qui change la valeur de la variable globale $total_seconds
     function total_sec() {
         global $user_sec ;
         global $user_min ;
         global $user_hou ;
         global $total_secondes ;
         $total_secondes = $user_sec + mins_to_secs($user_min) + hrs_to_secs($user_hou);
     }
     //Appelle la fonction
     total_sec();
     //Afficher les sorties
     echo "$seconds_count Heures $user_min Minutes $user_sec Les secondes sont égales à : " ;
     echo $total_secondes ;

     //6.4.VARIABLES STATIQUES
     //Créer une fonction incluant des variables statiques
     // les variables statiques n'existent que dans une portée de fonction locale
     // mais ne perdent pas leur valeur lorsque l'exécution du programme quitte cette portée
     function howManyVisitors()
     {
         static $count = 1 ;
         echo "<p>Nombre d'utilisateurs ayant visité cette page : $count</p>" ;
         $count++ ;
     }
     //Appelez les fonctions pour afficher les sorties
     //Chaque appel affichera une valeur incrémentée : 1, 2, 3...
     howManyVisitors();
     howManyVisitors();
     howManyVisitors();
 
     //7-FONCTIONS RÉCURSIVES
     //Une fonction récursive est une fonction qui s'appelle elle-même
     // Il inclut une instruction conditionnelle pour le rendre capable de s'arrêter après le nombre approprié d'itérations function factorial1($a)
     //Créer la fonction avec l'instruction de point d'interrogation conditionnelle
     function factorialCalc($a){
         return ($a == 1 || $a == 0) ? 1 : $a * factorialCalc($a - 1);
     }
     //Créer la fonction avec l'instruction if-else conditionnelle
     function CalcFactoriel($a){
         if ($a == 1 || $a == 0)
             return 1 ;
         else
             return ($a * CalcFactoriel($a - 1));
     }
     //Appelez les fonctions pour afficher les sorties
     // Appelez la fonction avec l'instruction de point d'interrogation
     echo factorialCalc(1) . "<br/>" ;
     echo factorialCalc(0) . "<br/>" ;
     echo factorialCalc(3) . "<br/>" ;
     // Appelez la fonction avec l'instruction if-else
     echo CalcFactoriel(1) . "<br/>" ;
     echo CalcFactoriel(0) . "<br/>" ;
     echo CalcFactoriel(3) . "<br/>" ;
