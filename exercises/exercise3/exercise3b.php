<?php
//exercise3b.php
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
    <h1 class="bluetext">Please, enter 2 numbers or digits<br/>to know the gap between them</h1>
    <hr>
    <!--Form--> 
    <form id="form1" method="post" action="exercise3b.php" > 
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
    <h1 class="redtext">You entered 2 numbers or digits,<br/>now I'll show you their gap</h1>
    <hr>
  _END;
    //Assign the data collected from the form to variables
    $user_number1 = $_POST["userNbr1"]; 
    $user_number2 = $_POST["userNbr2"];
    
    if ($user_number1==$user_number2){
      //Outputs
      $message="<p>You entered the same number $user_number1. There is no gap.</p>";
    }elseif ($user_number1>$user_number2){
      //Calculations
      $gap=$user_number1-$user_number2; 
      //Outputs
      $message="<p>You entered $user_number1 and $user_number2. The gap between $user_number1 and $user_number2 is: $gap</p>";
    }else{
      //Calculations
      $gap=$user_number2-$user_number1;
      //Outputs
      $message="<p>You entered $user_number1 and $user_number2. The gap between $user_number1 and $user_number2 is: $gap</p>";
    }
    /*
    //Same exercise but with the use of built-in function abs() to calculate gap without a sign
    if ($user_number1==$user_number2){
      //Outputs
      $message="<p>You entered the same number $user_number1. There is no gap.</p>";
    }else{
      //Calculations
      $gap=abs($user_number1-$user_number2);
      //Outputs
      $message="<p>You entered $user_number1 and $user_number2. The gap between $user_number1 and $user_number2 is: $gap</p>";
    }
    */
    //Display Outputs
    echo $message . "<br/>";
echo <<<_END
    <a href="exercise3b.php">Try again!</a>
  </body>
</html>
_END;
} 
?>












