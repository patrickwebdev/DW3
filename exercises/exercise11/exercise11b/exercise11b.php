<?php
//exercise11b.php
if (!isset($_POST['send'])) {
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Question</title>
    <style>
      h1 {
        font-size: 100%;
        text-align: center;
      }

      .bluetext {
        color: blue;
      }

      th,
      td {
        border: 1px solid #000000;
        text-align: left;
      }

      td.submit {
        border: none;
      }

      #submit1 {
        margin-left: 28%;
      }

      .container {
        width: 50%;
        border-radius: 6px;
        margin-right: auto;
        margin-left: auto;
      }

      form,
      table {
        margin-right: auto;
        margin-left: auto;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h1 class="bluetext">Use of Classes, Properties, Methods and Objects</h1>
      <hr>
      <!--Form-->
      <form id="form1" method="post" action="exercise11b.php">
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
            <th><label for=input3>Enter your Birthday Year</label></th>
            <td><input id=input3 type="number" name="theYear" min="1900" size="5" required="required"></td>
          </tr>
          <tr>
            <th><label for=input4>Enter your Email</label></th>
            <td><input id=input4 type="email" name="theEmail" required="required"></td>
          </tr>
          <tr>
            <th><label for=input5>Enter your Phone Number</label></th>
            <td><input id=input5 type="tel" name="thePNumber" required="required"></td>
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
<?php
}

//Form Handling
//Go below only after a user pressed the input button name="send" 
else {
  ?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Answer</title>
    <style>
      .redtext {
        color: red;
      }

      h1,
      p {
        font-size: 100%;
        text-align: left;
      }

      .container {
        width: 50%;
        border: 1px solid #000000;
        border-radius: 6px;
        margin-right: auto;
        margin-left: auto;
        padding: 1% 1% 1% 1%;
      }

      #back {
        width: inherit;
        margin-right: auto;
        margin-left: auto;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h1 class="bluetext">Use of Classes, Properties, Methods and Objects</h1>
      <hr>
      <?php
      //Load the content of the file where the class is
      require_once 'Teachers.php';

      //Instantiate objects and Assign value to properties via the Constructor Method
      $currentTeacher = new Teachers(
        $_POST['theFName'],
        $_POST['theLName'],
        $_POST['theYear'],
        $_POST['theEmail'],
        $_POST['thePNumber']
      );

      //Display outputs from methods
      $currentTeacher->profile();

      ?>
      <div id="back">
        <a href="exercise11b.php"><input type="submit" value="Try again!"></a>
      </div>
    </div>
  </body>

  </html>
<?php
}
?>
