<!DOCTYPE html>
<?php
require './actions/GetTeam.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Teams</h1>
        <a href="/soccer_play_by_play/admin/team/add.php">add new team</a>
        <table>
            <tbody>
            <thead>
                <tr>
                    <th>name</th>
                </tr>
            </thead>
            <?php
                
                $result = getTeams();

                 while ($row = mysqli_fetch_array($result)){  
                     echo '<tr>';
                     echo '<td>'.$row['name'].'</td>';
                     echo '<td><a href="update.php?team_id='.$row['id'].'">update</a></td>';
                     echo '<td><a href="delete.php?team_id='.$row['id'].'">delete</a></td>';
                     echo '</tr>';
                 }
            ?>
            </tbody>
        </table>
    </body>
</html>
