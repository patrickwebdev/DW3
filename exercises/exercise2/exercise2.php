<?php
//exercise2.php
if (!isset($_POST['send'])) {
echo <<<_END
<!DOCTYPE html>
<html>  
  <head>
    <title>Total due Calculator</title>
    <style>
      .textblue{color:blue;}
    </style>
  </head>
  <body>			
    <h1 class="textblue">Tell me about your purchase I'll display your total due</h1>
    <hr> 
    <!--Form--> 
    <form id="form1" method="post" action="exercise2.php" > <!--Beginning form tag-->
      <!--Form fields to input data-->
      <label for="itemname">Enter the name of the item you bought</label> 
      <br />
      <input id="itemname" type="text" name="iname" placeholder="Item name" required="required"> 
      <br />
      <label for="itemquantity">Enter the quantity bougth of the item</label> 
      <br />
      <input id="itemquantity" type="number" min="0.01" step="0.01" name="iquantity" placeholder="Item quantity" required="required"> 
      <br />
      <label for="itemunitprice">Enter the unit price of the item bougth</label> 
      <br />
      <input id="itemunitprice" type="number" min="0.01" step="0.01" name="iunitprice" placeholder="Unit price in CA$" required="required"> 
      <br />
      <!--Submit button to send form data-->		
      <input id="submitbutton1" type="submit" name="send" value="SEND" />
    </form> <!--Closing form tag-->
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
    <title>HTML Form and PHP Form Handling</title>
    <style>
      .textgreen{color:blue;}
      .textred{color:red;}
    </style>
  </head>
  <body>			
    <h1 class="textgreen">You told me about your purchase, see below your total due</h1>
    <hr> 
  _END;
    //Assign to PHP variables data collected from the form   
    $itemName = $_POST["iname"]; 
    $itemQuantity = $_POST["iquantity"];
    $itemUnitPrice = $_POST["iunitprice"]; 
    //Constant declaration and assignment
    define("TPSRATE",0.05);
    define("TVQRATE",0.09975);
    //Calculations
    $subtotal=$itemQuantity*$itemUnitPrice;
    $total=$subtotal+($subtotal*TPSRATE)+($subtotal*TVQRATE);
    $total=number_format($total, 2, '.', ''); //Built-in function to keep only 2 digits as decimal values
    $subtotal=number_format($subtotal, 2, '.', ''); //Built-in function to keep only 2 digits as decimal values
    //Display outputs  
    echo"<h2>You bought <span class=\"textred\">$itemQuantity $itemName</span> that cost <span class=\"textred\">$itemUnitPrice</span> CA$ each.</h2>";
    echo"<h2>The SUB-TOTAL due for your purchase is <span class=\"textred\">$subtotal</span> CA$.</h2>";
    echo"<h2>The TOTAL due for your purchase is <span class=\"textred\">$total</span> CA$.</h2>";
echo <<<_END
    <a href="exercise2.php">BACK TO THE CALCULATOR FORM</a>
  </body>
</html>
_END;
} 
?>
