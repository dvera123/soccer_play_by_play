<!DOCTYPE html>
<?php
require "../util/Connection.php";
?>
<html>
    <head>
        <?php 
            include "../../global/header/header.php"
        ?>
        <title></title>
    </head>
    <body>
        <h1>Teams</h1>
        <table>
            <tbody>
            <thead>
                <tr>
                    <th>name</th>
                </tr>
            </thead>
            <?php
                $con = getConnection();

                $result = mysqli_query($con, 
                    "CALL sp_get_teams") or die("Query fail: " . mysqli_error());

                 while ($row = mysqli_fetch_array($result)){  
                     echo '<tr>';
                     echo '<td>'.$row['name'].'</td>';
                     echo '</tr>';
                 }
            ?>
            </tbody>
        </table>
    </body>
</html>
