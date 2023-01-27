<?php
//exercise2fr.php
if (!isset($_POST['send'])) {
echo <<<_END
<!DOCTYPE html>
<html>  
  <head>
    <title>Calculateur de Factures-Questions</title>
    <style>
      .textblue{color:blue;}
    </style>
  </head>
  <body>			
    <h1 class="textblue">Parlez-moi de votre achat, j'afficherai votre facture</h1>
    <hr> 
    <!--Form--> 
    <form id="form1" method="post" action="exercise2fr.php" > <!--Beginning form tag-->
      <!--Form fields to input data-->
      <label for="itemname">Entrez le nom de l'article que vous avez acheté</label> 
      <br />
      <input id="itemname" type="text" name="iname" placeholder="nom de l'article" required="required"> 
      <br />
      <label for="itemquantity">Entrez la quantité achetée de l'article</label> 
      <br />
      <input id="itemquantity" type="number" min="0.01" step="0.01" name="iquantity" placeholder="quantité achetée" required="required"> 
      <br />
      <label for="itemunitprice">Entrez le prix unitaire de l'article acheté</label> 
      <br />
      <input id="itemunitprice" type="number" min="0.01" step="0.01" name="iunitprice" placeholder="prix unitaire en CA$" required="required"> 
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
    <title>Calculateur de Factures-Reponse</title>
    <style>
      .textgreen{color:blue;}
      .textred{color:red;}
    </style>
  </head>
  <body>			
    <h1 class="textgreen">Vous m'avez parlé de votre achat, maintenant voyez votre facture ci-dessous</h1>
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
    echo"<h2>Vous avez acheté  <span class=\"textred\">$itemQuantity $itemName</span> qui coûtent  <span class=\"textred\">$itemUnitPrice</span> CA$ chacun.</h2>";
    echo"<h2>Le SOUS-TOTAL dû pour votre achat est  <span class=\"textred\">$subtotal</span> CA$.</h2>";
    echo"<h2>Le TOTAL dû pour votre achat est de  <span class=\"textred\">$total</span> CA$.</h2>";
echo <<<_END
    <a href="http://localhost/dw3/exercises/exercise2fr">RETOUR AU FORMULAIRE DU CALCULATEUR</a>
  </body>
</html>
_END;
} 
?>
