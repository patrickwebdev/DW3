<?php 
//1-UNIDIMENSIONAL NUMBERED ARRAYS
//Declare and Assignment- 1st way
$webA= array ("html", "css", "js", "php", 50);

//Declare and Assignment- 2nd way
$webB[] = "html";
$webB[] = "css";
$webB[] = "js";
$webB[] = "php";
$webB[] = 50;

//Declare and Assignment- 3rd way
$webC[0] = "html";
$webC[4] = 50;
$webC[1] = "css";
$webC[3] = "php";
$webC[2] = "js";

//Display single array elements
echo $webA[0]."<br>";
echo $webA[3]."<br>";
echo $webA[4]."<br>";
echo "<br>";
//Display single array elements
echo $webB[0]."<br>";
echo $webB[3]."<br>";
echo $webB[4]."<br>";
//Display single array elements
echo $webC[0]."<br>";
echo $webC[3]."<br>";
echo $webC[4]."<br>";


//Display multiple array elements using a loop

//Loop with a counter (i.e. For loop)
$arraySize=count($webA);
for ($i=0; $i<$arraySize; $i++){
    echo "Array Element #". $i+1 . ": ". $webA[$i] ."<br>";
}

//Loop without a counter
echo "<br>";
foreach($webA as $item){
    echo "$item<br>";
}


//2-UNIDIMENSIONAL ASSOCIATIVE ARRAYS
//Declare and Assignment- 1st way
$webD = array('html' => "HyperText Markup Language",
     	'css' => "Cascading Style Sheet",
     	'js' => "JavaScript",
     	'php' => "HyperText PreProcessor");

//Declare and Assignment- 2nd way
$webE['html'] = "HyperText Markup Language";
$webE['css'] = "Cascading Style Sheet";
$webE['js'] = "JavaScript";
$webE['php'] = "HyperText PreProcessor";

//Display single array elements
echo $webD['css']."<br>";
echo $webD['js']."<br>";
echo $webD['html']."<br>";
//Display single array elements
echo $webE['css']."<br>";
echo $webE['js']."<br>";
echo $webE['html']."<br>";

//Display multiple array elements using a loop
//Loop without a counter
echo "<br>";

foreach($webD as $item => $description){
    echo "$item : $description<br>";
}


//3-MULTIDIMENSIONAL NUMBERED ARRAYS
//Declare and Assignment- 1st way
$oxo = array(
    array('1', ' ', '0'),
    array('0', '0', '1'),
    array('1', '0', ' 1')
);

//Display multiple array elements using a loop
//Nested loop with a counter
for ($i=0; $i<3; ++$i){
    for ($j=0; $j<3; ++$j)
        echo "Row $i Colum $j : ". $oxo[$i][$j] ."<br/>";
}

echo "<br/><br/>";

//Declare and Assignment- 2nd way (combine several unidimensional arrays)
$array1=array('1', ' ', '0');
$array2=array('0', '0', '1');
$array3=array('1', '0', ' 1');

$arrayFinal[]=$array1;
$arrayFinal[]=$array2;
$arrayFinal[]=$array3;

//Display multiple array elements using a loop
//Loop with a counter
for ($i=0; $i<3; ++$i){
    for ($j=0; $j<3; ++$j)
        echo "Row $i Colum $j : ". $arrayFinal[$i][$j] ."<br/>";
}


//4-MULTIDIMENSIONAL ASSOCIATIVE ARRAYS
//Declare and Assignment- 1st way

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

//Display multiple array elements using a loop
//Nester loop without a counter
echo"<pre>";
foreach($products as $section => $items)
    foreach($items as $key => $value)
        echo "$section:\t$key:\t$value<br>";
echo"</pre>";

//Declare and Assignment- 2nd way (combine several unidimensional arrays)
$singleArray1=array();
$singleArray1['fnam']='Pat';
$singleArray1['lnam']='San';
$singleArray1['num']='A01';

$singleArray2=array();
$singleArray2['fnam']='Rick';
$singleArray2['lnam']='Lou';
$singleArray2['num']='A02';

//Display single array elements
echo $singleArray1['num'].'<br>';
echo $singleArray2['num'].'<br>';

//Create an array of arrays
$multiArray['person1']=$singleArray1;
$multiArray['person2']=$singleArray2;

echo "<pre>";
    foreach ($multiArray as $section => $items)
        foreach ($items as $key => $value)
            echo "$section:\t$key:\t$value<br>";
echo "</pre>";
