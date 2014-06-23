<!DOCTYPE html>
<?php
require "../util/Connection.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Players</h1>
        <?php
            $con = getConnection();
            
            $result = mysqli_query($con, 
                "CALL sp_get_players") or die("Query fail: " . mysqli_error());

             //loop the result set
             while ($row = mysqli_fetch_array($result)){   
                 echo $row['name']; 
             }
        ?>
    </body>
</html>
