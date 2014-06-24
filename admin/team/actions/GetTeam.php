<?php

include '../util/Connection.php';

function getTeams(){
    $con = getConnection();

     $results = mysqli_query($con, 
        "CALL sp_get_teams") or die("Query fail: " . mysqli_error());
    
     mysqli_close($con);
    
    return $results;
}