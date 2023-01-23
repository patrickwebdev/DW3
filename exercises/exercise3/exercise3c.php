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
    <h1 class="bluetext">Please, enter a weekday<br/>I will tell you its rank</h1>
    <hr>
    <!--Form--> 
    <form id="form1" method="post" action="exercise3c.php" > 
      <label>
        Enter a weekday (i.e. Monday, Tuesday)<br />
        <input type="text" name="userWeekday" placeholder="" required="required"> 
      </label>		
      <input type="submit" name="send" value="SEND" />
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
    <h1 class="redtext">If you entered a weekday,<br/>now I'll tell you its rank</h1>
    <hr>
  _END;
    //Assign the data collected from the form to variable
    $user_input = $_POST["userWeekday"]; 
    echo"<p>You entered $user_input.</p>";
    //Convert to lowercase letters
    $user_input_lower=strtolower($user_input);
    //Identify the message to display using a switch 
    switch ($user_input_lower){
    	case 'monday' :
        	echo "<p>It’s the first day of the week.</p><br />";
        	break;
    	case 'tuesday':
        	echo "<p>It’s the second day of the week.</p><br />";
        	break;
    	case 'wednesday':
        	echo "<p>It’s the third day of the week.</p><br />";
        	break;
        case 'thursday' :
            echo "<p>It’s the fourth day of the week.</p><br />";
            break;
        case 'friday':
            echo "<p>It’s the fift day of the week.</p><br />";
            break;
        case 'saturday':
            echo "<p>It’s the sixth day of the week.</p><br />";
            break;
        case 'sunday':
            echo "<p>It’s the seventh day of the week.</p><br />";
            break;
    	default:
        	echo "<p>It’s not a weekday.</p><br />";
	}
   
echo <<<_END
    <a href="exercise3c.php">Try again!</a>
  </body>
</html>
_END;
} 
?>












