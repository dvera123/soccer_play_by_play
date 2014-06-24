<!DOCTYPE html>
<?php
require_once(dirname(__FILE__) . './actions/GetPlayerById.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Update Player</h1>
        <form method="POST" action="actions/UpdatePlayer.php">
            <?php
                $con = getConnection();
                $p_id = $_GET['player_id'];
                $result = mysqli_query($con, 
                    'CALL sp_get_player_by_id('.$p_id.')') or die("Query fail: " . mysqli_error());

                 while ($row = mysqli_fetch_array($result)){  
                     echo '<input type="hidden" name="id" value="'.$row['id'].'"/>';
                     echo '<input type="hidden" name="team" value="'.$row['team_id'].'"/>';
                     echo '<input type="text" name="name" value="'.$row['name'].'"/>';
                     echo '<input type="text" name="number" value="'.$row['number'].'"/>';
                     echo '<select name="is_staple">';
                     if($row['is_staple']=='1'){
                        echo '<option value="0">no</option>';
                        echo '<option value="1" selected >yes</option>'; 
                     }
                     else{
                        echo '<option value="0" selected >no</option>';
                        echo '<option value="1">yes</option>'; 
                     }
                     echo '</select>';
                 }
            ?>
            <input type="submit"/>
        </form>
        <?php
        
        ?>
    </body>
</html>
