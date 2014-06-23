<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Players</h1>
        <?php
            $con = new mysqli('localhost', 'root', 'root', 'soccer_play_by_play');
 
            $result = mysqli_query($con, 
                "CALL sp_get_players") or die("Query fail: " . mysqli_error());

             //loop the result set
             while ($row = mysqli_fetch_array($result)){   
                 echo $row['name']; 
             }
            
        ?>
    </body>
</html>
