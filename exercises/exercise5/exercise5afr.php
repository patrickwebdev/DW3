<?php
//exercise5afr.php
if (!isset($_POST['send'])) {
echo <<<_END
<!DOCTYPE html>
<html>  
  <head>
    <title>Question</title>
    <style>
      .bluetext{color:blue;}
    </style>
  </head>
  <body>			
    <h1 class="bluetext">10 Premières Tables de Multiplication.</h1>
    <hr>
    <!--Form--> 
    <form id="form1" method="post" action="exercise5afr.php" > 
      <label>
        Entrer un chiffre ou un nombre<br />
        <input type="number" name="userNbr" placeholder="digit or number" required="required"> 
      </label>		
      <input id="submitbutton1" type="submit" name="send" value="SEND" />
    </form> 
  </body>
</html>
_END;
}

//Form Handling
//Go below only after a user pressed the input button name="send" 
else {
echo <<<_END
  <!DOCTYPE html>
  <html>  
  <head>
    <title>Answer</title>
    <style>
      .redtext{color:red;}
    </style>
  </head>
  <body>			
    <h1 class="redtext">10 Premières Tables de Multiplication</h1>
    <hr>
  _END;
    //Assign the data collected from the form to variable
    $user_number = $_POST["userNbr"]; 

    //Initialize variables
    $count= 1;

    //Output
    echo"<p>Vous avez entré $user_number: </p><br/>";
    //Display output with loop
    //While loop
    echo"<p>Avec Boucle TANT QUE (WHILE loop): </p>";
    while ($count <= 10){
      //Code to repeat while the condition is true
      echo "$count x $user_number = " . $count * $user_number. "<br>";
      //Increase the value of the counter to stop it after a number of iterations
      ++$count;
    }

    //Initialize variables
    $count= 1;

    //Do While loop
    echo"<p>Avec Boucle JUSQU'A CE QUE (DO WHILE loop): </p>";
    do {
      //Code to repeat while the condition is true
      echo "$count x $user_number = " . $count * $user_number . "<br>";
      //Increase the value of the counter to stop it after a number of iterations
      ++$count;
    }while ($count <= 10);    //Specify the condition (Here: final accepted value of the counter)

    //For loop
    echo"<p>Avec Boucle POUR (FOR loop): </p>";
    //FOR Loop
    //Assign the initial value, final value of the counter, and increase its value
    for ($count = 1; $count <= 10; ++$count){
      //Code to repeat while the condition is true
      echo "$count x $user_number = " . $count * $user_number . "<br>";
    }

echo <<<_END
    <a href="exercise5a_product_table.php">Essayez Encore!</a>
  </body>
</html>
_END;
} 
?>
