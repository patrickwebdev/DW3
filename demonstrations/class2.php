 
<?php 
  // Basic Syntax
  // This is a one-line c++ style comment
  echo "Hello Quebec"; // Don't forget to add the semi colon at the end of each line
  
  # This is a one-line shell-style comment 
  echo "<br/>"; # I used the html tag br to add a line break
  
  /* This is a multi line comment
  You don't have to indicate the datatype of a variable when you declare it
  The datatype of a variable depends on the value you assign to it */

  /*
    Multilines comment line 1  // Line 1 is for A
    Multilines comment line 2  // Line 2 is for B  
  */

  //Each PHP command ends with a semicolon
  echo "Each PHP command ends with a semicolon";
  echo "<br/>";

  //Escaping characters
  $escapin1 = 'PHP\'s syntax is very easy to learn';
  $escapin2 = "PHP said : \"I'm the best programming language\".";
  echo $escapin1."<br/>".$escapin2."<br/>";

  //A $ symbol is mandatory in the front of all PHP variables
  echo "A $ symbol is mandatory in the front of all PHP variables";
  echo "<br/>";

  // Differences between single quote and double quotes
  // Using double quotes allows you to combine literal string and variable values
  // Using single quotes allows you to have only literal string
  $likethis = 2;
  $notice1 = "Do not forget to write your variable like this: $likethis";
  $notice2 = 'Do not forget to write your variable like this: $likethis ';
  echo $notice1;
  echo "<br/>";
  echo $notice2;

  echo "<br/>";

  // User-Defined Constant TPS and TVQ
  define("TPS",0.05);
  define("TVQ",0.09975);
  $unit_price=2.5;
  $quantity=40;
  $subtotal=$unit_price*$quantity;
  $total=$subtotal+($subtotal*TPS)+($subtotal*TVQ);
  echo "Due : ". $total . "$";
  echo "<br/>";

  // Predefined Constant
  echo "This code is the line number  " . __LINE__ 
  . "<br/>of the php file named:  " . __FILE__ 
  . "<br/>saved in the directory:  ". __DIR__ ;

  echo "<br/>";

  // Printf
  // s for string, d for decimal, and X for hexadecimal
  printf("My name is %s. My ID is the number %d that is written %X in hexadecimal",'Patrick', 10, 10);

?>

<!-- PHP embedded within HTML -->
<!DOCTYPE html>
<html>
  <head>
    <title>PHP in HTML</title>
  </head>
  <body>
    <?php
      echo "Hello, I'm PHP inside HTML!"; 
    ?>
  </body>
</html>

<!-- HTML embedded within PHP -->
<?php
  echo "<h1>Hello again Quebec, now I'm Heading 1<h1>";
  echo "<br/>"; 

  echo "<ul>"; 
		echo "<li><a href=\"#\">List Item 1</a></li>\n"; 
		echo "<li><a href=\"#\">List Item 2</a></li>\n"; 
    echo "<li><a href=\"#\">List Item 3</a></li>\n"; 
    echo "<li><a href=\"#\">List Item 4</a></li>\n"; 
	echo "</ul>"; 

  echo "<br/>"; 

  $number1=1;
  $number2=2;
  $number3=3;
  $number4=4;

  echo "<ul>"; 
    echo "<li><a href=\"#\">List Item $number1 </a></li>\n"; 
    echo "<li><a href=\"#\">List Item $number2 </a></li>\n"; 
    echo "<li><a href=\"#\">List Item $number3 </a></li>\n"; 
    echo "<li><a href=\"#\">List Item $number4 </a></li>\n"; 
  echo "</ul>"; 

?>


<?php
  $var_bool = false;          // a bool
  $var_str  = "lorem ipsum";  // a string
  $var_int = 100;             // an int

  // Built-in function gettype()
  // To display the type of $var_bool, $var_str, and $var_int 
  echo gettype($var_bool);
  echo "<br/>";
  echo gettype($var_str);
  echo "<br/>";
  echo gettype($var_int);
  echo "<br/>";

  
  // Built-in function var_dump()
  // To display the location, type, and value of $var_int
  var_dump($var_int);       
  

  // Built-in function is_int()
  // If $var_int is an integer, display it followed by a text
  if (is_int($var_int)) {
    echo "$var_int is an Integer"; 
  }
  
  echo "<br/>";

  // Built-in function is_string()
  // If $var_bool is a string, display it followed by a text
  // $var_bool is a boolean nothing will be displayed
  if (is_string($var_bool)) {
    echo "$var_bool is a String";
  }

  echo "<br/>";
?>
