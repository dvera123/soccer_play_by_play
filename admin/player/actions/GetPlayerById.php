<?php

include '../util/Connection.php';

function getPlayerById($p_id){
    $con = getConnection();

     $results = mysqli_query($con, 
        'CALL sp_get_player_by_id('.$p_id.')') or die('Query fail: ' . mysqli_error());
    
     mysqli_close($con);
    
    return $results;
}

