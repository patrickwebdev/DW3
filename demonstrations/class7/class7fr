<?php 
//1-TABLEAUX NUMÉROTÉS UNIDIMENSIONNELS
//Déclaration et affectation - 1ère manière
$webA= array ("html", "css", "js", "php", 50);

//Déclaration et affectation - 2ème manière
$webB[] = "html";
$webB[] = "css";
$webB[] = "js";
$webB[] = "php";
$webB[] = 50;

//Déclaration et affectation - 3ème manière
$webC[0] = "html";
$webC[4] = 50;
$webC[1] = "css";
$webC[3] = "php";
$webC[2] = "js";

//Afficher un élément du tableau 
echo $webA[0]."<br>";
echo $webA[3]."<br>";
echo $webA[4]."<br>";
echo "<br>";
//Afficher un élément du tableau
echo $webB[0]."<br>";
echo $webB[3]."<br>";
echo $webB[4]."<br>";
//Afficher un élément du tableau
echo $webC[0]."<br>";
echo $webC[3]."<br>";
echo $webC[4]."<br>";


// Affiche plusieurs éléments du tableau à l'aide d'une boucle

// Boucle avec un compteur (par ex. une boucle For)
$arraySize=count($webA);
for ($i=0; $i<$arraySize; $i++){
    echo "Array Element #". $i+1 . ": ". $webA[$i] ."<br>";
}

// Boucle sans compteur
echo "<br>";
foreach($webA as $item){
    echo "$item<br>";
}


//2-TABLEAUX ASSOCIATIFS UNIDIMENSIONNELS
//Déclaration et affectation - 1ère manière
$webD = array('html' => "HyperText Markup Language",
     	'css' => "Cascading Style Sheet",
     	'js' => "JavaScript",
     	'php' => "HyperText PreProcessor");

//Déclaration et affectation - 2ème manière
$webE['html'] = "HyperText Markup Language";
$webE['css'] = "Cascading Style Sheet";
$webE['js'] = "JavaScript";
$webE['php'] = "HyperText PreProcessor";

//Afficher un élément du tableau
echo $webD['css']."<br>";
echo $webD['js']."<br>";
echo $webD['html']."<br>";
//Afficher un élément du tableau
echo $webE['css']."<br>";
echo $webE['js']."<br>";
echo $webE['html']."<br>";

// Affiche plusieurs éléments du tableau à l'aide d'une boucle
// Boucle sans compteur
echo "<br>";

foreach($webD as $item => $description){
    echo "$item : $description<br>";
}


//3-TABLEAUX NUMÉROTÉS MULTIDIMENSIONNELS
//Déclaration et affectation - 1ère manière
$oxo = array(
    array('1', ' ', '0'),
    array('0', '0', '1'),
    array('1', '0', ' 1')
);

//Affiche plusieurs éléments du tableau à l'aide d'une boucle
//Boucle imbriquée avec un compteur
for ($i=0; $i<3; ++$i){
    for ($j=0; $j<3; ++$j)
        echo "Row $i Colum $j : ". $oxo[$i][$j] ."<br/>";
}

echo "<br/><br/>";

//Déclaration et affectation - 2ème manière (combiner plusieurs tableaux unidimensionnels)
$array1=array('1', ' ', '0');
$array2=array('0', '0', '1');
$array3=array('1', '0', ' 1');

$arrayFinal[]=$array1;
$arrayFinal[]=$array2;
$arrayFinal[]=$array3;

// Affiche plusieurs éléments du tableau à l'aide d'une boucle
// Boucle avec un compteur
for ($i=0; $i<3; ++$i){
    for ($j=0; $j<3; ++$j)
        echo "Row $i Colum $j : ". $arrayFinal[$i][$j] ."<br/>";
}


//4-TABLEAUX ASSOCIATIFS MULTIDIMENSIONNELS
//Déclaration et affectation - 1ère manière
$products = array(
    'web' => array(
        'html' => "HyperText Markup Language",
        'css' => "Cascading Style Sheet",
        'js' => "JavaScript",
        'php' => "HyperText PreProcessor"),

    'database' => array(
        'MySQL' => "My Structured Query Language",
        'Postgre' => 'Postgre Structured Query Language',
        'Oracle'=> "Oracle Structured Query Language"),

    'functional' => array(
        'c++' => "C Plus Plus",
        'py' => "Phyton",
        'c#' => "C Sharp")   
);

// Affiche plusieurs éléments du tableau à l'aide d'une boucle
// Boucle imbriquée sans compteur
echo"<pre>";
foreach($products as $section => $items)
    foreach($items as $key => $value)
        echo "$section:\t$key:\t$value<br>";
echo"</pre>";

//Déclaration et affectation - 2ème manière (combiner plusieurs tableaux unidimensionnels)
$singleArray1=array();
$singleArray1['fnam']='Pat';
$singleArray1['lnam']='San';
$singleArray1['num']='A01';

$singleArray2=array();
$singleArray2['fnam']='Rick';
$singleArray2['lnam']='Lou';
$singleArray2['num']='A02';

//Afficher un élément du tableau
echo $singleArray1['num'].'<br>';
echo $singleArray2['num'].'<br>';

//Crée un tableau de tableaux
$multiArray['person1']=$singleArray1;
$multiArray['person2']=$singleArray2;

echo "<pre>";
    foreach ($multiArray as $section => $items)
        foreach ($items as $key => $value)
            echo "$section:\t$key:\t$value<br>";
echo "</pre>";
