<?php 
//exercise11a.php
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
          <h1 class="bluetext">Use of Classes, Properties, Methods and Objects</h1>
          <hr>
          <!--Form--> 
          <form id="form1" method="post" action="exercise11a.php" >
            <table>
              <tr> 
                <th><label for=input1>Enter your First Name</label></th>
                <td><input id=input1 type="text" name="theFName" required="required"></td> 
              </tr>
              <tr> 
                <th><label for=input2>Enter your Last Name</label></th>
                <td><input id=input2 type="text" name="theLName" required="required"></td> 
              </tr>
              <tr>
                <th><label for=input3>Enter your birthday year</label></th>	
                <td><input id=input3 type="number" name="theYear" min="1900" size="5" required="required"></td> 
              </tr>	
              <tr> 
                <th><label for=input4>Enter your Email</label></th>
                <td><input id=input4 type="email" name="theEmail" required="required"></td> 
              </tr>
              <tr> 
                <th><label for=input5>Enter your Phone Number</label></th>
                <td><input id=input5 type="tel" name="thePNumber" min="1" required="required"></td> 
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
          h1, p{font-size:100%; text-align: left;}
          .container{width:50%; border: 1px solid #000000; border-radius:6px; margin-right:auto; margin-left:auto; padding:1% 1% 1% 1%;}
          #back{width:inherit; margin-right:auto; margin-left:auto;}
      </style>
    </head>
    <body>			
      <div class="container">
      <h1 class="bluetext">Use of Classes, Properties, Methods and Objects</h1>
      <hr>
    _END;
    
    //Create the class Teachers
    class Teachers{
      public $first_name;
      public $last_name;
      public $birthdayYear; 
      public $email;
      public $phoneNumber;
 
      private function setAge(){
        return (getdate()['year']-$this->birthdayYear);
      }
      private function getAge(){
        return $this->setAge();
      }

      public function profile(){
        echo"<pre>";
            echo"<p>First Name:".$this->first_name."</p>";
            echo"<p>First Name:".$this->last_name."</p>";
            echo"<p>Email     :".$this->email."</p>";
            echo"<p>Phone     :".$this->phoneNumber."</p>";
            echo"<p>Age       :".$this->getAge()."</p>";
        echo"</pre>";
      }
    
    }

    //Instantiate objects
    $currentTeacher = new Teachers;

    //Assign the data collected from the form to the properties
    $currentTeacher->first_name = $_POST['theFName'];
    $currentTeacher->last_name = $_POST['theLName'];
    $currentTeacher->birthdayYear = $_POST['theYear'];
    $currentTeacher->email = $_POST['theEmail'];
    $currentTeacher->phoneNumber = $_POST['thePNumber'];

    //Display outputs from methods
    $currentTeacher->profile();

    echo <<<_END
    <div id="back">
        <a href="exercise11a.php"><input type="submit" value="Try again!"></a>
    </div>
    </div> 
  </body>
</html>
_END;
} 
?>
