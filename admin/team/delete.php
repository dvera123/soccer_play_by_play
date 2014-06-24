<!DOCTYPE html>
<?php
require './actions/GetTeamById.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Update Team</h1>
        <p>Are you sure you want to remove this team from data base?</p>
        <form method="POST" action="actions/DeleteTeam.php">
            <?php
                $con = getConnection();
                $t_id = $_GET['team_id'];
                $result = getTeamById($t_id);

                 while ($row = mysqli_fetch_array($result)){  
                     echo '<input type="hidden" name="id" value="'.$row['id'].'"/>';
                     echo '<input disabled type="text" name="name" value="'.$row['name'].'"/>';
                    
                 }
            ?>
            <input type="submit"/>
        </form>
        <?php
        
        ?>
    </body>
</html>
