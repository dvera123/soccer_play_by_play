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
        <h1>Players</h1>
        <table>
            <tbody>
            <thead>
                <tr>
                    <th>name</th>
                    <th>number</th>
                    <th>Is Staple</th>
                    <th>Team</th>
                </tr>
            </thead>
            <?php
                $con = getConnection();

                $result = mysqli_query($con, 
                    "CALL sp_get_players") or die("Query fail: " . mysqli_error());

                 while ($row = mysqli_fetch_array($result)){  
                     echo '<tr>';
                     echo '<td>'.$row['name'].'</td>';
                     echo '<td>'.$row['number'].'</td>';
                     echo '<td>'.$row['is_staple'].'</td>';
                     echo '<td>'.$row['team'].'</td>';
                     echo '</tr>';
                 }
            ?>
            </tbody>
        </table>
    </body>
</html>
