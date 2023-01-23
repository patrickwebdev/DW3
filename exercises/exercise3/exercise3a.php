<?php
//exercise3a.php
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
    <h1 class="bluetext">Please, enter a number or digit<br/>to know if it is positive, negative, or null</h1>
    <hr>
    <!--Form--> 
    <form id="form1" method="post" action="exercise3a.php" > 
      <label>
        Enter a digit or number<br />
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
    <h1 class="redtext">You entered a number or digit,<br/>now I'll let you know whether it is positive, negative, or null</h1>
    <hr>
  _END;
    //Assign the data collected from the form to variable
    $user_number = $_POST["userNbr"]; 
    echo"<p>You entered the $user_number that is a : </p>";
    //Identify digit or number
    if ($user_number>-10 && $user_number<10)
        $digitNumber='digit';
    else
        $digitNumber='number';
    //Identify positive, negative, or null
    if ($user_number>0){
        echo"<p>Positive $digitNumber</p><br/>";
    }elseif ($user_number==0){
        echo"<p>Null $digitNumber</p><br/>";
    }else{
        echo"<p>Negative $digitNumber</p><br/>";
    }
echo <<<_END
    <a href="exercise3a.php">BACK TO THE FORM</a>
  </body>
</html>
_END;
} 
?>












