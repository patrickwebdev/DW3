<?php
//exercise4a.php
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
    <h1 class="bluetext">Please, enter 2 numbers or digits<br/>to know ...</h1>
    <hr>
    <!--Form--> 
    <form id="form1" method="post" action="exercise4a.php" > 
      <label>
        Enter a first digit or number<br />
        <input type="number" name="userNbr1" placeholder="digit or number" required="required"> 
      </label>
      <br />
      <label>
        Enter a second digit or number<br />
        <input type="number" name="userNbr2" placeholder="digit or number" required="required"> 
      </label>
      <br />		
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
    <h1 class="redtext">You entered 2 numbers or digits,<br/>now I'll show...</h1>
    <hr>
  _END;
    //Assign the data collected from the form to variables
    $user_number1 = $_POST["userNbr1"]; 
    $user_number2 = $_POST["userNbr2"];
    //Output
    $message1="<p>You entered the numbers: $user_number1 and $user_number2.</p>";
    
    //Conditional control structure using OR
    if ($user_number1<0 || $user_number2<0){
      $message2="<p>At least, 1 of them is a negative number.</p>";
    }else{
      $message2="<p>None of them is a negative number.</p>";
    }

    /*
    //Conditional control structure using AND
    if ($user_number1>=0 && $user_number2>=0){
      $message2="<p>None of them is a negative number.</p>"; 
    }else{
      $message2="<p>At least, 1 of them is a negative number.</p>";
    }
    */

    //Display Outputs
    echo $message1 . $message2 .  "<br/>";
echo <<<_END
    <a href="exercise4a.php">Try again!</a>
  </body>
</html>
_END;
} 
?>
