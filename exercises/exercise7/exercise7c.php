<?php
//exercise7c.php
if (!isset($_POST['send'])) {
echo <<<_END
<!DOCTYPE html>
<html>  
  <head>
    <title>Question</title>
    <style>
      h1{font-size:100%; text-align: center;}
      .bluetext{color:blue;}
      th, td {border: 1px solid #000000; text-align: left;}
      td.submit{border:none;}
      #submit1{margin-left:28%;}
      .container{width:50%;border-radius:6px; margin-right:auto; margin-left:auto;}
      form, table {margin-right:auto; margin-left:auto;}
    </style>
  </head>
  <body>	
    <div class="container">
        <h1 class="bluetext">Birthday, Today, and Age</h1>
        <hr>
        <!--Form--> 
        <form id="form1" method="post" action="exercise7c.php" >
          <table>
            <tr> 
              <th><label for=input1>Enter your birthday date</label></th>
              <td><input id=input1 type="number" name="theDate" min="1" max="31" size="5" required="required"></td> 
            </tr>
            <tr>
              <th><label for=input2>Enter your birthday month</label></th>
              <td><input id=input2 type="number" name="theMonth" min="1" max="12" size="5" required="required"></td> 
            </tr>
            <tr>
              <th><label for=input3>Enter your birthday year</label></th>	
              <td><input id=input3 type="number" name="theYear" min="0" max="9999" size="5" required="required"></td> 
            </tr>	
            <tr>	
              <td class="submit"></td> 
              <td class="submit"><input id="submit1" type="submit" name="send" value="SEND" /></td>
            </tr>
          </table>
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
        h1, p{font-size:100%; text-align: center;}
        .container{width:50%; border: 1px solid #000000; border-radius:6px; margin-right:auto; margin-left:auto; padding:1% 1% 1% 1%;}
        #back{width:inherit; margin-right:auto; margin-left:auto;}
    </style>
  </head>
  <body>			
    <div class="container">
    <h1 class="bluetext">Birthday, Today, and Age</h1>
    <hr>
  _END;
    //Assign the data collected from the form to variables
    $userInput = array('mm'=>$_POST["theMonth"], 
                        'dd'=>$_POST["theDate"], 
                        'yyyy'=>$_POST["theYear"]); 
    //Create function
    function set_birthday($a){
        if (checkdate($a['mm'], $a['dd'], $a['yyyy']))
            return TRUE;
        else
            return FALSE;
    }
    //Create function
    function get_current_date(){
        $nowText=date('F d, Y');
        $nowNumber=strtotime('today');
        $nowDate=array('str'=>$nowText, 'nbr'=>$nowNumber);
        return $nowDate;
    }
    //Create function
    function get_birthday($a, $b){
      $dy=$a['dd'];
      $mt=$a['mm'];
      $yr=$a['yyyy'];
      if (strtotime("$dy-$mt-$yr")<$b){   
          $birthText=date('F d, Y', mktime(0,0,0,$a['mm'], $a['dd'], $a['yyyy']));
          $birthNumber=strtotime("$dy-$mt-$yr");
          $birthDate=array('str'=>$birthText, 'nbr'=>$birthNumber);
          return $birthDate;
      }
      else {
          return FALSE;
      }
    } 
    //Create function  
    //$a is birthdate and $b is nowdate
    function get_age($a, $b){
        $ageInDays = floor(($a - $b) / 86400);
        $ageInYears = floor($ageInDays / 365);
        $ageInMonths = floor(($ageInDays - ($ageInYears * 365)) / 30);
        $age=array('inMonth'=>$ageInMonths, 'inYear'=>$ageInYears);
        return $age;
    }
    //Create function
    function all_messages(){
      $messages=array(
        'errValid'=>'Error! The birthday entered is not a valid date.',
        'errBefore'=>"Error! The birthday entered is not before today's date.",
        'birthDate'=>"Your birthday is: ",
        'todayDate'=>"Today is: ",
        'age'=>"Consequenlty you are : ",
        'year'=>"years and ",
        'month'=>"months old."
        );
      return $messages;
    }
    //Create function
    function display_output(){
      global $userInput;
      $msg = all_messages();
      if (set_birthday($userInput)==FALSE){
        echo'<p class="redtext">'.$msg['errValid'].'</p>';
      }else{
        $currentDate=get_current_date();
        if (get_birthday($userInput, $currentDate['nbr'])==FALSE){
          echo'<p class="redtext">'.$msg['errBefore'].'</p>';
        }
        else{
          $birtdayDate=get_birthday($userInput, $currentDate['nbr']);
          $yourAge=get_age($currentDate['nbr'], $birtdayDate['nbr']);
          echo'<p>'. $msg['birthDate'] . $birtdayDate['str'] . '</p>';
          echo'<p>'. $msg['todayDate'] . $currentDate['str'] . '</p>';
          echo'<p class="redtext">' . $msg['age'] . $yourAge['inYear'] . 
              " " . $msg['year'] . $yourAge['inMonth'] . " " . $msg['month'] . '</p>';
        }     
      }
    }

    display_output();

echo <<<_END
    <div id="back">
        <a href="exercise7c.php"><input type="submit" value="Try again!"></a>
    </div>
    </div> 
  </body>
</html>
_END;
} 
?>












