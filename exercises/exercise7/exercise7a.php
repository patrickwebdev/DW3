<?php
//exercise7a.php
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
    <div class="container">
        <h1 class="bluetext">Sum, Difference, and Product Tables</h1>
        <hr>
        <!--Form--> 
        <form id="form1" method="post" action="exercise7a.php" > 
        <label>
            Enter a digit or number<br />
            <input type="number" name="userNbr1" placeholder="digit or number" required="required"> 
        </label>		
        <input id="submitbutton1" type="submit" name="send" value="SEND" />
        </form>
    </div> 
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
        td{border: 1px solid #000000; text-align:center;}
        #sum,#diff,#prod {width:20%;}
        #sum{float:left;}
        #diff{float:left;}
        #prod{float:left;}
    </style>
  </head>
  <body>			
    <div class="container">
    <h1 class="bluetext">Sum, Difference, and Product Tables</h1>
    <hr>
  _END;
    //Assign the data collected from the form to variables
    $userInput = $_POST["userNbr1"]; 
    //Create function
    function getSum($a){
        echo"<p>SUM</p>";
        echo"<table>";
        for($i=1; $i<11; $i++){
            echo"<tr><td>$a</td> <td>+</td> <td>$i</td> <td>=</td> <td>" . $a + $i . "</td></tr>";
        }
        echo"</table>";
    }
    //Create function
    function getDifference($a){
        echo"<p>DIFFERENCE</p>";
        echo"<table>";
        for($i=1; $i<11; $i++){
            echo"<tr><td>$a</td> <td>-</td> <td>$i</td> <td>=</td> <td>" . $a - $i . "</td></tr>";
        }
        echo"</table>";
    }
    //Create function
    function getProduct($a){
        echo"<p>PRODUCT</p>";
        echo"<table>";
        for($i=1; $i<11; $i++){
            echo"<tr><td>$a</td> <td>x</td> <td>$i</td> <td>=</td> <td>" . $a * $i . "</td></tr>";
        }
        echo"</table>";
    }
    //Display outputs - Call functions 
    echo"<p>You entered : $userInput</p>";
    echo'<div id="sum">';
        getSum($userInput);
    echo'</div>';
    echo'<div id="diff">';
        getDifference($userInput);
    echo'</div>';
    echo'<div id="prod">';
        getProduct($userInput);
    echo'</div>';

echo <<<_END
    <div id="back">
        <a href="exercise7a.php"><input type="submit" value="Try again!"></a>
    </div>
    </div> 
  </body>
</html>
_END;
} 
?>












