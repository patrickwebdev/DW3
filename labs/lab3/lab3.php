<!DOCTYPE html>
<html>
    <head>
        <title>Loop HTML Table</title>
    </head>
    <body>
        <?php
            // if form not yet submitted display form
            if (!isset($_POST['submit'])) 
            {
        ?>
                <h1>This will display a table for you</h1>
                <form method="post" action="lab3_table_loop.php">
                    <p>
                        <label>
                            Enter the number of rows: 
                            <input type="number" name="rows" min="1" require="required" />
                        </label>
                    </p>
                    <p>
                        <label>
                            Enter the number of columns:
                            <input type="number" name="columns" min="1" require="required" />
                        </label>
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Submit" />
                    </p>
                </form>
        <?php
        // if form submitted process form input
        } 
        else 
        {
            // retrieve number from POST submission
            $user_rows = $_POST['rows'];
            $user_columns = $_POST['columns'];
            // create the html table
            echo "<table border=\"1\">";
            for ($row=1; $row<=$user_rows; $row++) 
            {
                echo "<tr>";
                for ($col=1; $col<=$user_columns; $col++) 
                {
                    echo "<td>$row.$col</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        ?>
    </body>
</html>
