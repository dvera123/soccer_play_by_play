<?php

include '../util/Connection.php';

function getPlayers(){
    $con = getConnection();

     $results = mysqli_query($con, 
        "CALL sp_get_players") or die("Query fail: " . mysqli_error());
    
     mysqli_close($con);
    
    return $results;
}

