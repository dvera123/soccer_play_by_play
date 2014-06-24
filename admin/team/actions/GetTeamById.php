<?php

include '../util/Connection.php';

function getTeamById($t_id){
    $con = getConnection();

     $results = mysqli_query($con, 
        'CALL sp_get_team_by_id('.$t_id.')') or die('ery fail: ' . mysqli_error());
    
     mysqli_close($con);
    
    return $results;
}

