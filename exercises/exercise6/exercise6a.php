<?php
/*
 * exercise6a.php
*/
//Form : Go below when the form is not submitted yet 
if (!(isset($_POST['sub']))) {
echo <<<_END
<!DOCTYPE html>
<html>  
   <head>
      <title>Question</title>
      <style>
         .bluetext{color:blue;}
         body{margin-right:auto; margin-left:auto;}
         .container{width:200px;border-radius:6px; margin-right:auto; margin-left:auto;}
      </style>
   </head>
   <body>  
      <form action="exercise6a_checkboxArray" method="post">  
         <div class="container">  
            <h1 class="bluetext">Order Form</h1>
            <table border="1">  
               <tr>  
                  <td colspan="2">Select your Services:</td>  
               </tr>  
               <tr>  
                  <td><label for="i1">TV cable<label></td>  
                  <td><input id="i1" type="checkbox" name="techno[]" value="TV cable"></td>  
               </tr>  
               <tr>  
                  <td>Mobile phone</td>  
                  <td><input type="checkbox" name="techno[]" value="Mobile phone"></td>  
               </tr>  
               <tr>  
                  <td>Wired phone</td>  
                  <td><input type="checkbox" name="techno[]" value="Wired phone"></td>  
               </tr>  
               <tr>  
                  <td>Cable Internet</td>  
                  <td><input type="checkbox" name="techno[]" value="Cable Internet"></td>  
               </tr> 
               <tr>  
                  <td>Fiber Internet</td>  
                  <td><input type="checkbox" name="techno[]" value="Fiber Internet"></td>  
               </tr>  
               <tr>  
                  <td>Home Alarm</td>  
                  <td><input type="checkbox" name="techno[]" value="Home Alarm"></td>  
               </tr>
               <tr>  
                  <td>Smart Home</td>  
                  <td><input type="checkbox" name="techno[]" value="Smart Home"></td>  
               </tr>
               <tr>  
                  <td colspan="2" align="center"><input type="submit" value="SEND" name="sub"></td>  
               </tr>  
            </table>  
         </div>  
      </form>  
   </body>
</html>
_END;
}
//Form Handling: Go below only when the form is submitted
else{
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
            <h1 class="redtext">You selected the following services:</h1>
            <hr>
_END;

      if (isset($_POST['techno'])){
         $checkboxList=$_POST['techno'];  

         echo"<ol>";
         foreach($checkboxList as $item) {  
            echo"<li>$item</li>";
         }  
         echo"</ol>";
      }else{
         echo"<p>You forgot to select at least 1 service</p>";
      }
echo <<<_END
         <a href="exercise6a_checkboxArray.php">Try again!</a>
      </body>
   </html>
_END;
}     

?> 
   
