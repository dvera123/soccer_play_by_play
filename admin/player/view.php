<!DOCTYPE html>
<?php
require "./actions/GetPlayer.php";
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
               
                $result = getPlayers();

                 while ($row = mysqli_fetch_array($result)){  
                     echo '<tr>';
                     echo '<td>'.$row['name'].'</td>';
                     echo '<td>'.$row['number'].'</td>';
                     echo '<td>'.$row['is_staple'].'</td>';
                     echo '<td>'.$row['team'].'</td>';
                     echo '<td><a href="update.php?player_id='.$row['id'].'">update</a></td>';
                     echo '</tr>';
                 }
            ?>
            </tbody>
        </table>
    </body>
</html>
