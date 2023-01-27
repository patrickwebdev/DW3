<?php
//exercise4b.php
if (!isset($_POST['send'])) {
echo <<<_END
<!DOCTYPE html>
<html>  
  <head>
    <title>Question</title>
    <style>
      .bluetext{color:blue;}
      body{margin-right:auto; margin-left:auto;color:black;}
    </style>
  </head>
  <body>			
    <h1 class="bluetext">Please, enter the length of the 3 sides of a triangle in meters <br/>to know its type</h1>
    <hr>
    <!--Form--> 
    <form id="form1" method="post" action="exercise4b.php" > 
      <label>
        Enter the length of side 1<br />
        <input type="number" name="userNbr1" placeholder="digit or number" required="required"> 
      </label>
      <br />
      <label>
        Enter the length of side 2<br />
        <input type="number" name="userNbr2" placeholder="digit or number" required="required"> 
      </label>
      <br />
      <label>
        Enter the length of side 3<br />
        <input type="number" name="userNbr3" placeholder="digit or number" required="required"> 
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
    $user_number3 = $_POST["userNbr3"];
    //Output
    $message1="<p>You entered: side1= $user_number1 meters, side2= $user_number2 meters and side3= $user_number3 meters.</p>";
    
    //Conditional control structure 
    if ($user_number1==$user_number2 && $user_number2==$user_number3){
      $message2="<p>Your triangle is Equilateral</p>";
    }elseif($user_number1==$user_number2 || $user_number2==$user_number3 || $user_number1==$user_number3){
      $message2="<p>Your triangle is Isosceles.</p>";
    }else{
        $message2="<p>Your triangle is Scalene.</p>";
    }

    //Display Outputs
    echo $message1 . $message2 .  "<br/>";
echo <<<_END
    <a href="exercise4b.php">Try again!</a>
  </body>
</html>
_END;
} 
?>
