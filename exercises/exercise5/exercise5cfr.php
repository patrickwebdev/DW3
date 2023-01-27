<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            // if form not yet submitted display form
            if (!isset($_POST['submit'])) 
            {
        ?>
                <h1>This will display each letter of your text on a new line</h1>
                <form method="post" action="exercise5cfr.php">
                    <label>Write your text below: 
                        <input type="text" name="your_name" size="" />
                    </label>
                    <br /><br />
                    <input type="submit" name="submit" value="Submit" />
                </form>
        <?php
        // if form submitted process form input
        } 
        else 
        {
            // retrieve number from POST submission
            $name = strtoupper($_POST['your_name']);
            // keep the same characters once
            $name = count_chars($name, 3);
            // keep only a-z ; A-Z ; and 0-9 characters
            $name = preg_replace("/[^a-zA-Z0-9]+/","",$name);

            $length = strlen($name);
            $i = 1;
            echo"Votre texte comprend les caractères distincts suivants:<br/>";
            echo "<ul>";
                for ($x=0; $x<$length; $x++) 
                {
                    echo "<li>Lettre $i : $name[$x]</li>";
                    $i++;
                }
            echo "</ul>";
        }

        ?>
    </body>
</html>