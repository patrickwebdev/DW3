<!--lab1a.php-->
<!DOCTYPE html>
<html>
    <head>
        <style>
            td {
                border: solid 1px #000000;
            }
        </style>
    </head>
    <body>
        <h1>3 Primary Colors RGB</h2>
        <table>
        <tr>
            <td><h2>Red</h2></td>
            <td style="width:63px; background-color:#ff0000;"></td>
        </tr>
        <tr>
            <td><h2><?php echo 'Blue'; ?></h2></td>
            <td style="width:63px; background-color:<?php echo '#0000ff';?>;"></td>
        </tr>
        <?php
            echo "<tr>\n";
            echo " <td><h2>Green</h2></td>\n";
            echo " <td style=\"width:63px; background-color:#008000\"></td>\n";
            echo "</tr>\n";
        ?>
        </table>
    </body>
</html>
