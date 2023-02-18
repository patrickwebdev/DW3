<?php
/**
 *exercise11c.php
 */
if (!isset($_POST['send'])) {
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Question</title>
    <style>
      .blueText {
        color: blue;
      }

      .container {
        width: 50%;
        border-radius: 6px;
        margin: 5px auto 5px auto;
        padding:2% 2% 2% 2%;
        border: 2px solid black;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h1 class="blueText">Dataset Analysis</h1>
      <hr>
      <!--Form-->
      <form id="form1" method="post" action="exercise11c.php">
        <!--Form fields to input data-->
        <label for="input1">Enter a set of numbers with each 2 numbers separated by a comma</label>
        <input id="input1" type="text" name="userDataSet" required="required">
        <input id="submitbutton1" type="submit" name="send" value="SEND" />
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
      .redText {
        color: red;
      }

      #back {
        width: inherit;
        margin-right: auto;
        margin-left: auto;
      }

      table {
        margin: 1px auto 1px auto;
      }

      td {
        border: 1px solid black
      }

      .container {
        width: 50%;
        border-radius: 6px;
        margin: 5px auto 5px auto;
        border: 2px solid black;
        padding:2% 2% 2% 2%;
        text-align:center;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h1>Dataset Analysis Result</h1>
      <hr>
      <?php
      //Assign the data collected from the form to variables
      $userInput = $_POST['userDataSet'];

      //Create message
      $messages['err'] = "Wrong inputs! Enter only numbers separated by a comma between each two numbers.";

      //Load files
      require_once 'functions.php';

      //If the dataset include at least 1 value that is not a number
      if (getDataSet($userInput) == False) {
        echo '<p class="redText">' . $messages['err'] . '</p>';
      }
      //If the dataset include only values that are numbers
      else {
        //Load files
        require_once 'CountNumbers.php';
        require_once 'CombineNumbers.php';
        require_once 'CompareNumbers.php';

        //Create an object
        $currentCombine = new CompareNumbers(getDataSet($userInput));
        //Invoke methods
        $currentCombine->displayOutputs1();
        $currentCombine->displayOutputs2();
        $currentCombine->displayOutputs3();

      }

      ?>
      <div id="back">
        <a href="exercise11c.php"><input type="submit" value="Try again!"></a>
      </div>
    </div>
  </body>

  </html>
  <?php
}
?>
