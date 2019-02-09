<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content= "text/html; charset=UTF-8">                                         <link href="style.css" type="text/css" rel="stylesheet">              
        <title>Wishlist</title>
    </head>
    <body>
        <h2> Wish List of User:</h2> <?php echo htmlentities($_GET["user"])."<br/>";?> 
        <?php
        
        $con = mysqli_connect("localhost", "root", "root");
        if (!$con) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                 . mysqli_connect_error());
        }
        mysqli_set_charset($con, 'utf-8');
        
        mysqli_select_db($con, "wishlist");
        $user = mysqli_real_escape_string($con, htmlentities($_GET["user"]));

        $wisher = mysqli_query($con, "SELECT id FROM wishers WHERE name='" . $user . "'");

        if (mysqli_num_rows($wisher) < 1) {
            exit("The person " . htmlentities($_GET["user"]) . " is not found. ");
        }
        $row = mysqli_fetch_row($wisher);
        $wisherID = $row[0];
        mysqli_free_result($wisher);

        ?>
         <table id="wishes">
            <tr>
                <th>Item</th>
                <th>Due Date</th>
            </tr>
            <?php
            $result = mysqli_query($con, "SELECT description, due_date FROM wishes WHERE wisher_id=" . $wisherID);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td>" . htmlentities($row['description']) . "</td>";
                echo "<td>" . htmlentities($row['due_date']) . "</td></tr>\n";
            }
            mysqli_free_result($result);
            mysqli_close($con);
            ?>
        </table>
    </body>
<!--    incase we decide to create different users, might also require another database and more security?-->