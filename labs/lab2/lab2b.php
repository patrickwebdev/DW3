<?php 
//lab2b.php
echo "<h1>This program will invite you to type 3 different numbers <br>in order to display them in ascending order</h1>";	
echo<<<_END
	<html>
		<head>
			<title>PHP Form Upload</title>
		</head>
        <body>  
            <form id="form1" method="post" action="lab2b.php" > 
                <label for="givevalue">Enter a NUMBER please </label>
                <br /><br /> 
                <input id="inputtext1" type="number" name="user_type1" placeholder="" required="required"> 
                <br /><br />
                <label for="givevalue">Enter a second NUMBER different than the previous one please </label>
                <br /><br /> 
                <input id="inputtext2" type="number" name="user_type2" placeholder="" required="required">		
                <br /><br />
                <label for="givevalue">Enter a third NUMBER different than the previous ones please </label>
                <br /><br /> 
                <input id="inputtext3" type="number" name="user_type3" placeholder="" required="required">
                <br /><br /><br />
                <input id="inputsubmit1" type="submit" name="submit" value="SUBMIT" /> 
            </form>
_END;

if (isset($_POST['submit'])) 
	{
        $input_numbera = $_POST["user_type1"];
        $input_numberb = $_POST["user_type2"];
        $input_numberc = $_POST["user_type3"];
        echo "You wrote the numbers ". $input_numbera ." , ". $input_numberb ." and ". $input_numberc."<br/>";
        if ($input_numbera<$input_numberb AND $input_numberb<$input_numberc)
            echo "Your numbers in acending order : <b>$input_numbera, $input_numberb, $input_numberc</b>";
        elseif ($input_numbera<$input_numberc AND $input_numbera<$input_numberb AND $input_numberc<$input_numberb)
            echo "Your numbers in acending order : <b>$input_numbera, $input_numberc, $input_numberb</b>";
        elseif ($input_numberb<$input_numbera AND $input_numbera<$input_numberc)
            echo "Your numbers in acending order : <b>$input_numberb, $input_numbera, $input_numberc</b>";
        elseif ($input_numberb<$input_numberc AND $input_numberb<$input_numbera AND $input_numberc<$input_numbera)
            echo "Your numbers in acending order : <b>$input_numberb, $input_numberc, $input_numbera</b>";
        elseif ($input_numberc<$input_numbera AND $input_numbera<$input_numberb)
            echo "Your numbers in acending order : <b>$input_numberc, $input_numbera, $input_numberb</b>";
        elseif ($input_numberc<$input_numberb AND $input_numberc<$input_numbera AND $input_numberb<$input_numbera)
            echo "Your numbers in acending order : <b>$input_numberc, $input_numberb, $input_numbera</b>";
        else
            echo "<br \><b>$input_number1, $input_number2, $input_number3</b> are not 3 different numbers<br>Try again!";
        echo"<a href=\"lab2b.php\">Try again!</a>";
    }
echo <<<_END
  </body>
</html>
_END;
?>
