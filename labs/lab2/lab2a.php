<?php 
//lab2a.php
echo "<h1>This program will invite you to type a positive number<br>in order to display whether it is a multiple of 2 or 3</h1>";	
echo<<<_END
	<html>
		<head>
			<title>PHP Form Upload</title>
		</head>
        <body>  
            <form id="form1" method="post" action="lab2a.php" > 
                <label for="inputtext1">Enter a POSITIVE NUMBER </label>
                <br /><br /> 
                <input id="inputtext1" type="number" name="user_type" placeholder="" required="required"> 		
                <br /><br /><br />
                <input id="inputsubmit1" type="submit" name="submit" value="SUBMIT" /> 
            </form>
_END;

    if (isset($_POST['submit'])) 
	{
        $input_number = $_POST["user_type"];

        if ($input_number<0)
            echo "Please, enter a POSITIVE NUMBER!";
        elseif ($input_number%2==0 AND $input_number%3==0)
            echo "<br \><b>$input_number</b> is a multiple of both 2 and 3";
        elseif ($input_number%2==0)
            echo "<br \><b>$input_number</b> is a multiple of 2";
        elseif ($input_number%3==0)
            echo "<br \><b>$input_number</b> is a multiple of 3";
        else
            echo "<br \><b>$input_number</b> is neither a multiple of 2 nor 3";
        echo"<a href=\"lab2a.php\">Try again!</a>";
    } 
echo <<<_END
  </body>
</html>
_END;      
?>
